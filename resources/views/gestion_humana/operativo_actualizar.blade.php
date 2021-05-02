 
 <x-app-layout>
    <x-slot name="header">
        <div class="py-3">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="jumbotron">
            <center><h3>ACTUALIZAR DATOS DE CONDUCTOR</h3></center>
            <h5>*Aquí podrás actualizar los datos de los conductores*</h>

            <br>
            <br>
            <?php 
              utf8_decode('');
              $id_conductor = $_GET['conductor_cc'];
              $nombres_conductor = $_GET['conductor_nombres'];
              $apellidos_conductor = $_GET['conductor_apellidos'];
              $licencia_conductor = $_GET['conductor_licencia'];
              $telefono_conductor = $_GET['conductor_telefono'];
              $direccion_conductor = $_GET['conductor_direccion'];


            ?>
    <form action="{{ url('/gestion_humana/'.$id_conductor.'/update')}}" method="post" enctype="multipart/form-data">
   
          {{ csrf_field() }}
            {{method_field('PATCH')}}
              <table class="table">
                <tbody>
                    <thead class="p-3 mb-2 bg-primary text-white">

                          <td><h6>DATOS DEL NUEVO CONDUCTOR:</h6></td>
                          <td><h6></h6></td>
                          <td><h6></h6></td>
                          <td><h6></h6></td>

                          
                    </thead>
                  <tr class="p-3 mb-2 bg-light text-dark">
                    <td>
                    @foreach($datos6 as $datos_conductor)
                        <label for="INTERNO">{{'Interno:'}}</label></br>
                        <input type="TEXT" name="INTERNO" class=".mr-sm-2" placeholder="Seleccione" id=""  value="{{ $datos_conductor->INTERNO}}">
                    @endforeach
                    </td>

                    <td>
                      <div class="dropdown">
                        <label for="ESTADO">{{'Estado:'}} </label></br>
                          <select class="form-control" id="developers" name="ESTADO" >
                          <option value="{{ $datos_conductor->ESTADO}}">{{ $datos_conductor->ESTADO}}</option>
                              <option value="ACTIVO">ACTIVO</option>
                              <option value="INACTIVO">INACTIVO</option>                           
                       
                          </select>
                        </div>
                      
                     
                    </td>

                    <td>
                       <label for="nombre">{{'Nombres:'}}</label></br>
                      <input type="text" name="NOMBRES_CONDUCTOR" value="<?php echo $nombres_conductor ?>">

                    </td>
                  

                    <td>
                      <label for="apellido">{{'Apellidos:'}}</label></br>
                      <input type="text" name="APELLIDOS_CONDUCTOR" value="<?php echo $apellidos_conductor ?>">

                    </td>
                  
                  </tr>


                  <tr class="p-3 mb-2 bg-light text-dark">
                    
                  

                  <td>
                      <label for="cedula">{{'Cedula:'}}</label></br>
                      <input type="text" name="CEDULA_COND"  value="<?php echo $id_conductor ?>" id="" required>
                  </td>

                  <td>
                      <label for="Lugar">{{'Lugar de Expedición:'}}</label></br>
                      <input type="text" name="Expedida_COND" class=".mr-sm-2" placeholder="Seleccione" value="" id="" >
                  </td>

                   <td>
                      <label for="Direccion">{{'Dirección:'}}</label></br>
                      <input type="text" name="Dirección_COND" class=".mr-sm-2" placeholder="Seleccione" value="<?php echo $direccion_conductor ?>" id="" required>
                  </td>

                  <td>
                      <label for="Movil">{{'# Móvil:'}}</label></br>
                      <input type="text" name="Movil_COND" class=".mr-sm-2" placeholder="Seleccione" value="<?php echo $telefono_conductor ?>" id="" >
                  </td>

                </tr>
                <tr class="p-3 mb-2 bg-light text-dark">


                 

                  <td>
                      <label for="Licencia">{{'# Licencia:'}}</label></br>
                      <input type="text" anme="Licencia_COND" class=".mr-sm-2" placeholder="Seleccione" value="<?php echo $licencia_conductor ?>" id="" >
                  </td>                  
                  <td>
                      <label for="Clase">{{'Clase:'}}</label></br>
                      <input type="text" name="CLASE_LICENCIA" class=".mr-sm-2" placeholder="Seleccione"  id="" >
                  </td>

                    <td>
                      <label for="fecha_ven">{{'Fecha de Vencimiento:'}} </label></br>
                      <input type="date" name="Vence" class=".mr-sm-2" placeholder="Seleccione" id="" >
                  </td>

                  <td>
                      <label for="fecha_contrato">{{'Fecha Inicio de contrato:'}} </label></br>
                      <input type="date" name="Fecha_Contrato" class=".mr-sm-2" placeholder="Seleccione" id="" >
                  </td>
                                    
                  </tr>

                  <tr class="p-3 mb-2 bg-light text-dark">


                


                  <td Colspan="2">
                          <label for="foto">{{'Foto:'}}</label></br>
                          <input type="file" name="FOTO_COND" class=".mr-sm-2" placeholder="Seleccione" id="" >
                  </td>   
                  <td></td>
                  <td></td>

                                
                  </tr>
                  <tr>
                    <td></td>
                  </tr>
                  <tr>
                  <br>
                    <td colspan="4">
                        <center><button type="submit" class="btn btn-success" onclick = "">GUARDAR</button></center>
                    </td>
                  
                  </tr>
                                   
                </tbody>
              
              </table>
        
      
          
         </div>
         </x-app-layout>

              