@extends("layouts.layoutCondiviso")

@section('contenuti')

<h1>
   {{ $vettorePerLaView["titolo"] }}
</h1>

<div class="container">

{{Form::open(["action" => "App\Http\Controllers\PostsController@store", "method" => "POST", "enctype" => "multipart/form-data", "class" => "form-group", "style" => "border: solid red 2px"]   )}}
    <div class="form-group">
        {{Form::label("titolo", "titolo", [  "class" => "text-primary m-4 p-1"] )}}
        {{Form::text("titolo", "valore titolo", [ "placeholder" => "segnaposto", "class" => "text-primary form-control"] )}}
        {{Form::label("body", "body", [  "class" => "text-primary m-4 p-1"] )}}
        {{Form::textArea("body", "valori default TextArea -- body -- hard 'coded '", [ "placeholder" => "segnaposto -- body", "class" => "text-primary form-control ckeditor",] )}}
        {{Form::file("cover_image")}}
        {{Form::submit("invia", ["id" =>"btnSubID", "class" => "  form-control btn btn-success text-white", "style"=>"background:blue; color: red;"] )}}
    </div>
{{Form::close()}}

</div>
@endsection

<style>


#btnSubID{
 color: rgb(162, 0, 255)!important;;
 background: mediumseagreen!important;
 font-size: 22px;
 font-style: italic;
 font-family: cursive;
}
        </style>



<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
