@extends('content')
@section('option')
    <link rel="stylesheet" type="text/css" href="{{asset('css/AActualité.css')}}">
	<div class="container-fluid service-content">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-10 col-10 ">
				<h1 class="text-center font-weight-bold">Actualité</h1>
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
									<th class="Normal">Actualité</th>
									<th class="Normal">Image</th>
									<th class="Petit"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="Normal" id="x1">Concour</td>
									<td class="Grand" id="x1"><img src="{{asset('images/admin/Promotion.jpg')}}" alt=""></td>
									<td class="Petit" data-toggle="modal" data-target="#ModalDelete"><img data-toggle="tooltip" data-placement="top" title="Delete" src="{{asset('images/admin/delete.svg')}}"></td>
								</tr>
								<tr>
									<td class="Normal" id="x1">Concour</td>
									<td class="Grand" id="x1"><img src="{{asset('images/admin/Promotion.jpg')}}" alt=""></td>
									<td class="Petit" data-toggle="modal" data-target="#ModalDelete"><img data-toggle="tooltip" data-placement="top" title="Delete" src="{{asset('images/admin/delete.svg')}}"></td>
								</tr>
							</tbody>
						</table>
					</div>			
				</div>
			</div>
		</div>
		<div class="modal fade" id="ModalDelete" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center" >Etes vous sure?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                        <div class="modal-footer ">
                            <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary ">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalCreate" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center" >Ajouter un Article</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="Nom">Nom de l'article</label>
                                <input type="text" class="form-control" name="Nom">
                            </div>
							<div class="file-field form-group">
								<label for="Image">Ajouter une image :</label>
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
@stop