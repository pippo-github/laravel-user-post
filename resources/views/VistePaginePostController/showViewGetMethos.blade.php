@extends('layouts.layoutCondiviso')

@section('contenuti')


@if(isset($queryIdFiltrato))

        <div class="container">

            <div>

                
                <div name='title' class="text-primary h1 font-italic" style="font-family: cursive curier;">
                    {{ $queryIdFiltrato->titolo }}
                </div>
                

                
                <div name='body' class="text-grey h2 p-4">
                    {!! $queryIdFiltrato->body !!}
                </div>

                <small class="text-primary"> {{ $queryIdFiltrato->created_at }} </small>

            </div>

        </div>

@endif

<a href="#" class="btn btn-secondary" onclick='history.back()'>torna indietro</a>
<a href="/dashboard" class="btn btn-success" onclick='history.back()'>torna alla dashboard</a>


@endsection

<style>


    #footerBar{
        position: absolute!important;
        width: 100%;
        color: red;
        bottom: 100%;
    }

</style>