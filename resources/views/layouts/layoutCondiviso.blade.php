<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>applicazione finale</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
 
 @include('layouts.navBarApplicazione')


    <div class="container" style="margin-top: 150px;  min-height:62.2vh;">

        @include('gestioneMessaggiSuccessi-Errori.messaggiUtente')

        @yield("contenuti")

    </div>

    <div id='footerBar' style="position: relative; width:100%; border: solid mediumseagreen 1px; margin: 77px auto 3px auto;" class="p-2 text-white text-center">
        copyright targ 2000 - 2021
    </div>
        
        
        
</body>
</html>



