<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Praeda</title>
	<link rel="shortcut icon" href="logri.png">
 <style>
		body {
			background-color: #f2f2f2;
		}
		@font-face {
font-family: “letra”;
src: url(EB.otf);
}
@font-face {
font-family: “wazi”;
src: url(NotoSerif-Bold.ttf);
}	
@font-face {
font-family: “letra2”;
src: url(OpenSans.ttf);
}

			.baner{
  position: fixed;
  z-index: 999;
  top:0%;
  left:0%;
  width:100%;
  height: 108px;
  background-color:white;
  box-shadow: 0 0 10px 5px;
}

.logc
    {
       position: absolute;
      width: 12%;
      height:94%;
      left:43%;
      top: 3%;
   } 
   .boto2 {

position: absolute;
text-decoration: none;
top: 19%;
left:28%;
color: white;
padding: 12px 24px;
text-align: center;
font-family: “letra”;
text-decoration: none;
display: inline-block;
font-size: 200%;
cursor: pointer;
}

.boto2:hover {
transition: all 0.4s;
text-decoration: none;
color:#81BEB5;

}

.boto2:hover::after {
content: '';
display: block;
height: 3px;
background-color: #81BEB5;
margin-top: 5px;
 transition: all 0.4s;
}	
.boto3 {

position: absolute;
text-decoration: none;
top: 19%;
left:8%;
color: white;
padding: 12px 24px;
text-align: center;
font-family: “letra”;
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
.button4::after, .button4::before {
  position: absolute;
  content: "";
  transition: all 0.6s;
}
.button4 {
  display: inline-block;
  position:fixed;
  z-index: 1000;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  top: 44%;
  border-radius:8px;
  left: 88%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;

}
.button4::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
.button4::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
.button4:active {
  margin-left: 10px;
  margin-top: 10px;
}
.button4:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.button4:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.button4:hover {
background-color:#81BEB5;
  text-decoration: none;
  cursor: pointer;
}#solic::after, #solic::before {
  content: "";
  transition: all 0.6s;
}
#solic{
  z-index: 1000;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  margin-bottom:3%;
  margin-left:45%;
  margin-top:5%;
  border-radius:8px;
  transform: translate(-50%, -50%);
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;

}
#solic::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 45.5%;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
#solic::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
#solic:active {
  margin-left: 45.5%;
  margin-top: 5.5%;
}
#solic:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
#solic:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
#solic:hover {
background-color:#81BEB5;
  text-decoration: none;
  cursor: pointer;
}
#solic2::after, #solic2::before {
  content: "";
  transition: all 0.6s;
}
#solic2{
  z-index: 1000;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  margin-bottom:3%;
  margin-left:45%;
  margin-top:5%;
  border-radius:8px;
  transform: translate(-50%, -50%);
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;

}
#solic2::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 45.5%;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
#solic2::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
#solic2:active {
  margin-left: 45.5%;
  margin-top: 5.5%;
}
#solic2:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
#solic2:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
#solic2:hover {
background-color:#81BEB5;
  text-decoration: none;
  cursor: pointer;
}
#mancha1
{
  position:absolute;
  width:12%;
  height:50%;
  left:6%;
  top:26%;
}
#titulazo
{
  border:none;
    width:90%;
  font-size:200%;
  color:black;
  font-family: “letra2”;
  resize: none;
  overflow:hidden;
  white-space: normal;
  word-break: break-word;
  padding-left:5%;
  text-align:left;
  font-weight:bold;
  padding-top:3%;
  padding-bottom:2%;
}
#artic
{
  font-family: “letra2”;
	position:absolute;
    left:18%;
    width:65%;
    top:25%;
    background:white;
    background-color: rgba(255, 255, 255, 0.8);
}
#vispr
   {
    font-family: “letra2”;
    position:absolute; 
    width:263px; 
    height:146px;
    margin-top:2%;
    margin-left:5%;
    margin-bottom:2%;
   
   }
   #vispr2
   {
    font-family: “letra2”;
    position:absolute; 
    width:263px; 
    height:146px;
    margin-top:2%;
    margin-left:5%;
    margin-bottom:2%;
   
   }
   .visp
{
    font-family: “letra2”;
    width:263px; 
    height:146px;
    margin-top:2%;
    margin-left:5%;
    margin-bottom:2%;
}
#visprr
   {
    position:absolute; 
    font-family: “letra2”;
    width:263px; 
    height:146px;
    margin-top:2%;
    margin-left:5%;
    margin-bottom:2%;
   
   }
   #contenid
   {
    position:relative;
    border:none;
    width:90%;
	margin-top:190px;
  resize: none;
  overflow:hidden;
  font-size:100%;
  color:black;         
     font-family: “letra2”;
  padding-top:1%;
  padding-right:2.5%;
  padding-left:2.5%;
  text-align:left;
  font-weight:bold;
   }
   .conteni
   {
    border:none;
    width:90%;
    max-height:60%;
  resize:none;
  font-size:100%;
  font-family: “letra2”;
  color:black;
  padding-top:1%;
  padding-right:2.5%;
  padding-left:2.5%;
  margin-bottom:5%;
  text-align:left;
  font-weight:bold;
   }
   #foton
   {
	position:relative;
	width:49%;
	padding-top:2%;
  padding-left:5%;
   }
   #vidi
   {
	position:relative;
	width:49%;
	padding-top:2%;
  padding-left:5%;
   }
   #letravi
  {
    z-index:1002;
    font-family: “letra”;
    position:fixed;
    font-size:270%;
    color:black;
    width:32%;
    top:52%;
    left:35%;   
  }
  #letravi2
  {
    z-index:1002;
    font-family: “letra”;
    position:fixed;
    font-size:200%;
    color:black;
    width:32%;
    top:52%;
    left:35%;   
  }
#aviso
{
z-index: 1002;
position: fixed;
    width: 33.8%;
    top: 40%;
    left: 33.8%;
    height: 40%;
    background:white;
    border: black solid 3px;
}
#transpar
{
  z-index: 1001;
  position:fixed;
  top:0%;
  left:0%;
  width: 100%;
  height: 100%;
  background: rgb(0, 0, 0);
  opacity: 75%;
}
#equis
{
  position: fixed;
          font-family: Arial;
          font-size: 50px;
          color:black;
          left: 64.5%;
          z-index: 1002;
          top: 40%;
}

#rayialerti{
  z-index:1002;
  position: fixed;
  font-family: “wazi”;
      font-size:220%;
          height: 7%;
          width: 33.8%;
          background-color:#044769;
          box-shadow:inset 0 0 10px 5px;
          left: 33.8%;
          top: 40%;
          border: black solid 3px;
          }
          #rayialerti2{
  z-index:1002;
  position: fixed;
  font-family: “wazi”;
      font-size:220%;
          height: 7%;
          width: 33.8%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 33.8%;
          top: 40%;
          border: black solid 3px;
          }
          #fec
          {
            position:relative;
            top:26%;
            font-family: “letra2”;
            left:1%;
          }
          #categorias
          {
            position:relative;
            top:26%;
            font-family: “letra2”;
            left:5%;
          }
          #agrel
          {
            display:flex;
            flex-direction:row;
            width:74%;
            cursor:pointer;
          }
          #agrega
          {
            margin-left:1%;
            top:80%;
            color:#044769;
            width:30%;
            cursor:pointer;
          }
          .quitarel
          {
            margin-left:75%;
            color:#F14545;
            cursor:pointer;
          }
          #agrega1
          {
            display:none;
            margin-left:1%;
            top:80%;
            color:#044769;
            width:30%;
            cursor:pointer;
          }
          #agrv
          {
            width:33%;
            cursor:pointer;
          }
          #agrf
          {
            width:34%;
            cursor:pointer;
          }
          #agrt
          {
            width:33%;
            cursor:pointer;
          }
          .agregados
          {
            display:flex;
            top:80%;
            width:100%;
            flex-direction:row;
          }
          #agregs
          {
          }
          #agregs1
          {
            top:75%;
            margin-bottom:5%;
          }
          @media(orientation:portrait)
   {
    #letravi2
  {
    z-index:1003;
    font-family: “letra”;
    position:fixed;
    font-size:150%;
    color:black;
    width:70%;
    top:42%;
    left:15%;   
  }
  #equis
{
  position: fixed;
          font-family: Arial;
          font-size: 50px;
          color:black;
          left: 79%;
          z-index: 1004;
          top: 30%;
}
  #rayialerti2{
    z-index:1003;
  position: fixed;
  font-size:160%;
          height: 7%;
          width: 80%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 8%;
          top: 30%;
          border: black solid 3px;
          }
          #aviso
{
  z-index: 1002;
position: fixed;
    width: 80%;
    top: 30%;
    left: 8%;
    height: 40%;
    background:white;
    border: black solid 3px;
}
    #mancha1
{
  position:absolute;
  width:25%;
  height:30%;
  left:6%;
  top:30%;
}
.boto3 {

position: absolute;
text-decoration: none;
top: 20%;
left:7%;
font-family: “letra”;
color: white;
padding: 12px 24px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 150%;
cursor: pointer;
}
.button4
{
  font-size:120%;
  width:22%;
  left:80%;
}
.logc
    {
       position: absolute;
      width: 20%;
      height:86%;
      left:40%;
      top: 3%;
   } 
   #artic
   {
    position:absolute;
    left:2%;
    font-size:70%;
    top:18%;
    width:96%;
   }
   #titulazo
   {
    font-size:180%;
   }
   #fec
   {
    font-size:100%;
   }
   #fes
   {
    font-size:100%;
   }
   #vispr
   {
    position:absolute; 
    font-family: “letra2”;
    width:131px; 
    height:73px;
    margin-top:2%;
    margin-left:5%;
    margin-bottom:2%;
   }
   #categorias
   {
    margin-top:5%;
   }
   #solic
   {
    font-size:180%;
   }
   #solic2
   {
    font-size:180%;
   }
   }
</style>
</head>
<body>
<?php
$usu=$_GET['usuario'];
$notic=$_GET['not'];
$conexion=new mysqli("localhost","root","","grad");
$sql="SELECT * FROM notics WHERE titulo='$notic' AND usuario='$usu'";
$resultado=$conexion->query($sql);
$dato=$resultado->fetch_assoc();
$conten=$dato['contenido'];
$sql2="SELECT * FROM correcs WHERE titulo='$notic' AND usuario='$usu'";
$resultado2=$conexion->query($sql2);
$dato2=$resultado2->fetch_assoc();
echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti2'>Mensaje del Admin</div><div id='letravi2'>".$dato2['mensaje']."</div><div id='equis'onclick='quitaviso2()'>X</div>"
?>
       <div class="baner">  <a href="#"><img src="logri.png"  alt="imagen1"  onclick="botolo()" class="logc"></a>
       <div class="cua" ame="r7" id="r7"></div> 
	   <img src="etse2.png" id="mancha1">
       <div class="barra" onclick="b1()"></div>
	   <a href="user.php?usuario=<?php echo $_REQUEST['usuario'];?>" class="boto3">Volver</a>
	   <a class="button4" href="index.php">Cerrar sesion</a>
       </div> 
       <form action="correcs.php?not=<?php echo $_REQUEST['not']?>&usuario=<?php echo $_REQUEST['usuario']?>"id="artic"method="POST"enctype="multipart/form-data">
       <input type="text"name="usuario"value="<?php echo $_REQUEST['usuario']?>"style="display:none;">
	<textarea type="text"name="titulo"placeholder="Titulo (maximo 64 caracteres)"id="titulazo"maxLength="64"required><?php echo $_REQUEST['not']?></textarea>
	<input type="file"value="Imagen de portada" name="fop" id="foton" onchange="imagen(event)"></input>
  <input type="text"name="fecha"style="display:none;"id="fes"value="<?php echo $dato['fecha']; ?>">
        Fecha:<input type="date"id="fec"onchange="cambfe()">
  <select name="categ"id="categorias"required>
    <option selected><?php echo $dato['categoria']; ?></option>
    <option>Colombia</option>
    <option>Mundo</option>
    <option>Política</option>
    <option>Tecnología</option>
    <option>Economía</option>
    <option>Deportes</option>
    <option>Entretenimiento</option>
    <option>Artículo cientifico</option>
    <option>Artículo de opinión</option>
    <option>Dibujo</option>
        </select>
  <div style="margin-left:5%;margin-top:2%;">Vista previa de la portada:</div>
	<div id="vispr"></div>
  <img id="vispr2"src="data:image/jpg;base64,<?php $usu=$_GET['usuario'];
$notic=$_GET['not'];   $conexion=new mysqli("localhost","root","","grad");
    $sql="SELECT * FROM notics WHERE titulo='$notic' AND usuario='$usu'";
    $resultado=$conexion->query($sql);
    $dato=$resultado->fetch_assoc();
      $fo=$dato['portada']; echo base64_encode($fo); ?>">
	<textarea type="text"name="conte"placeholder="Contenido de la publicacion"id="contenid"rows="2"required><?php echo $conten?></textarea>	
	<div id="agregs1">
    <?php
 $sql="SELECT * FROM conadi WHERE titulo='$notic' ORDER BY orden";
 $resultado=$conexion->query($sql);
 $i=0;
 while ($dato=$resultado->fetch_assoc()) {
   if($dato['tipo']=='foto')
   {
   $fo=$dato['fovi'];
   ?>
    <input type="text" name="caig<?= $dato['orden']?>" id="cig<?= $dato['orden']?>"value="igual"style="display:none;">
   <input type="text"name="elemento<?= $dato['orden']?>"value="video"id="elementoo<?= $dato['orden']?>"style="display:none;">
   <div class="quitarel"id="quitarell<?= $dato['orden']?>"onclick="borrelm(<?= $dato['orden']?>)">X Remover elemento</div>
   <input type="file" accept=".mp4"name="vid<?= $dato['orden']?>"id="vidi<?= $dato['orden']?>"onchange="videoo(event,<?= $dato['orden']?>)"value="">
   <div id="vistapr<?= $dato['orden']?>"style="margin-left:5%;margin-top:2%;">Vista previa:</div>
   <div id="visprr<?= $dato['orden']?>"style="margin-left:5%; ">
   <img class="visp"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="60%" height="10%"></div><?php

   }
   if($dato['tipo']=='video')
   {
   $videoData=$dato['texto'];
   ?>
   <input type="text" name="caig<?= $dato['orden']?>" id="cig<?= $dato['orden']?>"value="igual"style="display:none;">
   <input type="text"name="elemento<?= $dato['orden']?>"value="video"id="elementoo<?= $dato['orden']?>"style="display:none;">
   <div class="quitarel"id="quitarell<?= $dato['orden']?>"onclick="borrelm(<?= $dato['orden']?>)">X Remover elemento</div>
   <input type="file" accept=".mp4"name="vid<?= $dato['orden']?>"id="vidi<?= $dato['orden']?>"onchange="videoo(event,<?= $dato['orden']?>)" value="">
   <div id="vistapr<?= $dato['orden']?>"style="margin-left:5%;margin-top:2%;">Vista previa:</div>
   <div id="visprr<?= $dato['orden']?>"style="margin-left:5%; ">
   <video controls width="320" height="240">
<source src="<?php echo $videoData; ?>" type="video/mp4">
Tu navegador no admite la reproducción de videos.
</video></div><?php
   }
   if($dato['tipo']=='texto')
   {
   ?> <input type="text" name="caig<?= $dato['orden']?>" id="cig<?= $dato['orden']?>"value="igual"style="display:none;">
    <input type="text"name="elemento<?= $dato['orden']?>"value="texto"id="elementoo<?= $dato['orden']?>"style="display:none;">
    <div class="quitarel"id="quitarell<?= $dato['orden']?>"onclick="borrelm(<?= $dato['orden']?>)">X Remover elemento</div>
    <textarea type="text"name="conte<?= $dato['orden']?>"placeholder="Contenido adicional"id="contni<?= $dato['orden']?>"class="conteni"rows="2"required onchange="textar(<?= $dato['orden']?>)"><?php echo $dato['texto']; ?></textarea>	
    <?php
   }
}
    ?>
    <div id="agregs"></div>
  </div>
  <div class="agregados">
    <div id="agrega"onclick="agre()">Agregar elementos ></div>
    <div id="agrega1"onclick="agre1()">Agregar elementos ></div>
    <div id="agrel"style="display:none;">
      <div id="agrv"onclick="agregv()">Agregar video</div>
      <div id="agrf"onclick="agregf()">Agregar foto</div>
      <div id="agrt"onclick="agregt()">Agregar texto</div>
  </div>
        </div>
        <?php
        $sql="SELECT MAX(orden) as orden FROM conadi WHERE titulo='$notic'";
        $resultado=$conexion->query($sql);
        $dato=$resultado->fetch_assoc();
        if($dato['orden'])
        {
        $idd=$dato['orden'];
        }
        else{
          $idd=0;
        }
        ?>
        <input type="number"name="nuelem"id="nuevel"style="display:none;"value="<?= $idd; ?>">
  <input type="submit"value="Enviar solicitud"id="solic"name="env"style="display:none;">
  <input type="submit"value="Enviar solicitud"id="solic2"name="env2">
	</form>
  <div id="alertaa"><div id='transpar'style="display:none"></div><div id='aviso'style="display:none"></div><div id='rayialerti'style="display:none"></div><div id='letravi'style="display:none"></div><div id='equis'onclick='quitaviso()'style="display:none">X</div></div>
  <?php 
if(isset($_POST['env']))
{
  $vtitu=$_GET['not'];
  $usu=$_POST['usuario'];
  $titul=$_POST['titulo'];
  $ctg=$_POST['categ'];
  $fe=$_POST['fecha'];
  $fo=addslashes(file_get_contents($_FILES['fop']['tmp_name']));
  $cont=$_POST['conte'];
  $conexion=new mysqli("localhost","root","","grad");
  $sql="UPDATE notics SET estado='renva',fecha='$fe',categoria='$ctg',titulo='$titul',portada='$fo',contenido='$cont' WHERE usuario='$usu' AND titulo='$vtitu'";
  $ejecutar=mysqli_query($conexion,$sql);
  $sql="DELETE FROM correcs WHERE usuario='$usu' AND titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
  $nuev=$_POST['nuelem'];
  if($nuev==0)
  {
  }
  else
  {
    $i=1;
    while($i<=$nuev)
    {
      $lement=$_POST['elemento'.$i];
      if($lement=='foto')
      {
        $cambi=$_POST['caig'.$i];
        if($cambi)
        {
          if($cambi=="igual")
          {          }
          if($cambi=="cambiado")
          {
            $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
            $ejecutar=mysqli_query($conexion,$sql);
            $fo=addslashes(file_get_contents($_FILES['fop'.$i]['tmp_name']));
            $sql="INSERT INTO conadi VALUES('$titul','foto','$fo','',$i)";
       $ejec=mysqli_query($conexion,$sql);
          }
        }
        else
        {
        $fo=addslashes(file_get_contents($_FILES['fop'.$i]['tmp_name']));
        $sql="INSERT INTO conadi VALUES('$titul','foto','$fo','',$i)";
   $ejec=mysqli_query($conexion,$sql);
        }
      }
      if($lement=='video')
      {
        $cambi=$_POST['caig'.$i];
        if($cambi)
        {
          if($cambi=="igual")
          {          }
          if($cambi=="cambiado")
          {
            $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
            $ejecutar=mysqli_query($conexion,$sql);
            $ruta_destino ='videos/'; 
            $nombre_archivo = $_FILES['vid' . $i]['name'];
            $ruta_completa = $ruta_destino . $nombre_archivo;
            $ruta_completa = str_replace("\\", "/", $ruta_completa);
            if (move_uploaded_file($_FILES['vid' . $i]['tmp_name'], $ruta_completa)) {
                $fo = $ruta_completa; 
                $sql = "INSERT INTO conadi VALUES('$titul','video','','$fo',$i)";
                $ejec = mysqli_query($conexion, $sql);
            }
          }
        }
        else
        {
        $fo=addslashes(file_get_contents($_FILES['vid'.$i]['tmp_name']));
        $sql="INSERT INTO conadi VALUES('$titul','video','$fo','',$i)";
   $ejec=mysqli_query($conexion,$sql);
        }
      }
      if($lement=='texto')
      {
        $cambi=$_POST['caig'.$i];
        if($cambi)
        {
          if($cambi=="igual")
          {          }
          if($cambi=="cambiado")
          {
            $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
            $ejecutar=mysqli_query($conexion,$sql);
            $tt=$_POST['conte'.$i];
            $sql="INSERT INTO conadi VALUES('$titul','texto','','$tt',$i)";
       $ejec=mysqli_query($conexion,$sql);
          }
        }
        else
        {
      $tt=$_POST['conte'.$i];
        $sql="INSERT INTO conadi VALUES('$titul','texto','','$tt',$i)";
   $ejec=mysqli_query($conexion,$sql);
      }
    }
      if($lement=='quitado')
      {
        $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
      }
      $i=$i+1;
    }
  }
         echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Solicitud de publicacion reenviada, espere a que sea revisada.</div><div id='equis'onclick='quitaviso()'>X</div>";
         ?> <script> window.location.replace("user.php?usuario="+'<?php echo $usu; ?>'+"");</script> 
         <?php
        }
        if(isset($_POST['env2']))
{
  $vtitu=$_GET['not'];
  $usu=$_POST['usuario'];
  $titul=$_POST['titulo'];
  $ctg=$_POST['categ'];
  $fe=$_POST['fecha'];
  $cont=$_POST['conte'];
  $conexion=new mysqli("localhost","root","","grad");
  $sql="UPDATE notics SET estado='renva',fecha='$fe',categoria='$ctg',titulo='$titul',contenido='$cont' WHERE usuario='$usu' AND titulo='$vtitu'";
  $ejecutar=mysqli_query($conexion,$sql);
  $sql="DELETE FROM correcs WHERE usuario='$usu' AND titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
  $nuev=$_POST['nuelem'];
  if($nuev==0)
  {
  }
  else
  {
    $i=1;
    while($i<=$nuev)
    {
      $lement=$_POST['elemento'.$i];
      if($lement=='foto')
      {
        $cambi=$_POST['caig'.$i];
        if($cambi)
        {
          if($cambi=="igual")
          {          }
          if($cambi=="cambiado")
          {
            $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
            $ejecutar=mysqli_query($conexion,$sql);
            $fo=addslashes(file_get_contents($_FILES['fop'.$i]['tmp_name']));
            $sql="INSERT INTO conadi VALUES('$titul','foto','$fo','',$i)";
       $ejec=mysqli_query($conexion,$sql);
          }
        }
        else
        {
        $fo=addslashes(file_get_contents($_FILES['fop'.$i]['tmp_name']));
        $sql="INSERT INTO conadi VALUES('$titul','foto','$fo','',$i)";
   $ejec=mysqli_query($conexion,$sql);
        }
      }
      if($lement=='video')
      {
        $cambi=$_POST['caig'.$i];
        if($cambi)
        {
          if($cambi=="igual")
          {          }
          if($cambi=="cambiado")
          {
            $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
            $ejecutar=mysqli_query($conexion,$sql);
            $ruta_destino ='videos/'; 
            $nombre_archivo = $_FILES['vid' . $i]['name'];
            $ruta_completa = $ruta_destino . $nombre_archivo;
            $ruta_completa = str_replace("\\", "/", $ruta_completa);
            if (move_uploaded_file($_FILES['vid' . $i]['tmp_name'], $ruta_completa)) {
                $fo = $ruta_completa; 
                $sql = "INSERT INTO conadi VALUES('$titul','video','','$fo',$i)";
                $ejec = mysqli_query($conexion, $sql);
            }
          }
        }
        else
        {
        $fo=addslashes(file_get_contents($_FILES['vid'.$i]['tmp_name']));
        $sql="INSERT INTO conadi VALUES('$titul','video','$fo','',$i)";
   $ejec=mysqli_query($conexion,$sql);
        }
      }
      if($lement=='texto')
      {
        $cambi=$_POST['caig'.$i];
        if($cambi)
        {
          if($cambi=="igual")
          {          }
          if($cambi=="cambiado")
          {
            $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
            $ejecutar=mysqli_query($conexion,$sql);
            $tt=$_POST['conte'.$i];
            $sql="INSERT INTO conadi VALUES('$titul','texto','','$tt',$i)";
       $ejec=mysqli_query($conexion,$sql);
          }
        }
        else
        {
      $tt=$_POST['conte'.$i];
        $sql="INSERT INTO conadi VALUES('$titul','texto','','$tt',$i)";
   $ejec=mysqli_query($conexion,$sql);
      }
    }
      if($lement=='quitado')
      {
        $sql="DELETE FROM conadi WHERE orden='$i' AND titulo='$titul'";
  $ejecutar=mysqli_query($conexion,$sql);
      }
      $i=$i+1;
    }
  }
         echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Solicitud de publicacion reenviada, espere a que sea revisada.</div><div id='equis'onclick='quitaviso()'>X</div>";
         ?> <script> window.location.replace("user.php?usuario="+'<?php echo $usu; ?>'+"");</script> 
         <?php
        }

  ?>
	    <script>
        window.onload = function(){
    fech=document.getElementById('fes');
    fechh=fech.value
  vector=fechh.split('');
  ano=vector[6]+vector[7]+vector[8]+vector[9];
  mes=vector[3]+vector[4];
  dia=vector[0]+vector[1];
  document.getElementById('fec').value=ano+"-"+mes+"-"+dia;
}
function agregf()
{
  x=agregs.innerHTML;
  y=parseInt(nuevel.value);
  y=y+1;
  
  var nuevoInput = document.createElement('input');
  nuevoInput.type = 'file';
  nuevoInput.name = 'fop'+y ;
  nuevoInput.id = 'foton' + y;
  nuevoInput.setAttribute('onchange', 'imagenn(event,' + y + ')');
  nuevoInput.required = true;
  nuevoInput.value = '';
  var divVistaPrevia = document.createElement('div');
  divVistaPrevia.style.marginLeft = '5%';
  divVistaPrevia.style.marginTop = '2%';
  divVistaPrevia.id="vistapr"+y;
  divVistaPrevia.textContent = 'Vista previa:';

  var divVispr = document.createElement('div');
  divVispr.className = 'visp';
  divVispr.id = 'visprr' + y;

  inp = document.createElement('input');
  inp.type = 'text';
  inp.name = 'elemento' + y;
  inp.value='foto';
  inp.id = 'elementoo' + y;
  inp.style.display="none"
  var nuevot = document.createElement('div');
  nuevot.className = 'quitarel';
  nuevot.id='quitarell'+y;
  nuevot.setAttribute('onclick', 'borrelm(' + y + ')');
  nuevot.textContent='X Remover elemento';
  agregs.appendChild(inp);
  agregs.appendChild(nuevot);
  agregs.appendChild(nuevoInput);
  agregs.appendChild(divVistaPrevia);
  agregs.appendChild(divVispr);

  nuevel.value=y;
}
function agregt()
{
  x=agregs.innerHTML;
  y=parseInt(nuevel.value);
  y=y+1;
  
  var nuevoInput = document.createElement('textarea');
  nuevoInput.type = 'text';
  nuevoInput.name = 'conte'+y;
  nuevoInput.id='contni'+y;
  nuevoInput.className = 'conteni';
  nuevoInput.setAttribute('onchange', 'textar('+ y +')');
  nuevoInput.required = true;
  nuevoInput.placeholder = 'Contenido adicional';

  inp = document.createElement('input');
  inp.type = 'text';
  inp.name = 'elemento' + y;
  inp.id = 'elementoo' + y;
  inp.value='texto';
  inp.style.display="none"
  var nuevot = document.createElement('div');
  nuevot.className = 'quitarel';
  nuevot.id='quitarell'+y;
  nuevot.setAttribute('onclick', 'borrelm(' + y + ')');
  nuevot.textContent='X Remover elemento';
  agregs.appendChild(inp);
  agregs.appendChild(nuevot);
  agregs.appendChild(nuevoInput);
  nuevel.value=y;
}
function agregv()
{
  x=agregs.innerHTML;
  y=parseInt(nuevel.value);
  y=y+1;
  
  var nuevoInput = document.createElement('input');
  nuevoInput.type = 'file';
  nuevoInput.accept = '.mp4';
  nuevoInput.name = 'vid'+y ;
  nuevoInput.id = 'vidi' + y;
  nuevoInput.setAttribute('onchange', 'videoo(event,' + y + ')');
  nuevoInput.required = true;
  nuevoInput.value = '';
  var divVistaPrevia = document.createElement('div');
  divVistaPrevia.style.marginLeft = '5%';
  divVistaPrevia.style.marginTop = '2%';
  divVistaPrevia.id="vistapr"+y;
  divVistaPrevia.textContent = 'Vista previa:';

  var divVispr = document.createElement('div');
  divVispr.className = 'visp';
  divVispr.id = 'visprr' + y;

  inp = document.createElement('input');
  inp.type = 'text';
  inp.name = 'elemento' + y;
  inp.value='video';
  inp.id = 'elementoo' + y;
  inp.style.display="none"
  var nuevot = document.createElement('div');
  nuevot.className = 'quitarel';
  nuevot.id='quitarell'+y;
  nuevot.setAttribute('onclick', 'borrelm(' + y + ')');
  nuevot.textContent='X Remover elemento';
  agregs.appendChild(inp);
  agregs.appendChild(nuevot);
  agregs.appendChild(nuevoInput);
  agregs.appendChild(divVistaPrevia);
  agregs.appendChild(divVispr);
  nuevel.value=y;
}
function borrelm(y)
{
  elem=document.getElementById('elementoo'+y)
  if(elem.value=="video")
  {
    nomvi=document.getElementById('vidi'+y);
    nomvi.remove();
    visp=document.getElementById('visprr'+y);
    visp.remove();
    vistp=document.getElementById('vistapr'+y);
    vistp.remove();
    qui=document.getElementById('quitarell'+y);
    qui.remove();
    elem.value='quitado';
  }
  if(elem.value=="foto")
  {
    nomvi=document.getElementById('foton'+y);
    nomvi.remove();
    visp=document.getElementById('visprr'+y);
    visp.remove();
    vistp=document.getElementById('vistapr'+y);
    vistp.remove();
    qui=document.getElementById('quitarell'+y);
    qui.remove();
    elem.value='quitado';
  }
  if(elem.value=="texto")
  {
    nomvi=document.getElementById('contni'+y);
    nomvi.remove();
    qui=document.getElementById('quitarell'+y);
    qui.remove();
    elem.value='quitado';
  }
}
function agre()
{
  agrel.style.display="flex";
  agrega1.style.display="block";
  agrega.style.display="none";
}
function agre1()
{
  agrel.style.display="none";
  agrega1.style.display="none";
  agrega.style.display="block"
}
function videoo(event,y)
{
  caig= document.getElementById('cig'+y);
    caig.value="cambiado";
  var vispr = document.getElementById('visprr' + y);
var leer = new FileReader();
leer.onload = function() {
  if (leer.readyState == 2) {
    vispr.style.marginBottom="20%";
    vispr.innerHTML = '<video width="320" height="240" controls><source src="' + leer.result + '" type="video/mp4">Tu navegador no admite el elemento de video.</video>';
  }
};

leer.readAsDataURL(event.target.files[0]);
}
function imagenn(event,y){ 
    caig= document.getElementById('cig'+y);
    caig.value="cambiado";
     vispr= document.getElementById('visprr'+y);
     leer=new FileReader()    
     leer.onload=()=>{  
      if(leer.readyState==2){   
     vispr.style.background='url('+leer.result+')'                
     vispr.style.backgroundSize='contain'          
     vispr.style.backgroundRepeat='no-repeat' 
    }      
  }        
  leer.readAsDataURL(event.target.files[0]);
}
function textar(y)
{
  caig= document.getElementById('cig'+y);
    caig.value="cambiado";
  textarea = document.getElementById('contni'+y);
  textarea.style.height = 'auto'; 
  textarea.style.height = textarea.scrollHeight + 'px';
}
        function cambfe()
{
  fe=document.getElementById('fec');
  fechaa=fe.value;
  fecha = new Date(fechaa);
 var dia = fecha.getUTCDate();
 var mes = fecha.getUTCMonth()+1;
 var ano = fecha.getUTCFullYear();

  if(dia<10)
    dia='0'+dia;
  if(mes<10)
    mes='0'+mes;
  document.getElementById('fes').value=dia+"-"+mes+"-"+ano;
}
 function imagen(event)
    {
      vispr2.style.display="none";
      solic2.style.display="none";
      solic.style.display="block";
      const archivo = foton.files[0];
       img = new Image();
       img.src = URL.createObjectURL(archivo);
img.onload = function() {
     width = this.width;
    height = this.height;
    tres=width/3
    dos=height/2
    diferencia=tres-dos
    if(diferencia>0)
    {
      vispr= document.getElementById('vispr');
        leer=new FileReader()
        leer.onload=()=>{
            if(leer.readyState==2){
                vispr.style.background="url("+leer.result+")"
                vispr.style.backgroundSize="contain"
                vispr.style.backgroundRepeat="no-repeat"
            }
        }
        leer.readAsDataURL(event.target.files[0]);
      }
      else
      {
        foton.value="";
        aviso=document.getElementById('aviso')
        rayialerti=document.getElementById('rayialerti')
        equis=document.getElementById('equis')
        transpar=document.getElementById('transpar')
        letravi=document.getElementById('letravi')
        aviso.style.display="block";
        rayialerti.style.display="block";
        equis.style.display="block";
        transpar.style.display="block";
        letravi.style.display="block";
        letravi.innerHTML="La imagen de portada debe estar en formato 3x2, por ejemplo una imagen 900x600 px"
      }
    }
    }
contenid.addEventListener('input', () => {
  textarea = document.getElementById('contenid');
  textarea.style.height = 'auto'; 
  textarea.style.height = textarea.scrollHeight + 'px';
});
function quitaviso()
{
  aviso.style.display="none";
  rayialerti.style.display="none";
  equis.style.display="none";
  transpar.style.display="none";
  letravi.style.display="none";
}
function quitaviso2()
{
  aviso=document.getElementById('aviso')
        rayialerti=document.getElementById('rayialerti')
        equis=document.getElementById('equis')
        transpar=document.getElementById('transpar')
        letravi=document.getElementById('letravi')
  aviso.style.display="none";
  rayialerti2.style.display="none";
  equis.style.display="none";
  transpar.style.display="none";
  letravi2.style.display="none";
}
		function botolo()
{
    y8.style.display="none";
    t8.style.display="none";
}


	</script>
  </body>
</html>