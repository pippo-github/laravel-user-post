{{-- 

    Include la Logica della navbar, rinominata da me

    da: "C:\xampp\htdocs\progetto-post-utente-versione-finale\resources\views\layouts\app.blade.php"


    a: "C:\xampp\htdocs\progetto-post-utente-versione-finale\resources\views\layouts\logicaNavBar.blade.php"
    
--}}



@extends('layouts.logicaNavBarAuth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                   
                </div>
            </div>
        </div>
    </div>
</div>

@if (!Auth::guest())

{{-- !Auth::guest() significa autenticato  --}}


            
<div class="container jumbotron myJobmotroneBgColor mt-4 pt-4">

    @include("gestioneMessaggiSuccessi-Errori.messaggiUtente")

    <a href="/posts" class="btn btn-primary m-4">crea post</a>
    

            @if (count($recordsPerLaView) > 0)
     
            @foreach ($recordsPerLaView as $singoloRecord )
                


            <div class="row">

                    <div class="col-md-4 col-sm-4" >

                        <img style='width: 120px; height: 120px;' src="/storage/cover_images/{{$singoloRecord->cover_image}}" alt="">

                    </div>

                    <div class="col-md-8 col-sm-8">


                        <div class="m-5 p-2">

                            <div class=" h3"> <a class="text-white" href="/post/{{$singoloRecord->id}}"> {{$singoloRecord->titolo}} </a> </div>

                            <div class="text-black m-2"><small>{{$singoloRecord->created_at}} </small></div>
                            
                        </div>

                    </div>

                </div>



            @endforeach
            
        @endif

</div>

@else
non autenticato
@endif

@endsection



<style>
    .myJobmotroneBgColor{
        background: rgb(87, 87, 189) !important;
    }
</style>