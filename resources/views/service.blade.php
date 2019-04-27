<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>R & A Communication Service</title>
		<link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
		<link rel="stylesheet" type="text/css" href="{{asset('css/service.css')}}">
		<style type="text/css">
			.first{
			    background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.5)),url("{{asset('images/service.svg')}}");
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
        		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 up ">
					<h3 class="text-center font-weight-bold">nom de service</h3>
	                <p class="text-center font-weight-bold break" >Descriptionklsgmsdgjsdùklfsd,fùfkqsfklqsùf,qslmkfqsfqlsm;fqs,mfqlsfqslm,fqsfm,lqsfqslf,qsf;mqlsf;qsmlf;qslmf;qslf;qslf;qsflmq;sf;qslfqfl;qlf;qslfq;sflmq;sflq;flqs;flqs;flms;fqsl;fq;fqsmlfsqmlfqs;f</p>
        		</div>
        		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 down">
        			<img src="{{asset('images/service1.svg')}}" >
				</div>        			
        	</div>
        </div>
	</body>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</html>