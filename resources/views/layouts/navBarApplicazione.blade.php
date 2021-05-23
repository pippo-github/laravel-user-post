    <nav style="border: solid green 2px; width: 100%;" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0" style="width: 100%;">
                <a class="nav-link" href="/allBlog">AllBlog</a>
            <li class="nav-item active">
                <a class="nav-link" href="/posts" style='color: red!important;'' title="route protetta">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/servizi">Services</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/developed">Developed</a>
            </li>
            
            <li style="" class="nav-item active">
                <a class="nav-link" aria-current="page" href="/riferimenti">References</a>

            </li>

              

            </ul>

            <div class='d-flex ' style="list-style: none;  border: solid yellow 2px;  " >
                @include('layouts.elementiLinkNavBarAuth') 
            </div>


        </div>
        </div>
    </nav>
   
