 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }} 
        </h2>
        <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="jumbotron">
            <center><h3>CREAR UN NUEVO CONDUCTOR</h3></center>
            <h5>*Aquí podrás crear un nuevo conductor*</h>

            <br>
            <br>

              <table class="table">
                <tbody>
                    <thead class="p-3 mb-2 bg-primary text-white">
                         <form action="{{url('/gestion_humana/nuevo_conductor')}}" method="post" enctype>
                          {{csrf_field()}}
                          <td><h6>DATOS DEL NUEVO CONDUCTOR:</h6></td>
                          <td><h6></h6></td>
                          <td><h6></h6></td>
                          <td></td>

                          
                    </thead>
                  <tr class="p-3 mb-2 bg-light text-dark">
                     <td>
                       <label for="Interno">Interno:</label></br>
                       <input type="text" name="INTERNO" class=".mr-sm-2" placeholder="Seleccione" id="" >
                     </td>

                     <td>
                     <label for="nombre">{{'Nombres:'}}</label></br>
                      <input type="text" name="NOMBRES_CONDUCTOR" value="">
                    </td>
                  

                  <td>
                      <label for="apellido">{{'Apellidos:'}}</label></br>
                      <input type="text" name="APELLIDOS_CONDUCTOR" value="">
                  </td>

                  <td>
                      <label for="cedula">{{'Cedula:'}}</label></br>
                      <input type="text" name="CEDULA_COND"  value="" id="" required>
                  </td>
                  </tr>
            
                  <tr class="p-3 mb-2 bg-light text-dark">
                    
                  <td>
                      <label for="Lugar">{{'Lugar de Expedición:'}}</label></br>
                      <input type="text" name="Expedida_COND" class=".mr-sm-2" placeholder="Seleccione" value="" id="" >
                  </td>

                  <td>
                     <label for="Direccion">{{'Dirección:'}}</label></br>
                      <input type="text" name="Dirección_COND" class=".mr-sm-2" placeholder="Seleccione" value="" id="" required>
                  </td>

                  <td>
                  <label for="Movil">{{'# Móvil:'}}</label></br>
                      <input type="text" name="Movil_COND" class=".mr-sm-2" placeholder="Seleccione" value="" id="" >
                  </td>

                  <td>
                  <label for="Licencia">{{'# Licencia:'}}</label></br>
                      <input type="text" anme="Licencia_COND" class=".mr-sm-2" placeholder="Seleccione" value="" id="" >
                  </td>                  

                </tr>


                  <tr class="p-3 mb-2 bg-light text-dark">
                  <td>
                  <label for="Clase">{{'Clase:'}}</label></br>
                      <input type="text" name="CLASE_LICENCIA" class=".mr-sm-2" placeholder="Seleccione"  id="" >
                  </td>

                  <td>
                  <label for="Estado">{{'Estado:'}}</label></br>
                      <input type="text" name="ESTADO" class=".mr-sm-2" placeholder="Seleccione" value="ACTIVO"  id="" readonly >
                  </td>

                  <td>
                  <label for="fecha_ven">{{'Fecha de Vencimiento:'}} </label></br>
                      <input type="date" name="Vence" class=".mr-sm-2" placeholder="Seleccione" id="" >
                  </td>

                  <td>
                  <label for="fecha_contrato">{{'Fecha Inicio de contrato:'}} </label></br>
                      <input type="date" name="Fecha_Contrato" class=".mr-sm-2" placeholder="Seleccione" id="" >
                  </td>

                  <td></td>

                                                                   
                  </tr>
                  <tr class="p-3 mb-2 bg-light text-dark">
                  <td></td>
                      <td Colspan="2">
                      <label for="foto">{{'Foto:'}}</label></br>
                          <input type="file" name="FOTO_COND" class=".mr-sm-2" placeholder="Seleccione" id="" >
                      </td> 
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
    
            </form>  
         </div>
         </x-app-layout>
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


