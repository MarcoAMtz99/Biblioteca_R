@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Crear un nuevo libro') }}</div>
                        <div class="card-body" id="wall">
                        
                            <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <h2>Crear nuevo </h2>
                                    @if (session()->has('status'))
                                <div class="alert alert-success">{{session('status')}}
                                        </div>
                                    @endif
                                    <form action="{{route('libros.store')}}" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name">
                                            <span class="help-block">{{$errors->first('name')}} </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="autor" class="form-control" value="{{old('autor')}}" placeholder="Author">
                                            <span class="help-block">{{$errors->first('author')}} </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="imagen" class="form-control" value="{{old('imagen')}}" placeholder="Description">
                                            <span class="help-block">{{$errors->first('imagen')}} </span>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Crear" class="btn btn-primary">
                                        </div>
                                        {{ csrf_field()}}
                                    </form>
                    
                    
                    
                                </div>
                              
                            
                        </div>

                    
                         </div>    
                   
                    
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection