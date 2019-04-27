@extends('content')
@section('option')
    <link rel="stylesheet" type="text/css" href="{{asset('css/AService.css')}}">
	<div class="container-fluid service-content">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10 col-10 ">
				<h1 class="text-center font-weight-bold">Services</h1>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-2">
				<button class="btn btn-primary"  data-toggle="modal" data-target="#ModalCreate">Ajouter</button>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 tableFixHead">
						<table class="table">
							<thead>
								<tr>
									<th class="Normal">Service</th>
									<th class="Grand">Description</th>
									<th class="Normal">Image</th>
									<th class="Petit"></th>
									<th class="Petit"></th>
								</tr>
							</thead>
							<tbody>
								
                                    @foreach ($AService as $service)
                                    <tr>
                                    <td class="Normal" id="x{{$service->id}}">{{$service->service}}</td>
									<td class="Grand" id="x{{$service->id}}">{{$service->description}}</td>
                                    <td class="Normal" id="x{{$service->id}}"><img src="http://127.0.0.1:8000/{{$service->featured}}" alt=""></td>
									<td class="Petit" data-toggle="modal" data-target="#ModalEdit"><img data-toggle="tooltip" data-placement="top" title="Edit" src="{{asset('images/admin/edit.svg')}}" onclick="Recupere('#x{{$service->id}}');" ></td>
									<td class="Petit" data-toggle="modal" data-target="#ModalDelete"><img data-toggle="tooltip" data-placement="top" title="Delete" src="{{asset('images/admin/delete.svg')}}"></td>
                                    </tr>
                                    <div class="modal fade" id="ModalDelete" tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="text-center" >Etes vous sure?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action=" {{route('service.delete',['id'=>$service->id])}} " method="POST">
                                                       {{ csrf_field() }}
                                                        <div class="modal-footer ">
                                                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
                                                            <button type="submit" class="btn btn-primary ">Valider</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="ModalEdit" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="text-center" >Modifier le service</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('service.update',['id'=>$service->id])}}" method="post" enctype="multipart/form-data">
                                                                {{ csrf_field() }}
                                                                <div class="form-group">
                                                                    <label for="Nom">Nom de service</label>
                                                                    <input id="EditNom" type="text" class="form-control" name="Nom" value="">
                                                                </div>
                                                                <div class="md-form form-group">
                                                                    <label for="Description">Description</label>
                                                                      <textarea id="EditDescription" class="md-textarea form-control" rows="3" name="Description" value=""></textarea>
                                                                </div>
                                                                <div class="file-field form-group">
                                                                    <label for="Image">Image :</label>
                                                                    <img id="EditImage" name="Image" src="">
                                                                    <input type="file" class="form-control" name="Image">
                                                                </div>
                                                                <div class="modal-footer ">
                                                                    <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
                                                                    <button type="submit" class="btn btn-primary ">Valider</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                    @endforeach
                                
							</tbody>
						</table>
					</div>			
				</div>
			</div>
		</div>
		
        <div class="modal fade" id="ModalCreate" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center" >Ajouter un service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('service.add')}}" method="POST" enctype= "multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="Nom">Nom de service</label>
                                <input type="text" class="form-control" name="Nom">
                            </div>
                            <div class="md-form form-group">
                            	<label for="Description">Description</label>
							  	<textarea class="md-textarea form-control" rows="3" name="Description"></textarea>
							</div>
							<div class="file-field form-group">
                                <label for="Image">Ajouter une image :</label>
                                <img id="EditImage" name="Image" src="">
								<input type="file" class="form-control" name="Image">
							</div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary ">Valider</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" charset="utf-8" async defer>
        	function Recupere(x){
        		var row = document.querySelectorAll(x);
        		var Nom = document.getElementById('EditNom');
        		Nom.value=row[0].textContent;
        		var Description = document.getElementById('EditDescription');
        		Description.value=row[1].textContent;
        		var Image = document.getElementById('EditImage');
        		Image.src=row[2].firstElementChild.attributes.src.nodeValue;
        	}		
        </script>
@stop
