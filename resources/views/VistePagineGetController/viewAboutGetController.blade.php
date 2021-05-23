@extends('layouts.layoutCondiviso')
@section('contenuti')

    @if (count($valoriDaPassareAllaView) > 0)
 
        <div class="container" style=" margin-bottom:0px; padding-bottom: 0; ">
            <h1 class="text-success" style="font-family: cursive ;">
                {{strtoupper(substr($valoriDaPassareAllaView["titolo"],0,1)) . substr($valoriDaPassareAllaView["titolo"],1) }}
            </h1>

            <div  id='bloccoParagrafo' id='myresponsive' style="width: 80vw; min-height: 450px; position: relative; border:solid yellow 1px; "  >
                <img  style=' width:100%;  border: solid red 1px;' src="{{$valoriDaPassareAllaView["urlImg"]}}" alt="">
                <p class="  ml-4 text-white" style="margin:0; padding: 0px">
                    {!!$valoriDaPassareAllaView["paragrafo"]!!}
                </p>
            </div>

        </div>
            
        <div class="ml-3">
            <p style="margin:0; padding: 0px" class=" mt-4 pt-4 text-primary">
                Linguaggi per il web:
            </p>

            <ul style="" class="list-group">

                @foreach ($valoriDaPassareAllaView[0] as $linguaggiWeb)
                <li class="list-group-item"> {{$linguaggiWeb}} </li>
                @endforeach
            </ul>

        </div>

        <div class="ml-3">
            <p style="margin:0; padding: 0px" class="mt-4 pt-4 text-success">
                Linguaggi per il desktop:
            </p>

            <ul style="" class="list-group">

                @foreach ($valoriDaPassareAllaView[1] as $linguaggiWeb)
                <li class="list-group-item active"> {{$linguaggiWeb}} </li>
                @endforeach
            </ul>

        </div>

    @endif

 
    <style>

@media screen and (min-width: 1080px){
    #bloccoParagrafo{
        display: flex;
        background: green;
        max-height: 200px;
    }
}

    </style>

@endsection


