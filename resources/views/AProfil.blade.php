@extends('content')
@section('option')
	<link rel="stylesheet" type="text/css" href="{{asset('css/AEntreprise.css')}}">
	<div class="container-fluid service-content">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
				<h1 class="text-center font-weight-bold">Profil</h1>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 tableFixHead">
                    <form action=" {{route('profil.edit')}} " method="POST">
                        {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="nomA" class="col-3">Nom de l'admin</label>
                                <input id="IN1" type="text" class="form-control col-7" name="NomA" disabled="true">
                                <label class="edit" onclick='Enable("IN1");'>edit</label>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-3">Email</label>
                                <input id="IN2" type="email" class="form-control col-7" name="email" disabled="true">
                                <label class="edit" onclick='Enable("IN2");'>edit</label>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-3">Mot de passe</label>
                                <input id="IN3" type="password" class="form-control col-7" placeholder="nouveau mot de passe" name="password" disabled="true">
                                <label class="edit" onclick='Enable("IN3");'>edit</label>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-3">Confirmation</label>
                                <input id="IN4" type="password" class="form-control col-7" placeholder="Confirmer le nouveau mot de passe" name="Cpassword" disabled="true">
                            </div>
                            <div class="modal-footer ">
                                <button type="submit" class="btn btn-primary " id="Btn" disabled="true">Valider</button>
                            </div>
                    	</form>
					</div>			
				</div>
			</div>
		</div>
        <script type="text/javascript" charset="utf-8">
        	function Enable(id){
        		document.getElementById('Btn').disabled=false;
        		document.getElementById(id).disabled=false;
        		if(id=="IN3"){
        			document.getElementById("IN4").disabled=false;
        		}
        	}
        </script>
@stop