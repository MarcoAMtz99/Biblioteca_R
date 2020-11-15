@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('TODOS LOS LIBROS') }}</div>
                        <div class="card-body" id="wall">
                        
                            <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <h2 class="text-white">Todos los libros</h2>
                                    @if (session()->has('status'))
                                <div class="alert alert-success">{{session('status')}}
                                        </div>
                                    @endif
                                    @if (session()->has('status'))
                                     <div class="alert alert-success">{{session('status')}}
                                      </div>
                                      @endif
                                     <a href=" {{route('libros.create')}}" class="btn btn-primary">Crear Nuevo libro</a>
                                     <br><br>
                                     <br>
                                     <br>
                                    <table class="table table-bordered">
                                     <tr>
                                  <th  class="text-white">Id</th>
                                 <th class="text-white">Nombre del libro</th>
                                 <th class="text-white">Autor</th>
                                 <th class="text-white">imagen</th>
                                 <th class="text-white">ACTIONS</th>
                                 </tr>
                                
                                    @foreach ($libros as $libro)
                                    <tr>
                                        <td class="text-white">{{$libro->id}} </td>
                                        <td class="text-white"> {{$libro->name}} </td>
                                        <td class="text-white">{{$libro->autor}} </td>
                                        <td class="text-white">{{$libro->imagen}} </td>
                                        <td>
                                            
                                            <form action="{{route('libros.destroy',$libro->id)}}" method="POST">
                                            <input type="submit" class="btn btn-primary" value="eliminar">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <a  href="{{route('libros.edit',$libro->id)}}" class="btn btn-primary" style="width:75px; margin-top: 2px;">  editar   </a> 
                                            </form>
                                            
                                              </td>
                                         </tr>
                                    @endforeach
                                </table>
                    
                                    
                    
                                </div>
                              
                            
                        </div>
    
                    
                         </div>    
                   
                    
                    </div>
                </div>
    
            </div>
    
        </div>
    </div>
    
@endsection

