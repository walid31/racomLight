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
                @yield('option')
            </div>
        </div>
    </body>
    <script type="text/javascript" src="{{asset('lib/jquery-3.3.1.js')}}" ></script>
    <script type="text/javascript" src="{{asset('lib/bootstrap/js/bootstrap.js')}}" ></script>
</html>