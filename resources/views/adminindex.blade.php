<!DOCTYPE html>
<html>
	<head>
		<title>R&A Com Admin</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>R&A Communication Contact</title>
		<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">
		<style type="text/css">
			.first{
			    background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.5)),url("{{asset('images/AdminLogin.svg')}}");
			    background-size:100% 100%; 
			}           
		</style>
	</head>
	<body>
		<div class="container-fluid first">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<img src="{{asset('images/LOGO.png')}}">
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<form action="{{route('adminpanel')}}" method="post">
					{{ csrf_field() }}
                        <div class="form-group">
                            <label for="email">Addresse Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email">
							@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control"  placeholder="Mot de passe" name="password">
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-primary ">SE CONNECTER</button>
                        </div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>