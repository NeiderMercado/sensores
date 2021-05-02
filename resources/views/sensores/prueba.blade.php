
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

@foreach($factura as $facturas)
<td class="p-3 mb-2 bg-secondary text-white">
                            <a href="{{ $facturas->LINK}}">{{ $facturas->CONSECUTIVO}}</a>  
                        </td>
                            <td class="p-3 mb-2 bg-secondary text-white">{{ $facturas->TIPO_DE_POLIZA}}</td>
                            <td class="p-3 mb-2 bg-secondary text-white">{{ $facturas->FECHA}}</td>
                            <td class="p-3 mb-2 bg-secondary text-white">{{ $facturas->AÑO}}</td>
                            <td class="p-3 mb-2 bg-secondary text-white">{{ $facturas->DETALLES}}</td>
   
                        </tr>
@endforeach
                <?php
                 }
                
                ?>

            </div>

             
         
</x-app-layout>

 

         
          
        