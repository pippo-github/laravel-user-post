@extends('layouts.layoutCondiviso')

@section('contenuti')

<h1 style="color: rgb(56, 240, 56); font-family: cursive">
    Aggiornamento del post utente
</h1>




    {{Form::open(["action" => ["App\Http\Controllers\PostsController@inserisciPostAggiornato", $recordFiltratoDelPost->id], "method" => "post", "enctype" => "multipart/form-data", "class" => "border: solid red 1px" ]) }}

    
    <div class="form">

    {{Form::label("titolo", "titolo", ["class" => "m-3 t-1"] )}}
    {{Form::text("titolo", $recordFiltratoDelPost->titolo, ["class" => "form-control"] )}}

    {{Form::label("body", "body", ["class" => "m-3 t-1"])}}
    {{Form::textArea("body", $recordFiltratoDelPost->body, ["class" => "form-control ckeditor"])}}

    
    {{Form::file("cover_image")}}

    {{Form::submit("aggiorna il post", ["class" => "btn btn-success"])}}

    </div>

    {{ Form::close() }}
    
@endsection


<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>