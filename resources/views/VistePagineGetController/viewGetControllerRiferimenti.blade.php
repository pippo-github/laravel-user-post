@extends('layouts.layoutCondiviso')
@section('contenuti')

<h1>
    {{$datiPerRiferimentiView['titolo']}}
</h1>

<p>
    {{$datiPerRiferimentiView['paragrafo']}}
</p>

<p class="p-5 pt-4">
    Servizi offerti:
</p>

@if (count($datiPerRiferimentiView[0]) >0 )

    @foreach ( $datiPerRiferimentiView[0]['elencoFornitureSevizi']  as $servizi )
                 <div class='my-striped list-group-item'>{{ $servizi }}</div>
     @endforeach
    
@endif

<p class="p-5 pt-4">
    Giorni lavorativi:
</p>

@if (count($datiPerRiferimentiView[0]['giorniLavorativi']) >0 )

    @foreach ( $datiPerRiferimentiView[0]['giorniLavorativi']  as $dayToWork )
         
                <div class='my-striped list-group-item'>{{ $dayToWork }}</div>
    @endforeach
    
@endif



@endsection


<style>

    .my-striped:nth-child(odd){
        background: rgba(207, 55, 55, .5);
        color: white;
        margin-bottom: 22px;
    }

</style>