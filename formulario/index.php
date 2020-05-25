<?php
  $servidor="localhost";
  $usuario="root";
  $clave="";
  $baseDeDatos="formulario";

  $enlace= mysqli_connect($servidor,$usuario,$clave,$baseDeDatos);

  if(!$enlace){
    echo"error en la conexion con el servidor"
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario de registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <div class="contenedor">
    <form action="#" class="formulario" id="formulario" name="formulario" method="POST">
      <div class="contenedor-inputs">
        <input type="text" name="nombres" placeholder="Nombres">
        <input type="text" name="apellidos" placeholder="Apellidos">
        <input type="text" name="correo" placeholder="Correo">
        <ul class="error" id="error"></ul>

      </div>

      <input type="submit" class="btn" name="Registrar" value="Registrar" value="Registrar">
    </form>
    <div class="tabla">
      <table>
        <tr>
          <th>nombres</th>
          <th>apellidos</th>
          <th>correo</th>
          <th>contraseña</th>
        </tr>
      </table>

    </div>

  </div>
  <script src="formulario.js"></script>
  </body>
</html>
<?php
  if(isset($_POST['Registrar'])){
    $nombres= $_POST["nombres"];
    $apellidos= $_POST["apellidos"];
    $correo= $_POST["correo"];
    $contraseña= $_POST["contraseña"];

    $insertarDatos="INSERT INTO datos VALUES('$nombres',
                                              '$apellidos',
                                               '$correo',
                                                '$contraseña')";

    $ejecutarInsertar= mysqli_query($enlace, $insertarDatos);

    if(!$ejecutarInsertar){
      echo"error en la linea de sql";
    }
  }
?>
