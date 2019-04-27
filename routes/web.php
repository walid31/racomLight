<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});
/*
Route::get('/service', function () {
    return view('service');
}); 
*/
Route::get('/admin', function () {
    return view('adminindex');
});

Route::post('/AdminAccount', [
    'uses' => 'adminPanelController@create',
    'as' => 'adminpanel'
]);

Route::get('/AdminAccount/AService', [
    'uses' => 'ServiceController@index',
    'as' => 'AService.index'
]);

Route::post('/AdminAccount/AService/Update/{id}',[
    'uses' => 'ServiceController@update',
    'as' => 'service.update'   
]);

Route::post('/AdminAccount/AService/delete/{id}',[
    'uses' => 'ServiceController@destroy',
    'as' => 'service.delete'   
]);

Route::post('/AdminAccount/AService/Add',[
    'uses' => 'ServiceController@store',
    'as' => 'service.add'   
]);

/*     
Route::get('/AdminAccount/Actualité', function () {
    return view('AActualité');
});
Route::get('/AdminAccount/Promotion', function () {
    return view('APromotion');
});
Route::get('/AdminAccount/Messagerie', function () {
    return view('AMessagerie');
});
Route::get('/AdminAccount/Activité', function () {
    return view('AActivité');
});
Route::get('/AdminAccount/Entreprise', function () {
    return view('AEntreprise');
});
Route::get('/AdminAccount/SocialMedia', function () {
    return view('ASocial Media');
});*/
Route::get('/AdminAccount/Profil', function () {
    return view('AProfil');
});
Route::post('/AdminAccount/Profil/edit', [
    'uses' => 'AProfilController@edit',
    'as' => 'profil.edit'
]);