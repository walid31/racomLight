<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to R & A communication</title>
        <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
        <style type="text/css">
            .first{
                background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.5)),url("{{asset('images/index1.svg')}}");
                background-size:100% 100%; 
            }
            nav{
              box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }
        </style>
    </head>
    <body>
        <nav class="navbar fixed-top">
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
        <div class="container-fluid">
            <div class="row first">
                <div  class="devis">
                    <h1 class="font-weight-bold"> Welcome to R&A Communication</h1>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#Modal">Demandez un devis ...</button>
                    <div id="office"> 
                        <h2 class="font-weight-bold text-center"> IN this office
                            <br> we do kda
                            <br> we do kda
                            <br> we do kda
                            <br> we do kda
                            <br> we do kda
                           <br> we do kda
                        </h2>
                    </div>    
                </div>
            </div>
            <div class="row second ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="text-center font-weight-bold " >Rendre votre communication plus efficace</h1>    
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="{{asset('images/second.svg')}}" >
                </div>
            </div>
            <div class="row third">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="font-weight-bold text-center">Nos Services</h1>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 service"> 
                            <div class="service-container">
                                <h2 class="text-center">nom du service</h2>
                                <img src="{{asset('images/service1.svg')}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 service"> 
                            <div class="service-container">
                                <h2 class="text-center">nom du service</h2>
                                <img src="{{asset('images/service2.svg')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row foorth">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 class="font-weight-bold text-center">Actualités</h1>
                        </div>
                        <div class="col-lg-12 Actualités">
                            <div class="slideshow-container">
                                <div class="mySlides fade1">
                                  <img src="{{asset('images/news1.svg')}}">
                                </div>
                                <div class="mySlides fade1">
                                  <img src="{{asset('images/news2.svg')}}">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row fifth" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Promotion">
                            <h1 class="text-center font-weight-bold">Promotion</h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Promotion">
                            <img src="{{asset('images/promotion.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row sixth">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Autre">
                    <h1 class="text-center font-weight-bold">Autres activités</h1> 
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Autre">
                    <h2 class="text-center font-weight-bold"> nom de l'activité</h2>
                    <img src="{{asset('images/act1.svg')}}">
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Autre">
                    <h2 class="text-center font-weight-bold"> nom de l'activité</h2>
                    <img src="{{asset('images/act2.svg')}}">
                </div>  
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 Autre">
                    <h2 class="text-center font-weight-bold"> nom de l'activité</h2>
                    <img src="{{asset('images/act3.svg')}}">
                </div>                   
            </div>
            <footer class="row" >
                <div class="container footerbody">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bordure">
                            <h1 class="text-center font-weight-bold">Contactez nous</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 company">
                            <h3 class="text-center font-weight-bold">R&A Communication</h3>
                            <img src="{{asset('images/LOGO.png')}}">
                            <h4 class="text-center font-weight-bold">numero de telephone</h4>
                            <h4 class="text-center font-weight-bold">Racom.randa@gmail.com</h4>
                            <h4 class="text-center font-weight-bold">localisation</h4>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contact">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 social">
                                        <a href="{{asset('https://www.facebook.com/racomDZ/')}}"><img src="{{asset('images/facebook.svg')}}"></a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 social">
                                        <a href="{{asset('https://www.linkedin.com/company/r-a-communication')}}"><img src="{{asset('images/linkedin.svg')}}"></a>
                                    </div> 
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 social">
                                        <a href="{{asset('https://www.instagram.com/r_a_c_o_m/')}}"><img src="{{asset('images/instagram.svg')}}"></a>
                                    </div> 
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 social">
                                        <a href="{{asset('https://www.youtube.com/channel/UCPQPPagVFM6BsWLK0r-KutA')}}"><img src="{{asset('images/youtube.svg')}}"></a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 social">
                                        <a href="{{asset('https://twitter.com/RACommunicatio3?s=07')}}"><img src="{{asset('images/twitter.svg')}}"></a>
                                    </div>
                                </div>                                                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid footerfooter">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 copyright">
                            <h3 class="text-center font-weight-bold">2019 @copyright:R&A Communication</h3>
                            <h4 class="text-center font-weight-bold">All rights reserved</h4>
                        </div>
                    </div>
                </div>   
            </footer>
        </div>
        <div class="modal" id="Modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-center" >Demandez un devis</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="email">adresse Email</label>
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
                                <button type="button" class="btn btn-danger pull-left "  data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary ">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{asset('lib/jquery-3.3.1.js')}}" ></script>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</html>