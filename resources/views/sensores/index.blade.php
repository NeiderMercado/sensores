


@if(Session::has('Mensaje')){{
  Session::get('Mensaje')

}}
@endif

    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Generar Liquidación') }} 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


                   

                    <table class="table table-striped table-hover" >
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($empleados as $empleado)
                      
                            <tr>
                                <td>{{$empleado->id}}</td>

                                <td>
                              
                                <img src="/storage/{{$empleado->Foto}}" alt="" width="200">

                                
                                </td>


                                <td>{{$empleado->Nombre}}</td>
                                <td>{{$empleado->Apellido}}</td>
                                <td>{{$empleado->Correo}}</td>
                                <td>

                                <form method="GET" action="{{ url('/sensores/'.$empleado->id.'/edit')}}">
                                  {{csrf_field()}}

                                    <input type="hidden" name="Ide" value="{{$empleado->id}}">
                                    <input type="hidden" name="Nombre_E" value="{{$empleado->Nombre}}">
                                    <input type="hidden" name="Apellido_E" value="{{$empleado->Apellido}}">
                                    <input type="hidden" name="Correo_E" value="{{$empleado->Correo}}">
                                    <input type="hidden" name="Foto_E" value="{{$empleado->Foto}}">

                              
                                  <button type="submit" onclick="" name="" class="btn btn-warning">EDITAR</button>
                                
                                </form>
                                </br>
                                <form method="post" action="{{url('/sensores/'.$empleado->id)}}">
                                  {{csrf_field()}}
                                  {{method_field('delete')}}

                                  <button type="submit" onclick="return confirm('¿BORRAR?')" name="" class="btn btn-danger">BORRAR</button>
                                  </form>
                                
                                </td>

                            </tr>
                          @endforeach
                        </tbody>
                    </table>
      
    </div>
        </div>
            </div>
    
</x-app-layout>