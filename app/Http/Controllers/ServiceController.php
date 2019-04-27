<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AService')->with('AService',Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        
       $this->validate($request,[
            'Nom' => 'required',
            'Description' =>'required',
            'Image' => 'required | image' 
        ]);
        
        $featured = $request->Image;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/services',$featured_new_name);
        
        
        $service = Service::create([
            'service' => $request->Nom,
            'description' => $request->Description,
            'featured' => 'uploads/services/'.$featured_new_name
        ]);
        
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        
        $feature = $request->Image;
        $feature_new_name = time().$feature->getClientOriginalName();
        $feature->move('uploads/services',$feature_new_name);
       
        
        $service->service = $request->Nom;
        $service->description = $request->Description;
        $service->featured = 'uploads/services/'.$feature_new_name;
       
        $service->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        unlink($service->featured);
        $service->delete();

        return redirect()->back();
    }
}
