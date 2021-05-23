@if (count($errors->all()) > 0)

    @foreach ($errors->all() as $errori)
        <div class="alert alert-primary text-danger " title='clicca per chiudere'  onclick='this.remove()'>
            {{ $errori }}
        </div>
    @endforeach
    
@endif


@if (session("errore") !== null )


<div class="alert alert-primary text-danger " title='clicca per chiudere'   onclick='this.remove()'>
            {{ session("errore") }}
</div>

        
@endif


@if (session("successo") !== null )


<div class="alert alert-primary text-success " title='clicca per chiudere'  onclick='this.remove()'>
            {{ session("successo") }}
</div>

        
@endif