<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <link rel="shortcut icon" href="logri.png">
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="logri.png">
</head>
<style>
        @font-face {
font-family: “wazi”;
src: url(NotoSerif-Bold.ttf);
}
@font-face {
font-family: “letra2”;
src: url(OpenSans.ttf);
}
@font-face {
  font-family:“roboto”;
  src: url(Roboto-Bold.ttf);
}
@font-face {
font-family: “letra”;
src: url(EB.otf);
}
        body
    {
        font-family:“letra2”;
        background:url("fondex.png");
        overflow-x:hidden;
        color: #02254a;
    }
.baner{
  position: fixed;
  z-index: 999;
  top:0%;
  left:0%;
  width:100%;
  height: 16%;
  background-color:white;
  box-shadow: 0 0 10px 5px;
}
.logc
    {
       position: absolute;
      width: 12%;
      height:94%;
      left:42%;
      top: 3%;
   } 
   .cuadronoti
   {
    position:absolute;
    left:18%;
    width:65%;
    top:20%;
    border:1px solid black;
    background:white;
   }
   .titus
   {
    overflow:hidden;
text-overflow: ellipsis;
    width:90%;
  font-size:200%;
  color:#255D86;
  padding-left:5%;
  text-align:left;
  font-weight:bold;
  padding-top:3%;
  padding-bottom:2%;
   }
   @import url('normalize.css');
@import url('demo.css');
   @import 'https://fonts.googleapis.com/css?family=Rubik+One';
   .buttonn::after, .buttonn::before {
  position: absolute;
  content: "";
  transition: all 0.6s;
}
.buttonn {
  display: inline-block;
  position:absolute;
  z-index: 998;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  left: 12%;
font-family: “letra”;
  transform: translate(-50%, -50%);
  vertical-align: middle;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;

}
.buttonn::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
.buttonn::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
.buttonn:active {
  margin-left: 10px;
  margin-top: 10px;
}
.buttonn:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.buttonn:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.buttonn:hover {
background-color:#81BEB5;
  text-decoration: none;
  cursor: pointer;
    display: inline;
}
.dats 
{
  display:flex;
  flex-direction:row;
  width:92%;
  font-size:110%;
  color:black;
  font-weight:normal;
  padding-left:4%;
  text-align:center;
  align-items:center;
}
   .escritor
   {
    width:25%;
  font-size:100%;
   }  
   .fech
   {
    width:12%;
  font-size:100%;
   }
   .visitas
{
    width:8%;
  font-size:100%;
}
.calif
{
    width:22%;
  font-size:100%;
}
.catego
{
    width:28%;
    color:#255D86;
    text-align:center;
  font-size:100%;
}
   .contenid
   {
    width:90%;
    word-wrap:break-word;
  font-size:100%;
  color:black;
  padding-left:5%;
  text-align:left;
  font-weight:bold;
  padding-top:3%;
  padding-bottom:5%;
   }
   #foto
   {
    padding-left:5%;
    padding-top:2%;
   }
   #videou
   {
    padding-left:20%;
    padding-top:2%;
   }
.boto3 {

position: absolute;
text-decoration: none;
top: 19%;
left:8%;
font-family: “letra”;
color: white;
padding: 12px 24px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 200%;
cursor: pointer;
}

.boto3:hover {
transition: all 0.4s;
text-decoration: none;
color:#81BEB5;

}

.boto3:hover::after {
content: '';
display: block;
height: 3px;
background-color: #81BEB5;
margin-top: 5px;
 transition: all 0.4s;
}	
#mancha1
{
  position:absolute;
  width:12%;
  height:50%;
  left:6%;
  top:26%;
}
#aprobar
{
  position:absolute;
  background:url("aprob.png");
  background-size:contain;
  background-repeat:no-repeat;
  border:none;
  width:7%;
  height:70%;
  left:80%;
  top:16%;
}
#rechaz
{
  position:absolute;
  background:url("desap.png");
  background-size:contain;
  background-repeat:no-repeat;
  width:7%;
  height:70%;
  left:90%;
  top:16%;
}
#transpar
{
  display:none;
  z-index: 1000;
  position:fixed;
  top:0%;
  left:0%;
  width: 100%;
  height: 100%;
  background: rgb(0, 0, 0);
  opacity: 75%;
}
#posre
{
  display:none;
  position:fixed;
  z-index: 1001;
  top:32%;
  left:32%;
  width:40%;
  height:45%;
  background:white;
  border:solid black 5px;
}
#ray
{
  position:absolute;
  top:0%;
  left:0%;
  width:100%;
  height:20%;
  background:#044769;
  border-bottom:solid black 5px;
}
#rech
{
  position:absolute;
  top:35%;
  left:5%;
  width:40%;
  height:40%;
  font-family:“wazi”;
  font-size:150%;
  white-space:normal;
  text-align:center;
  background:transparent;
  border:solid black 2px;
}
#opore
{
  position:absolute;
  top:35%;
  left:55%;
  width:40%;
  height:30%;
  font-size:150%;
  font-family:“wazi”;
  color:black;
  word-wrap:break-word;
  vertical-align:middle;
  text-align:center;
  border:solid black 2px;
  padding-top:4%;
}
#mensaj
{
  display:none;
  z-index: 1002;
  position:fixed;
  top:32%;
  left:32%;
  width:40%;
  height:45%;
  background:white;
  border:solid black 5px;
  font-family:“wazi”;
  color:black;
  font-size:200%;
}
#inm
{
position:absolute;
left:15%;
top:35%;
width:70%;
height:15%;
}
#sree
{
  position:absolute;
left:40%;
top:70%;
width:15%;
height:15%;
}
</style>
<body><div class="cuadronoti">
    <?php
    $titul=$_GET['not'];
    $aut=$_GET['autor'];
    $conexion=new mysqli("localhost","root","","grad");
    $sql="SELECT * FROM notics WHERE titulo='$titul' AND usuario='$aut'";
    $resultado=$conexion->query($sql);
    $dato=$resultado->fetch_assoc();
      $fo=$dato['portada'];
    echo "<div class='titus'>".$dato['titulo']."</div>";
     ?>
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="90%" height="25%">
            <?php
    echo "<div class='dats'><div class='escritor'>Hecho por: ".$dato['usuario']."</div><hr size='15px'color='black'style='height:25px;' /><div class='fech'>".$dato['fecha']."</div><hr size='15px'color='black'style='height:25px;' /><p class='catego'>".$dato['categoria']."</p></div>";
     
            echo "<div class='contenid'>".$dato['contenido']."</div>";
            $sql="SELECT * FROM conadi WHERE titulo='$titul' ORDER BY orden";
            $resultado=$conexion->query($sql);
            $i=0;
            while ($dato=$resultado->fetch_assoc()) {
              if($dato['tipo']=='foto')
              {
              $fo=$dato['fovi'];
              ?>
              <img id="videou"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="60%" height="10%">
              <?php
              }
              if($dato['tipo']=='video')
              {
              $videoData=$dato['texto'];
              ?>
              <video controls width="60%" height="auto"id="videou">
  <source src="<?php echo $videoData; ?>" type="video/mp4">
  Tu navegador no admite la reproducción de videos.
</video><?php
              }
              if($dato['tipo']=='texto')
              {
                echo "<div class='contenid'>".$dato['texto']."</div>";
              }
          }
        ?>
        <div class="baner"><a href="admin.php?adm=<?php echo $_GET['adm'] ?>">
        <img src="logri.png"  alt="imagen1" class="logc">
    </a>
    <img src="etse2.png" id="mancha1">
    <a href="admin.php?adm=<?php echo $_GET['adm'] ?>" class="boto3">Volver</a>
    <form method="POST"action="solicitudes.php?not=<?php echo $titul ?>&autor=<?php echo $aut ?>&adm=<?php echo $_GET['adm'] ?>"enctype="multipart/form-data">
    <input type="submit"name="aprob"id="aprobar"value=""></input>
    <div id="rechaz"onclick="eqre()"></div>
</form>
</div>
<div id="transpar"></div>
<form id="posre" method="POST"action="solicitudes.php?not=<?php echo $titul ?>&autor=<?php echo $aut ?>&adm=<?php echo $_GET['adm'] ?>">
<div id="ray"></div>
<input type="submit" name="rec"id="rech"value="Rechazar definitivamente">
<div id="opore"onclick="cor()">Dar oportunidad de reenvio</div>
</form>
<form id="mensaj" action="solicitudes.php?not=<?php echo $titul ?>&autor=<?php echo $aut ?>&adm=<?php echo $_GET['adm'] ?>" method="post">
<div id="ray">Correcciones</div>
<input type="text" name="mens" id="inm"placeholder="Escribe las correcciones" required>
<input type="submit"name="reenv"id="sree">
</form>
<?php
   $conexion=new mysqli("localhost","root","","grad");
if(isset($_POST['reenv']))
{
  $recom=$_POST['mens'];
  $titul=$_GET['not'];
  $aut=$_GET['autor'];
  $sql="UPDATE notics SET estado='renvu' WHERE usuario='$aut' AND titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
  $sql="UPDATE admisns SET admn1='',admn2='',admn3='',admn4='' WHERE titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
  $sql="INSERT INTO correcs VALUES('$recom','$aut','$titul')";
 $ejec=mysqli_query($conexion,$sql);
        $admi=$_GET['adm'];
       ?> <script> window.location.replace("admin.php?adm="+'<?php echo $admi; ?>'+"");</script> 
       <?php
}
if(isset($_POST['rec']))
{
  $titul=$_GET['not'];
  $aut=$_GET['autor'];
  $sql="DELETE FROM notics WHERE usuario='$aut' AND titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
  $sql="DELETE FROM admisns WHERE titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
  $sql="SELECT * FROM conadi WHERE titulo='$titul' ORDER BY orden";
  $resultado=$conexion->query($sql);
  
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    if($dato['tipo']=='video')
  {
  $videoData=$dato['texto'];
  unlink($videoData);
  }
  }
  $sql="DELETE FROM conadi WHERE titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
  $admi=$_GET['adm'];
  ?> <script> window.location.replace("admin.php?adm="+'<?php echo $admi; ?>'+"");</script> 
  <?php
}
if(isset($_POST['aprob']))
{
  $titul=$_GET['not'];
  $aut=$_GET['autor'];
  $admi=$_GET['adm'];
   $acepts=0;
   $cabad=0;
   $saq=0;
  $sql="SELECT * FROM admisns WHERE titulo='$titul'";
  $resultado=$conexion->query($sql);
  while ($dato=$resultado->fetch_assoc()) {
  if($dato['admn4']==''){$cabad=4;} 
  else{if($dato['admn4']==$admi){$saq=10;} else{$acepts=$acepts+1;}}
  if($dato['admn3']==''){ $cabad=3; }
  else{if($dato['admn3']==$admi){$saq=10;} else{$acepts=$acepts+1;};}
  if($dato['admn2']==''){ $cabad=2; }
  else{if($dato['admn2']==$admi){$saq=10;} else{$acepts=$acepts+1;}}
  if($dato['admn1']==''){$cabad=1;}
  else{if($dato['admn1']==$admi){$saq=10;} else{$acepts=$acepts+1;}}
  }
  if($saq==10)
  {
    $cabad=0;
  }
  if($cabad==1)
    {
      $sql="UPDATE admisns SET admn1='$admi' WHERE titulo='$titul'";
      $ejecutar=mysqli_query($conexion,$sql);
    }
    if($cabad==2)
    {
      $sql="UPDATE admisns SET admn2='$admi' WHERE titulo='$titul'";
      $ejecutar=mysqli_query($conexion,$sql);
    }
    if($cabad==3)
    {
      $sql="UPDATE admisns SET admn3='$admi' WHERE titulo='$titul'";
      $ejecutar=mysqli_query($conexion,$sql);
    }
    if($cabad==4)
    {
      $sql="UPDATE admisns SET admn4='$admi' WHERE titulo='$titul'";
      $ejecutar=mysqli_query($conexion,$sql);
      $acepts=$acepts+1;
    }
  if($acepts==4)
  { 
    $sql="UPDATE notics SET estado='acept' WHERE usuario='$aut' AND titulo='$titul'";
    $ejecutar=mysqli_query($conexion,$sql);
    $sql="DELETE FROM admisns WHERE titulo='$titul'";
    $ejecutar=mysqli_query($conexion,$sql);
    
  }
 
        $admi=$_GET['adm'];
       ?> <script> window.location.replace("admin.php?adm="+'<?php echo $admi; ?>'+"");</script> 
       <?php
}
?>
<script>
  function eqre()
  {
    transpar.style.display="block";
    posre.style.display="block";
  }
  function cor()
  {
    posre.style.display="none";
    mensaj.style.display="block";
  }
  </script>
</body>
</html>