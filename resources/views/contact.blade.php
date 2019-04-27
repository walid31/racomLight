<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>R&A Communication Contact</title>
		<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
		<style type="text/css">
			.first{
			    background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.5)),url("{{asset('images/contact.svg')}}");
			    background-size:100% 100%; 
			}           
		</style>
	</head>
	<body>
		<nav class="navbar fixed-top" >
            <img class="navbar-brand" src="{{asset('images/LOGO.png')}}">
            <div>
                <div class="navservices">
                    <a onclick="ShowServices()" class="dropbtn" style="color: white;">Nos services</a>
                    <div id="servicesListe" class="Service-content">
                        <a href="">Service1</a>
                        <a href="">Service2</a>
                        <a href="">Service3</a>
                    </div>
                </div>
                <a href="{{asset('contact')}}">Contact</a>
            </div>
        </nav>
        <div class="container-fluid first">
        	<div class="row ">
        		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 infos">
								<h3 class="text-center font-weight-bold">R&A Communication</h3>
	                            <h4 class="text-center font-weight-bold">numero de telephone</h4>
	                            <h4 class="text-center font-weight-bold">Racom.randa@gmail.com</h4>
	                            <h4 class="text-center font-weight-bold">localisation</h4>
							</div>
						</div>
						<div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-6 social-contact">
                                <a href="{{asset('https://www.facebook.com/racomDZ/')}}"><img src="{{asset('images/facebook.svg')}}"></a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-2 social-contact">
                                <a href="{{asset('https://www.linkedin.com/company/r-a-communication')}}"><img src="{{asset('images/linkedin.svg')}}"></a>
                            </div> 
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-2 social-contact">
                                <a href="{{asset('https://www.instagram.com/r_a_c_o_m/')}}"><img src="{{asset('images/instagram.svg')}}"></a>
                            </div> 
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-2 social-contact">
                                <a href="{{asset('https://www.youtube.com/channel/UCPQPPagVFM6BsWLK0r-KutA')}}"><img src="{{asset('images/youtube.svg')}}"></a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-2 col-xs-2 social-contact">
                                <a href="{{asset('https://twitter.com/RACommunicatio3?s=07')}}"><img src="{{asset('images/twitter.svg')}}"></a>
                            </div>
						</div>
					</div>
        		</div>
        		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 send">
							<form action="" method="POST">
	                            <div class="form-group">
	                                <label for="email">Adresse Email</label>
	                                <input type="email" class="form-control" placeholder="Votre adresse" name="email">
	                            </div>
	                            <div class="form-group">
	                                <label for="tel">Numero de telephone</label>
	                                <input type="text" class="form-control" placeholder="Votre numéro" name="tel">
	                            </div>
	                            <div class="form-group">
	                                <label for="service">Selectionez un service</label>
	                                <select class="form-control" id="service">
	                                    <option>Service 1</option>
	                                    <option>Service 2</option>
	                                    <option>Service 3</option>
	                                </select>
	                            </div>
	                            <div class="form-group">
	                                <label for="description">Decrivez votre besoin</label>
	                                <textarea class="form-control" rows="4" name="description"></textarea>
	                            </div>
	                            <div class="modal-footer ">
	                                <button type="submit" class="btn btn-primary ">Envoyer</button>
	                            </div>
                        	</form>
						</div>
					</div>
				</div>        			
        	</div>
        </div>
	</body>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</html>