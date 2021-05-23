@extends("layouts.layoutCondiviso")

@section('contenuti')
 

@if (count($recordsFiltrati) > 0)

    @foreach ($recordsFiltrati as $record)
    <div class="container">
    

    <div class="border-bottom m-4 p-2">

            <div id='myTitolo' class='h1 text-white'>


            {{ $record->titolo }}
                

            </div>

            <div class="h3">

                {!! $record->body !!}

            </div>

            <div>

                <small>
                    
                    {{ $record->created_at }}
                
                </small>

            </div>

        <div class="d-flex mt-2">
                    {{Form::open( ["action" => ["App\Http\Controllers\PostsController@update", $record->id ], "method" => "post", "class" => "form-group mr-2 "]) }}

                    {{Form::hidden("_method", "put")   }}
                    {{Form::submit("aggiorna post" , ["class" => "btn btn-primary"])}}
                    
                    {{Form::close()}}

                    {{Form::open( ["action" => ["App\Http\Controllers\PostsController@destroy", $record->id ], "method" => "post", "class" => "form-group"]) }}

                    {{Form::hidden("_method", "delete")   }}
                    {{Form::submit("delete post" , ["class" => "btn btn-danger"])}}
                    
                    {{Form::close()}}
        </div>



    </div>

    
    </div> 
    
    @endforeach

@endif

@endsection




<style>

    #footerBar{
        position: absolute!important;
        width: 100%;
        color: red;
        bottom: 0%;
    }


#myTitolo {
    color: rgb(116, 243, 169)!important;
}

</style>

