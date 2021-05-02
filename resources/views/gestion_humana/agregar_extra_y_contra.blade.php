 
 <x-app-layout>
    <x-slot name="header">
        <div class="py-3">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="jumbotron">
            <center><h3>.::AGREGAR NUEVO DOCUMENTACIÓN::.</h3></center>
            <h5>*Aquí podrás agregar los documentos de los vehículos*</h>

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
                       <label for="POLIZA">{{'Póliza:'}}</label></br>
                       <input type="text" name="POLIZA" value="">

                    </td>
                  

                    <td>
                      <label for="ENTIDAD">{{'Entidad:'}}</label></br>
                      <input type="text" name="ENTIDAD" value="">

                    </td>
                  
                  </tr>


                  <tr class="p-3 mb-2 bg-light text-dark">
                    
                  

                  <td>
                      <label for="AÑO">{{'Año:'}}</label></br>
                      <input type="text" name="AÑO"  value="" id="" required>
                  </td>

                  <td>
                      <label for="VIG_DESDE">{{'Vigencia Desde:'}}</label></br>
                      <input type="date" name="VIG_DESDE" class=".mr-sm-2" placeholder="Seleccione" value="" id="" required>
                  </td>

                   <td>
                      <label for="VIG_HASTA">{{'Vigencia Hasta:'}}</label></br>
                      <input type="date" name="VIG_HASTA" class=".mr-sm-2" placeholder="Seleccione" value="" id="" required>
                  </td>

                  <td>
                      <label for="TIPO_DE_POLIZA">{{'Tipo De Póliza:'}}</label></br>
                      <select name="TIPO_DE_POLIZA" required>
                          <option></option>
                          
                          <option>Responsabilidad Civil Contractual</option>

                          <option>Responsabilidad Civil Extracontractual</option>

                      </select>
                  </td>

                 
 

                </tr>
                <tr class="p-3 mb-2 bg-light text-dark">

                  <td colspan="4">
                      <center><label for="LINK">{{'Archivo:'}}</label></br>
                      <input type="file" name="LINK" class=".mr-sm-2" placeholder="Seleccione" value="" id="" required></center>
                  </td>

                 
                                    
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
        
      </form>
          
         </div>
         </x-app-layout>

              