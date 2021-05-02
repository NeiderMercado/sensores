
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

    <form action="{{url('sensores/inicio')}}" method="get">

         <table class="table table-light">

           <tbody>
             <tr>
             <h3>AGREGAR NUEVA LIQUIDACIÓN:</h3>
               <td>

               <label for="Interno">Interno:</label></br>
                   <div>
                
                     <select id="developers" name="interno">>
                     

                          @foreach($datos4 as $int)
                          <option value="{{ $int->Interno }}">{{ $int->Interno }} </option>
                          @endforeach
                      </select>
               
                 </div>
                </td>

              <td>
               
                  <label for="Interno">Conductor: </label></br>
                   <div>
                
                     <select id="developers" name="name_cond">
                     
                          @foreach($datos4 as $conductor)
                          <option value="{{ $conductor->Conductor }}">{{ $conductor->Conductor }}</option>
                          @endforeach
                      </select>
               
                 </div>

               </td>

              <td>
               
               <div>
               
                <label for="Interno">Fecha:</label></br>
                <input type="date" class=".mr-sm-2" placeholder="Seleccione" id="" name="fecha">
                  
               </div>

              </td>

              <td>
               
               <div>
               
                <label for="Interno">Opciones:</label></br>
                <button type="submit" class="btn btn-success" onclick = "">Consultar Estado</button>
                
               </div>

              </td>
             </tr>
                <?php
                 }
                
                ?>

             <tr>
              <td>

              </td>
             </tr>
               
            </form>

             <tr>
          
        
        
         
          
          <td>
           


            </div>
         
</x-app-layout>

 

         
          
        