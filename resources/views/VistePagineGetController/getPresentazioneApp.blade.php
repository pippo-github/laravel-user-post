@extends('layouts.layoutCondiviso')

@section('contenuti')

<div class="jumbotron">

    <h1>
        {{ $assocData['title'] }} <small class="text-danger "> <u>  {{ env("app_name") }} </u></small> 
    </h1>

    <p class="mt-4">
        {{ $assocData['parag'] }}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos consequuntur reprehenderit temporibus doloribus aut id odit esse quibusdam soluta reiciendis. Mollitia assumenda natus debitis dolor sed quisquam eveniet, amet explicabo.
    </p>

    <div class="container border border-none text-right mt-5 pt-2" >
        <a href="https://laravel.com/docs/8.x" target='_blank' class="btn btn-primary  "> Laravel official documentation</a>
        <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/" class="btn btn-success  " target='_blank' > Bootstrap official documentation</a>

    </div>

</div>

@endsection