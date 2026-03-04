<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
  $n=$_POST['nombrer'];
  $c=$_POST['contrar'];
  if($n&$c)
  {
  $conexion=new mysqli("localhost","root","","grad");
  $sql="SELECT * FROM usuas WHERE nombre='$n'";
  $resultado=$conexion->query($sql);
  $dato=$resultado->fetch_assoc();
  if($dato)
  {
      echo "<div id='transpar'></div><div id='rayialerti'></div><div id='aviso'></div><div id='letravi'>Ese nombre de usuario ya esta siendo utilizado</div><div id='equis'onclick='quitaviso()'>X</div>";
  }
  else
  {
    echo "<div id='transpar'></div><div id='rayialerti'></div><div id='aviso'></div><div id='letravi'>Usuario ingresado</div><div id='equis'onclick='quitaviso()'>X</div>";
    $conexion=new mysqli("localhost","root","","grad");
    $sql="INSERT INTO usuas VALUES ('$n','$c')";
    $ejec=mysqli_query($conexion,$sql);
  }
  }

?>
<body>
    
</body>
</html>