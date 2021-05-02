
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



    <table class="table table-light">
        @if(Session::has('Mensaje'))

             <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>{{Session::get('Mensaje')}}</strong>
            </div>

        @endif
           <tbody>
             <tr>
             <center><h4>BIENVENIDO AL PANEL DE BUSQUEDA DE DATOS</h4>
             <center><h4>SENSORES POR VEHÍCULO</h4>
             <br>
              <tr><h6>Para poder continuar debe de seleccionar un interno*<h6></tr>
              <td><td>
                   
    <tr>
        <td>
               <label for="Interno">Interno: </label>

        </td>
        <td>
           <div>
   <form action="{{url('sensores/LIQUIDACION_VEH')}}" method="get">             
                <select id="developers" name="interno_hv">
                 
                    <option value="WEO675">1</option>      
                    
                   
                </select>
               
            </div>
    </td>
    <td>
               <label for="Conductor">Conductor: </label>
                    <select id="developers" name="Conductor_inicio">
                    
                    <option value="Bienvenido Ortiz">Bienvenido Ortiz</option>               
                    
                    </select>

    </td>
    <td>
        <label for="opciones">OPCIONES: </label></br>
    </td>
    <td>
        <div>
                <button type="submit" class="btn btn-success" onclick = "">CONSULTAR</button></center>
                
        </div>

    </td>
</form>
   
            
    <td>  
        <div>

                <form action="{{url('gestion_humana/operativo_crear')}}" method="get">
                    <button type="submit" class="btn btn-success" onclick = "">CREAR</button></center>

                </form

        </div>
        

    </td>


  </tr>
  
                <?php
                 }
                
                ?>

            </div>

             
         
</x-app-layout>

 

         
          
        