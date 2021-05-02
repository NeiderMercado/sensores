 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }} 
        </h2>
        <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="jumbotron">
                <?php

      if(isset($_GET[''])){
          $interno = '0';
          $cond = '0';
          $fecha = '0';
      }else{

          $interno = $_GET['interno'];
          $cond = $_GET['name_cond'];
          $fecha = $_GET['fecha'];
      }

                ?> 
            <center><h3>AGREGAR NUEVA LIQUIDACIÓN:</h3>
                <table class="table">
                    <thead class="p-3 mb-2 bg-primary text-white">

                      <td><h6>DATOS DE LAS TIMBRADAS:</h6></td>
                      <td><h6></h6></td>
                      <td><h6></h6></td>
                      <td><h6></h6></td>
                      <td><h6></h6></td>
                      <td><h6></h6></td>
                      <td><h6></h6></td>
    
                    </thead>
                <tr class="p-3 mb-2 bg-light text-dark">
                    <td class="p-3 mb-2 bg-light text-dark">
                    <label for="Interno">Interno:</label></br>
                    <input type="text" class=".mr-sm-2" placeholder="<?php echo ($interno); ?>" id="" name="" readonly>
                    
                    </td>

                    <td>

                    <label for="Interno">Conductor:</label></br>
                    <input type="text" class=".mr-sm-2" placeholder="<?php echo ($cond); ?>" id="" name="" readonly>
                    
                    </td>

                    <td>

                    <label for="Interno">Fecha:</label></br>
                    <input type="text" class=".mr-sm-2" placeholder="<?php echo ($fecha); ?>" id="" name="" readonly>
                    
                    </td>

                    <td>
                      <label for="Interno">Estado:</label></br>
                      
                      @foreach($user as $users)
                                    
                      <input type="text" class=".mr-sm-2" placeholder="{{ $users->Estado}}" id="" readonly>
                      @endforeach
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

             </tbody>
        </table>        
        <table class="table">
          <tbody>
              <thead class="p-3 mb-2 bg-primary text-white">

                <td><h6>DATOS DE LAS TIMBRADAS:</h6></td>
                <td><h6></h6></td>
                <td><h6></h6></td>
                <td><h6></h6></td>
                <td><h6></h6></td>
                <td><h6></h6></td>


                    
              </thead>

              <?php
              
              $t_viaje="";
              $t_fuera="";
              if($_POST){
                    $t_viaje = $_POST['txt_viaje'];
                    $t_fuera = $_POST['txt_despacho'];

              }
?>
              <tr class="p-3 mb-2 bg-light text-dark">
              <form action="{{url('sensores/inicio')}}">
                    <td>
                       <label for="Interno">Timbradas por viaje:</label></br>
                      <input type="text" class=".mr-sm-2" name="txt_viaje" placeholder="Seleccione" id="">
                    </td>
                  

                  <td>
                      <label for="Interno">Timbradas fuera de despacho:</label></br>
                      <input type="text" class=".mr-sm-2" name="txt_despacho" placeholder="" id="">
                  </td>

                  <td>
                      <label for="Interno">Total:</label></br>
                      <input type="text" class=".mr-sm-2" placeholder="Seleccione" id="">
                  </td>

                  
          <tr>
            <td colspan=5>
                <label for="Interno">Agregar:</label></br>   
                <a href="#demo" data-toggle="collapse" class="btn btn-success">+ CAMPECHE</a>

            <div id="demo" class="collapse">             
                
              <div class="container">
                  
                       <center><h3>LIQUIDACIÓN DE CAMPECHE</h3>
                            <table>
                              <tbody>
                                <tr>
                                  <td>
                                    <center><label for="Interno">TIMBRADAS:</label></br>
                                     <input type="text" class=".mr-sm-2" placeholder="Ingrese Valor" id="" name="tim_camp"> 
                                  </td>

                                  <td>
                                     <center><label for="Interno">RECAUDO:</label></br>
                                     <input type="text" class=".mr-sm-2" placeholder="Ingrese Valor" id="" name="reca_camp"> 
                                  </td>

                                  <td>
                                      <center><label for="Interno">OPCIONES</label></br>
                                      <button type="submit" class="btn btn-success" onclick = "">AGREGAR</button>

                                  </td>

                                </tr>
                              </tbody>
                      </table>
                </div>
              </div>
            </td>
          </tr> 

                    <td></td>
                    <td></td>
                    <td></td>
                  
                  </tr>
                
                </tbody>
            <br>
              </table>

              <table class="table">
                <tbody>
                    <thead class="p-3 mb-2 bg-primary text-white">

                          <td><h6>DATOS DE LAS TIMBRADAS:</h6></td>
                          <td><h6></h6></td>
                          <td><h6></h6></td>
                          <td><h6></h6></td>

                          
                    </thead>
                  <tr class="p-3 mb-2 bg-light text-dark">
                    
                    <td>
                       <label for="Interno">Datos del Sensor:</label></br>
                       <input type="text" class=".mr-sm-2" placeholder="Seleccione" id="">
                    </td>
                  

                  <td>
                      <label for="Interno">Produccido Bruto:</label></br>
                      <input type="text" class=".mr-sm-2" placeholder="Seleccione" id="">
                  </td>

                  <td>
                      <label for="Interno">Gastos:</label></br>
                      <input type="text" class=".mr-sm-2" placeholder="Seleccione" id="">
                  </td>
                                    
                  </tr>

                  <tr>
                      <td>
                          <label for="Interno">Anexos:</label></br>
                          <input type="file" class=".mr-sm-2" placeholder="Seleccione" id="">
                      </td>
                  </tr>
                    
                
                </tbody>
              
              </table>

              

    
            </form>  
         </div>
         </div>
       </div>
        
  
                
        
                  <br>
                  <br>
                  <br>
                  <br>



                <a href={{url('sensores/index')}}>CREAR</a>

                <form class="" action="{{url('sensores')}}" method="post" enctype="multipart/form-data">
                <br>
                {{csrf_field()}}


                  <label for="Nomnre">{{'Nombre'}}</label>
                  <input type="text" name="Nombre" value="">


                  <label for="Apellido">{{'Apellido'}}</label>
                  <input type="text" name="Apellido" value="">


                  <label for="Correo">{{'Correo'}}</label>
                  <input type="email" name="Correo" value="">

                  <p><label for="Foto ">
                    <input type="file" name="Foto">
                  
                  </label></p>


                

                  <input type="submit" name="" value="Agregar">

                </form>

</x-app-layout>
