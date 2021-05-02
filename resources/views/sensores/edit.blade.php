
<?php
$var = ''; // Cadena vacía

if (isset($_GET['Nombre_E'])) { 
    $Nombre=$_GET['Nombre_E'];
    $identi=$_GET['Ide'];
    $Apellido=$_GET['Apellido_E'];
    $Correo=$_GET['Correo_E'];
    $Foto=$_GET['Foto_E'];



?>


<form class="" action="{{ url('/sensores/'.$identi.'/update')}}" method="post" enctype="multipart/form-data">
<br>
{{ csrf_field() }}
{{method_field('PATCH')}}

  <label for="Nomnre">{{'Nombre'}}</label>
  <input type="text" name="Nombre" value="<?php echo $Nombre ?>">


  <label for="Apellido">{{'Apellido'}}</label>
  <input type="text" name="Apellido" value="<?php echo $Apellido ?>">


  <label for="Correo">{{'Correo'}}</label>
  <input type="email" name="Correo" value="<?php echo $Correo ?>">

    <p><label for="Foto">
    <input type="file" name="Foto">
  
  </label></p>

  <input type="submit" name="" value="ACTUALIZAR">

</form>

<a href={{url('sensores/index')}}>REGRESAR</a>
<?php
}

?>