@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Mis libros') }}</div>

                <div class="card-body" id="wall">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    <div class="card-title">
                        <h1 style="color:white;">{{ __('Bienvenida de nuevo') }} </h1> 
                    </div>
                   
                    <div class="col-sm">
                        <a href="#"  class="btn btn-primary">Crear nuevo libro</a>
                        <a href="#"  class="btn btn-primary">Ver libros </a>
                       
                    </div>
                    
                  
                    <div class="card" style="width: 18rem;"> 
                        <div class=".col-xl-">
                            <a href="#"  class="btn btn-primary">Crear nuevo libro</a>
                            <a href="#"  class="btn btn-primary">Ver libros </a>
        
                           </div>
                    </div>
                  
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection