 
 <x-app-layout>
    <x-slot name="header">
        <div class="py-3">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="jumbotron">
            <center><h3>.::AGREGAR NUEVO DOCUMENTACIÓN::.</h3></center>
            <h5>*Aquí podrás agregar los SOPORTE DE MANTENIMIENTO de los vehículos*</h>

            <br>
            <br>
            <?php 
              utf8_decode('');
              $interno = $_GET['interno'];
              $placa = $_GET['placa'];


            ?>
    <form action="{{ url('sensores/{id}/update')}}" method="post" enctype="multipart/form-data">
   
          {{ csrf_field() }}
            {{method_field('PATCH')}}
              <table class="table">
                <tbody>
                    <thead class="p-3 mb-2 bg-primary text-white">

                          <td><h6>CARGA DE DOCUMENTACIÓN:</h6></td>
                          <td><h6></h6></td>
                          <td><h6></h6></td>
                          <td><h6></h6></td>

                          
                    </thead>
                  <tr class="p-3 mb-2 bg-light text-dark">
                    <td>
                    
                        <label for="INTERNO">{{'Interno:'}}</label></br>
                        <input type="TEXT" name="INTERNO" class=".mr-sm-2" id="" value="<?php echo $interno ?>">
                    
                    </td>

                    <td>
                      <div class="dropdown">
                        <label for="PLACA">{{'Placa:'}} </label></br>
                        <input type="TEXT" name="PLACA" class=".mr-sm-2" id="" value="<?php echo $placa ?>">
                        
                        </div>
                      
                     
                    </td>

                    <td>
                      <label for="TIPO_DE_POLIZA">{{'Tipo De Póliza:'}}</label></br>
                      <select name="TIPO_DE_POLIZA" required>
                          <option></option>
                          
                          <option>PREVENTIVA</option>

                          <option>CORRECTIVA</option>

                      </select>
                  </td>
                  

                    <td>
                      <label for="FECHA">{{'Fecha de Mantenimiento:'}}</label></br>
                      <input type="date" name="FECHA" value="" required>

                    </td>
                  
                  </tr>


                  <tr class="p-3 mb-2 bg-light text-dark">
                    
                  

                  <td>
                      <label for="AÑO">{{'Año:'}}</label></br>
                      <input type="text" name="AÑO"  value="" id="" required>
                  </td>

                  <td>
                      <label for="DETALLES">{{'Detalles:'}}</label></br>
                      <input type="text" name="DETALLES"  value="" id="" >
                  </td>


                  <td colspan="4">
                      <label for="LINK">{{'Archivo:'}}</label></br>
                      <input type="file" name="LINK" class=".mr-sm-2" placeholder="Seleccione" value="" id="" required>
                  </td>
 

                </tr>
                <tr class="p-3 mb-2 bg-light text-dark">



                 
                                    
                  </tr>

                  <tr class="p-3 mb-2 bg-light text-dark">     
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

              