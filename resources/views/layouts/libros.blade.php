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
                        <h1 style="color:white;">{{ __('Bienvenida de nuevo ') }}  {{ Auth::user()->name }} </h1> 
                    </div>
                   
                    <div class="col-sm">
                        <a href="{{route('libros.create')}}"  class="btn btn-primary">Crear nuevo libro</a>
                        <a href="{{route('libros.index')}}"  class="btn btn-primary">Ver libros </a>
                       
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