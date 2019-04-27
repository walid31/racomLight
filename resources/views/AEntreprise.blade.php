@extends('content')
@section('option')
	<link rel="stylesheet" type="text/css" href="{{asset('css/AEntreprise.css')}}">
	<div class="container-fluid service-content">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
				<h1 class="text-center font-weight-bold">Entreprise</h1>
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 tableFixHead">
						<form>
                            <div class="form-group row">
                                <label for="NomE" class="col-3">Nom de l'entreprise</label>
                                <input id="IN1" type="text" class="form-control col-7" name="NomE" disabled="true">
                                <label class="edit" onclick='Enable("IN1");'>edit</label>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-3">Email</label>
                                <input id="IN2" type="email" class="form-control col-7" name="email" disabled="true">
                                <label class="edit" onclick='Enable("IN2");'>edit</label>
                            </div>
                            <div class="form-group row">
                                <label for="tel" class="col-3">tel</label>
                                <input id="IN3" type="text" class="form-control col-7"  name="tel" disabled="true">
                                <label class="edit" onclick='Enable("IN3");'>edit</label>
                            </div>
                            <div class="form-group row">
                                <label for="local" class="col-3">Localisation</label>
                                <input id="IN4" type="text" class="form-control col-7" name="local" disabled="true">
                                <label class="edit" onclick='Enable("IN4");'>edit</label>
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
        	}
        </script>
@stop