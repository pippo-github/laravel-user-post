@extends("layouts.layoutCondiviso")
@section('contenuti')
 
    <h1 class="text-success">
        {{$passaggioDeiDati["titolo"]}}
    </h1>

    <p class="text-secondary">
        {{$passaggioDeiDati["paragrafo"]}}
    </p>

    @if (count($passaggioDeiDati["sviluppatori"]) > 0)

      
    <table >

        <thead>
            <tr>
                <td class="font-italic font-weight-bold">
                    Nome
                </td>
                <td class="font-italic font-weight-bold">
                    cognome
                </td>
            </tr>
        </thead>

        <?php $i = 0; ?>
        @foreach ($passaggioDeiDati['sviluppatori']  as $key => $nominativi)
            @if(  $i % 2 == 0)     
                <tr>
                        <td>
                            {{$passaggioDeiDati['sviluppatori'][$key]}}
                        </td>    
                    @else
                        <td>    
                            {{$passaggioDeiDati['sviluppatori'][$key]}}
                        </td>
                </tr>
            @endif       
        <?php $i++; ?>
        @endforeach
    </table>
    @endif

@endsection
<style>

table{
    width: 100%;
    color: white;
}

table thead {
    text-align: center;
    color: black;
}

table tr:nth-child(even)  {
    background: rgb(85, 108, 184);
}

table, th, td {
    border-bottom: 1px solid black;
    padding: 5px;
}

</style>