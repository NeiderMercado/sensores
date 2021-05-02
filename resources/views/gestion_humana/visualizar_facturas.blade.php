<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }} 
        </h2>

        <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <?php
    $var = ''; // Cadena vacía

   

    ?>

                        <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="p-3 mb-2 bg-warning text-dark"># CONSECUTIVO</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">INTERNO</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">PLACA</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">TIPO</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">AÑO</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">FECHA</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">DETALLES</td>
                                                
                                            </tr>
                                            <tr>
                                            @foreach($datos8 as $operacion)
                                                <td>
                                                    <a href="{{ $operacion->LINK}}">{{ $operacion->CONSECUTIVO}}</a>  
                                                </td>
                                                <td>{{ $operacion->INTERNO}}</td>
                                                <td>{{ $operacion->PLACA}}</td>
                                                <td>{{ $operacion->TIPO_DE_POLIZA}}</td>
                                                <td>{{ $operacion->AÑO}}</td>
                                                <td>{{ $operacion->FECHA}}</td>
                                                <td>{{ $operacion->DETALLES}}</td>

                                                
                                            </tr>
                                            @endforeach

                                        </tbody>
                                </table>
                <?php
                 
                
                ?>

            </div>

             
         
</x-app-layout>

 

         
          
        