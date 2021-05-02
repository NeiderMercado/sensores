 <x-app-layout>
   <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }} 
      </h2>
        <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
     @foreach($query1 as $query2)
            <table class="table">
                <tbody>
                    <thead>
                        <center><h3>HOJA DE VIDA DE LOS VEHÍCULOS</h3>
                    </thead>
                    <tr>
                        <td class="p-3 mb-2 bg-info text-white">Datos del conductor</td>
                        <td class="p-3 mb-2 bg-info text-white"></td>

                    </tr>

                    <tr>
                        <?php $ruta=""?>

                        <td>

                        <center><img src="{{asset('storage/app/public'.'/'.$query2->FOTO_COND)}}" alt="" width="290px"><img>
                        


                        

                        </td>
                                       
                    
<td>
        <table class="table">
                <tbody>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white" colspan="2">Nombres: {{ $query2->NOMBRES_CONDUCTOR}} {{ $query2->APELLIDOS_CONDUCTOR}}</td>
                        
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white" colspan="2">C.C: {{ $query2->CEDULA_COND}}</td>
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white" colspan="2">Licencia: {{ $query2->CEDULA_COND}} - {{ $query2->Vence}}</td>
                    </tr>
                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white" colspan="2">Contrato: Inicio: 1-FEB-2.021 Fin: 1-FEB-2.022</td>
                    </tr>
                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white" colspan="2">Telefono: {{ $query2->Movil_COND}}</td>
                    </tr>                   
                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white" colspan="2">Dirección: {{ $query2->Dirección_COND}}</td>
                    </tr>

                    <tr>
                        <td>
                            <div>
                                    <form action="operativo_actualizar" method="get">   

                                        <input type="hidden" name="conductor_cc" value="{{ $query2->CEDULA_COND}}">
                                        <input type="hidden" name="conductor_nombres" value="{{ $query2->NOMBRES_CONDUCTOR}}">
                                        <input type="hidden" name="conductor_apellidos" value="{{ $query2->APELLIDOS_CONDUCTOR}}">
                                        <input type="hidden" name="conductor_licencia" value="{{$query2->CEDULA_COND}}">
                                        <input type="hidden" name="conductor_telefono" value="{{ $query2->Movil_COND}}">
                                        <input type="hidden" name="conductor_direccion" value="{{ $query2->Dirección_COND}}">


                                        <center><button type="submit" class="btn btn-success" onclick = "">ACTUALIZAR DATOS</button></center>
                                        
                                    </form>

                            </div>
    @endforeach


                        </td> 

                           

            <td>
                    <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_HISTORIA_CON">HISTORIAL DE CONDUCTOR</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_HISTORIA_CON" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                         
                            <h5>HISTORIAL DE CONDUCTOR</h5>
                        
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                            <table class="table">
                                        <tbody>
                                        
                                            <tr>
                                            <td class="p-3 mb-2 bg-primary text-white">INT</td>
                                                <td class="p-3 mb-2 bg-primary text-white">CEDULA</td>
                                                <td class="p-3 mb-2 bg-primary text-white">NOMBRES</td>
                                                <td class="p-3 mb-2 bg-primary text-white">MÒVIL</td>
                                                <td class="p-3 mb-2 bg-primary text-white">FECHA INICIO</td>
                                                <td class="p-3 mb-2 bg-primary text-white">ESTADO</td>
                                                
                                            </tr>
                                         
                                        @foreach($historial_conductor as $query3)
                                            <tr>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $query3->INTERNO}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $query3->CEDULA_COND}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $query3->NOMBRES_CONDUCTOR}}{{ $query3->APELLIDOS_CONDUCTOR}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $query3->Movil_COND}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $query3->FECHA_CONTRATO}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $query3->ESTADO}}</td>


                                                
                                            </tr>
                                        @endforeach
                                                                               
                                        </tbody>
                                    </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                    </div>
                </div>
            </div>
        </div>



        </td>               
    </tr>

                </tbody>
            </table>
</td>
</tr> 

                    </td>
                </tbody>
            </table>
<form action="agregar_documento" method="get" id="Form_agragar_Doc"> 
    
 @foreach($datos_veh as $veh)
            <table class="table">
                <tbody>
                    <tr>
                        <?php $interno = $veh->INTERNO;
                              $placa = $veh->PLACAS;
                        ?>
                        <td class="p-3 mb-2 bg-danger text-white">Datos del vehículo</td>
                        <td class="p-3 mb-2 bg-danger text-white"></td>
                        <td class="p-3 mb-2 bg-danger text-white">INTERNO 0{{ $veh->INTERNO}}</td> 
                        <td class="p-3 mb-2 bg-danger text-white">PLACA: {{ $veh->PLACAS}}</td> 
                        <td class="p-3 mb-2 bg-danger text-white">ESTADO: ACTIVO</td>  




                    </tr>

                    <tr>
                    </tr>
                    <tr>

                    
<td colspan="3">
        <table class="table">
                <tbody>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">Clase: {{ $veh->CLASE}}</td>
                        
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">Marca: {{ $veh->MARCA}}</td>
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">Modelo: {{ $veh->MODEL}}</td>
                    </tr>

                </tbody>
            </table>
</td>

<td colspan="3">
        <table class="table">
                <tbody>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">Capacidad: {{ $veh->CAPACIDAD}}</td>
                        
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white"># Motor: {{ $veh->MOTOR}}</td>
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white"># Chasis: {{ $veh->CHASIS}}</td>
                    </tr>

                </tbody>
            </table>
</td>


</tr>                    
                    </td>
                </tbody>
            </table>
 <table class="table">
                <tbody>
                    <tr>
                        <td class="p-3 mb-2 bg-warning text-dark">Datos del Asociado:</td>
                       

                    </tr>

<tr>
    <td>

        <table class="table">
                <tbody>
                    
                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">Nombres: {{ $veh->NOMBRES_ASOC}} {{ $veh->APELLIDOS_ASOC}}</td>
                           
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">C.C: {{ $veh->CEDULA_ASOC}}</td>
                    </tr>

                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">Telefono: SIN DATOS</td>
                    </tr>
                    <tr>
                        <td class="p-3 mb-2 bg-secondary text-white">Dirección: SIN DATOS</td>
                        
                    </tr>
    @endforeach
                </tbody>
            </table>
            </table>


            <table class="table">
                <tbody>
                    <tr>
                        <td class="p-3 mb-2 bg-success text-white">Documentación</td>
                        <td class="p-3 mb-2 bg-success text-white"></td>
                        <td class="p-3 mb-2 bg-success text-white"></td>
                        <td class="p-3 mb-2 bg-success text-white"></td>
                        <td class="p-3 mb-2 bg-success text-white"></td>
                        <td class="p-3 mb-2 bg-success text-white"></td>

    </tr>
    
    <tr>
  

        <td>
                    <center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal_SOAT">SOAT</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_SOAT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                         
                            <h5>SEGURO OBLIGATORIO</h5>
                        
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body">
                            <table class="table">
                                        <tbody>
                                        
                                            <tr>
                                                
                                                <td class="p-3 mb-2 bg-primary text-white">PLACA</td>
                                                <td class="p-3 mb-2 bg-primary text-white">POLIZA</td>
                                                <td class="p-3 mb-2 bg-primary text-white">ENTIDAD</td>
                                                <td class="p-3 mb-2 bg-primary text-white">AÑO</td>
                                                <td class="p-3 mb-2 bg-primary text-white">VIG. DESDE</td>
                                                <td class="p-3 mb-2 bg-primary text-white">VIG. HASTA</td>
                                                <td class="p-3 mb-2 bg-primary text-white">ESTADO</td>
                                                
                                            </tr>

                                        @foreach($historial_soat as $soat) 
                                            <tr>
                                                
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $soat->PLACA}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">
                                                    <a href={{ $soat->LINK}}}>{{ $soat->POLIZA}}</a>
                                                </td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $soat->ENTIDAD}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $soat->AÑO}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $soat->VIG_DESDE}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $soat->VIG_HASTA}}</td>

                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $soat->ESTADO}}</td>

                                                
                                            </tr>
                                            
                                        @endforeach
                                                                               
                                        </tbody>
                                    </table>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" value="<?php echo $interno ?>" name="interno">}
                        <input type="hidden" value="<?php echo $placa ?>" name="placa">
                        <center><button type="submit" class="btn btn-info" onclick = "">+ AGREGAR</button></center>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>

                    </div>
                    
                </div>
            </div>
        </div>
                    
        </td>

         <td>

                    <!-- Button trigger modal -->
                    <center><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal_RTM">RTM</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_RTM" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5>REVISIÓN TECNO MECANICA</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="p-3 mb-2 bg-danger text-white"># DE PÓLIZA</td>
                                                <td class="p-3 mb-2 bg-danger text-white">ENTIDAD</td>
                                                <td class="p-3 mb-2 bg-danger text-white">VIG. DESDE</td>
                                                <td class="p-3 mb-2 bg-danger text-white">VIG. HASTA</td>
                                                <td class="p-3 mb-2 bg-danger text-white">PREVENTIVA</td>
                                                <td class="p-3 mb-2 bg-danger text-white">ESTADO</td>
                                                
                                            </tr>
                                            <tr>
 
                                        @foreach($historial_rtm as $RTM)

                                                <td class="p-3 mb-2 bg-secondary text-white">
                                                    <a href="{{ $RTM->POLIZA}}">{{ $RTM->POLIZA}}</a>
                                                </td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $RTM->ENTIDAD}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $RTM->VIG_DESDE}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $RTM->VIG_HASTA}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $RTM->PREVENTIVA_RTM}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $RTM->ESTADO}}</td>


                                                
                                            </tr>
                                        @endforeach


                                    
                                        </tbody>
                                    </table>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" value="<?php echo $interno ?>" name="interno">
                            <input type="hidden" value="<?php echo $placa ?>" name="placa">
                            <center><button type="submit" class="btn btn-info" onclick = "">+ AGREGAR</button></center>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                        </div>
                        </div>
                    </div>
                    </div>
            </form>
                    
        </td>

        <td>
            <form action="agregar_extra_y_contra" method="get" >
                    <!-- Button trigger modal -->
                    <center><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal_SEGURO">SEGURO EXTRA Y CONTRA</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_SEGURO" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SEGURO CONTRACTUAL Y EXTRACONTRACTUAL</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="p-3 mb-2 bg-dark text-white"># DE PÓLIZA</td>
                                                <td class="p-3 mb-2 bg-dark text-white">TIPO</td>
                                                <td class="p-3 mb-2 bg-dark text-white">ENTIDAD</td>
                                                <td class="p-3 mb-2 bg-danger text-white">VIG. DESDE</td>
                                                <td class="p-3 mb-2 bg-danger text-white">VIG. HASTA</td>
                                                <td class="p-3 mb-2 bg-dark text-white">ESTADO</td>
                                                
                                            </tr>
                                            <tr>
                                            @foreach($historial_extra as $extra)
                                                <td class="p-3 mb-2 bg-secondary text-white">
                                                   <a href="{{ $extra->POLIZA}}">{{ $extra->POLIZA}}</a>
                                                </td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $extra->TIPO_DE_POLIZA}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $extra->ENTIDAD}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $extra->VIG_DESDE}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $extra->VIG_HASTA}}</td>
                                                <td class="p-3 mb-2 bg-secondary text-white">{{ $extra->ESTADO}}</td>
                                                                                                
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" value="<?php echo $interno ?>" name="interno">
                            <input type="hidden" value="<?php echo $placa ?>" name="placa">
                            <center><button type="submit" class="btn btn-info" onclick = "">+ AGREGAR</button></center>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>

        </form>
                                        
        
                        </div>
                        </div>
                    </div>
                    </div>
                    
        </td>

                 <td>
        <form action="agregar_tarjeta_operacion" method="get">
                    <!-- Button trigger modal -->
                    <center><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal_opera">TARJETA DE OPERACIÓN</button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal_opera" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">TARJETA DE OPERACIÓN</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="p-3 mb-2 bg-warning text-dark"># DE TARJETA</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">VIG. DESDE</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">VIG. HASTA</td>
                                                <td class="p-3 mb-2 bg-warning text-dark">ESTADO</td>
                                                
                                            </tr>
                                            <tr>
                                            @foreach($historial_operacion as $operacion)
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
                        <div class="modal-footer">
                            <input type="hidden" value="<?php echo $interno ?>" name="interno">
                            <input type="hidden" value="<?php echo $placa ?>" name="placa">
                            <center><button type="submit" class="btn btn-info" onclick = "">+ AGREGAR</button></center>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>

                        </div>
                        </div>
                    </div>
                    </div>
                    </form>
                    
        </td>

        <td>


<!-- Button trigger modal -->
<center><button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal_facturas">MANTENIMIENTO</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal_facturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel_facturas">Soporte de Mantenimiento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">

                <form action="visualizar_facturas" method="get">
                     <input type="hidden" value="<?php echo $interno ?>" name="interno">
                     <center><button type="submit" class="btn btn-info" onclick = "">VISUALIZAR</button></center>
                
                </form>

                
    </div>
        <form action="agregar_facturas" method="get">
                <div class="modal-footer">
                    <input type="hidden" value="<?php echo $interno ?>" name="interno">
                    <input type="hidden" value="<?php echo $placa ?>" name="placa">
                    <center><button type="submit" class="btn btn-info" onclick = "">+ AGREGAR</button></center>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>

                </div>
                </div>
        </form>

                </td>
                <td>


                </td>

                </div>
                </div>
                   
            </tr>
    
        
         </div>
    </div>
</x-app-layout>