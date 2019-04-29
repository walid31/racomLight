<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome to R & A communication</title>
        <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/adminaccount.css')}}">
        <style type="text/css">
            .first{
                background-image: linear-gradient(rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.5)),url("{{asset('images/admin/adminpanel.svg')}}");
                background-size:100% 100%; 
            }           
        </style>
    </head>
    <body>
        @extends('navbar')
        <div class="container-fluid first">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{route('AService.index')}}"><img src="{{asset('images/admin/service.svg')}}" ></a>
                            <h2 class="text-center font-weight-bold">Service</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{route('Actuality.index')}}"><img src="{{asset('images/admin/actualité.svg')}}" ></a>
                            <h2 class="text-center font-weight-bold">Actualité</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{asset('AdminAccount/Promotion')}}"><img src="{{asset('images/admin/promotion.svg')}}" ></a>
                            <h2 class="text-center font-weight-bold">Promotion</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{asset('AdminAccount/Messagerie')}}"><img src="{{asset('images/admin/message.svg')}}" ></a>
                            <h2 class="text-center font-weight-bold">Messagerie</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{asset('AdminAccount/Activité')}}"><img src="{{asset('images/admin/activity.svg')}}" ></a>
                            <h2 class="text-center font-weight-bold">Activité</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{asset('AdminAccount/Entreprise')}}"><img src="{{asset('images/admin/entreprise.svg')}}" ></a>
                            <h2 class="text-center font-weight-bold">Entreprise</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{asset('AdminAccount/SocialMedia')}}"><img src="{{asset('images/admin/social.svg')}}" ></a>
                            <h2 class="text-center font-weight-bold">Social Media</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 option">
                            <a href="{{asset('AdminAccount/Profil')}}"><img src="{{asset('images/admin/profil.svg')}}"></a>
                            <h2 class="text-center font-weight-bold">Profil</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{asset('lib/jquery-3.3.1.js')}}" ></script>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
</html>