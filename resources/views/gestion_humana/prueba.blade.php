<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }} 
        </h2>

        <div class="py-12">

         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <?php
              $var = ''; // Cadena vacía

                 if (empty($_GET['interno'])&&empty($_GET['user'])) { 

            ?>

                                <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="p-3 mb-2 bg-warning text-dark"># DE TARJETA</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">VIG. DESDE</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">VIG. HASTA</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">ESTADO</td>
                                                
                                            </tr>
                                            <tr>
                                            @foreach($datos8 as $operacion)
                                                <td class="p-3 mb-2 bg-secondary text-white">
                                                    <a href="{{ $operacion->POLIZA}}">{{ $operacion->POLIZA}}</a>  
                                                </td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $operacion->VIG_DESDE}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $operacion->VIG_HASTA}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $operacion->ESTADO}}</td>

                                                
                                            </tr>
                                            @endforeach

                                        </tbody>
                                </table>


        </div>
            <?php
                 }
                
                ?>
             
         
</x-app-layout>
