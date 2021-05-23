@extends('layouts.layoutCondiviso')
@section('contenuti')

<h1>
    @if(count($valoriPerLaView) > 0 )


    <div class="h1 text-white text-capitalize p-4 m-4">
        {{ $valoriPerLaView['titolo'] }}
    </div>

    <p class="h5 ml-4 text-gblack text-lowercase p-4 m-4">
        {{ $valoriPerLaView['sottoTitolo'] }}
    </p>

    <p class="h1 text-success p-2 m-4 text-capitalize p-4 m-4">
        {{ $valoriPerLaView['paragrafo'] }}
    </p>


    <div class="row">


        <div class="col-md-4 col-md-4 text-primary h3" style="border-right: solid lightgreen 1px;">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ducimus eaque explicabo. Quasi qui magnam eos explicabo minima molestias quibusdam distinctio nobis eaque aperiam? Quos quibusdam quo fugit sint iste.
            
        </div>


        <div class="col-md-8 col-md-8 text-secondary h3 ">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus cum repellat mollitia omnis officia, quam placeat consequuntur assumenda veritatis nemo corporis ipsam inventore aperiam hic voluptate architecto quaerat id cupiditate.

        </div>


    </div>

    
    @endif
</h1>


@endsection



<style>

#footerBar{
    position: relative!important;
    width: 100%;
    color: red;
    bottom: 0%;
}


</style>