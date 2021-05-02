 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }} 
        </h2>
        <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="jumbotron">
               
            <table class="table table-striped">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>
                
                <?php

                if (empty($_GET['interno_hv'])&&empty($_GET['Conductor_inicio'])) { 

                }else{
                ?>
                <?php 
                     $PLACA = $_GET['interno_hv'];
                      $CONDUCTOR = $_GET['Conductor_inicio'];
                ?>
                    <tr>
                    
                    <th scope="row">PLACA:</th>
                      <td> <?php echo ($PLACA)?></td>

                    <th scope="row">CONDUCTOR:</th>
                      <td> <?php echo ($CONDUCTOR)?></td>
                   

                </tbody>
            </table>
            
            <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">No.</th>
                        <th scope="col">RUTA</th>
                        <th scope="col">H. SALIDA</th>
                        <th scope="col">H. LLEGADA</th>
                        <th scope="col">SUBIDAS</th>
                        <th scope="col">BAJADAS</th>
                        <th scope="col">BLOQUEOS</th>
                        <th scope="">OPCIONES</th>

                        </tr>
                    </thead>
                    <tbody>
                    @foreach($DESPACHOS as $DESPACHO)         
                        <tr>
                            
                            <th scope="row">{{$DESPACHO->ID}}</th>
                            <td>{{$DESPACHO->RUTA}}</td>
                            <td>{{$DESPACHO->FECHA_INICIO}}</td>
                            <td>{{$DESPACHO->FECHA_FIN}}</td>
                        
                        </tr>

                        <form action="CARGA_TIMBRADAS" method="get">   

                                <input type="hidden" name="DESPACHO_PLACA" value="<?php echo($PLACA) ?>">
                                <input type="hidden" name="DESPACHO_ID" value="{{$DESPACHO->ID}}">
                                <input type="hidden" name="DESPACHO_RUTA" value="{{$DESPACHO->RUTA}}">
                                <input type="hidden" name="DESPACHO_INICIO" value="{{$DESPACHO->FECHA_INICIO}}">
                                <input type="hidden" name="DESPACHO_FIN" value="{{$DESPACHO->FECHA_FIN}}">


                        @endforeach

                        <br>
                        
                        
                    </tbody>
                    </table>
                    <button type="submit" class="btn btn-success" onclick = "">CARGAR DATOS</button>

                    </form>

                    <?php } ?>
               
</x-app-layout>
