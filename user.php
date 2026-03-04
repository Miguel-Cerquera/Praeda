<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praeda</title>
<link rel="shortcut icon" href="logri.png">
</head>
<?php
if(isset($_REQUEST['usuario']))
{
  if($_REQUEST['usuario']=="messi"||$_REQUEST['usuario']=="Messi"||$_REQUEST['usuario']=="adm2"||$_REQUEST['usuario']=="adm3"||$_REQUEST['usuario']=="adm4")
  {
    header("location:admin.php?adm=".$_REQUEST['usuario']."");
  }
  if(isset($_GET['avc']))
  {
      if($_GET['avc']==1)
      {
      echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Bienvenid@ ".$_REQUEST['usuario']."</div><div id='equis'onclick='quitaviso()'>X</div>";
      }
  }       
  if(isset($_POST['i1']))
  {
    $viej=$_REQUEST['usuario'];
    $nom=$_POST['nombrec'];
    $con=$_POST['contrac'];
    $conexion=new mysqli("localhost","root","","grad");
$sql="SELECT * FROM usuas WHERE nombre='$viej'";
$resultado=$conexion->query($sql);
$dato=$resultado->fetch_assoc();
    if(!empty($dato))
    {
      if($con)
      {
        $sql="UPDATE usuas SET contra='$con' WHERE nombre='$viej'";
      $ejecutar=mysqli_query($conexion,$sql);
      echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Contraseña cambiada correctamente</div><div id='equis'onclick='quitaviso()'>X</div>";
      }
      if($nom)
      {
        $conexion=new mysqli("localhost","root","","grad");
        $sql="SELECT * FROM usuas WHERE nombre='$nom'";
        $resultado=$conexion->query($sql);
        $dato=$resultado->fetch_assoc();
        if($dato)
        {
          echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>El nombre de usuario '".$nom."' ya esta siendo utilizado.</div><div id='equis'onclick='quitaviso()'>X</div>";
        }
        else
        {
           $sql="UPDATE usuas SET nombre='$nom' WHERE nombre='$viej'";
      $ejecutar=mysqli_query($conexion,$sql);
      header("location:user.php?usuario=".$nom."");
        }
      }
      }
    }
  }
  
?>
<style>
  @font-face {
font-family: “letra”;
src: url(EB.otf);
}
  @font-face {
font-family: “wazi”;
src: url(NotoSerif-Bold.ttf);
}
body {
  background-color: #EEEEEE   ;
  color: #02254a;
}

#mspb
{
  position:absolute;
  display:flex;
  width:100%;
}
 #letravi
  {
    z-index:1002;
    position:fixed;
    font-size:270%;
    font-family:“letra”;
    color:black;
    width:30%;
    top:47%;
    left:40%;
    
  }
#aviso
{
z-index: 1000;
position: fixed;
		width: 33.8%;
		top: 34%;
    font-family:“letra”;
		left: 33.8%;
		height: 40%;
    background:white;
		border: black solid 3px;
}
#transpar
{
  z-index: 1000;
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
      		font-size: 350%;
          color:black;
      		left: 64.5%;
      		z-index: 1002;
      		top: 27%;
          cursor:pointer;
}
#cosequis
{
  position: fixed;
  width:6%;
  height:8%;
      		left: 64%;
      		z-index: 1002;
      		top: 11%;
          cursor: pointer;
}
@keyframes apartacho1
{
  0%{
        position: absolute;     
top:55%;
left: 42%;
      }
      10%{
        position: absolute;     
top:55%;
left: 40%;
      }
      20%{
          position: absolute;     
top:55%;
left: 38%;
      }
      30%{
            position: absolute;     
top:55%;
left: 36%;
      }
      40%{
           position: absolute;     
top:55%;
left: 34%;
      }
      50%{
        position: absolute;     
top:55%;
left: 32%;
      }
      60%{
            position: absolute;     
top:55%;
left:30%;
      }
      70%{
            position: absolute;     
top:55%;
left: 28%;
      }
      80%{
           position: absolute;     
top:55%;
left: 26%;
      }
      100%{
           position: absolute;     
top:55%;
left: 24%;
      }
        }

        @keyframes desliza
    { 
      0%{left: 6%;}
      10%{left: 8%;}
      20%{left: 10%;}
      30%{left: 12%;}
      40%{left: 14%;}
      50%{left: 16%;}
      60%{left:18%;}
      70%{left: 20%;}
      80%{left: 22%;}
      100%{left: 24%;}
        }

#rayialerti{
  z-index:1001;
  position: fixed;
      		height: 8%;
      		width: 33.8%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
      		left: 33.8%;
      		top: 27%;
      		border: black solid 3px;
          }
          .baner{
  position: fixed;
  z-index: 999;
  top:0%;
  left:0%;
  width:100%;
  height: 100px;
  background-color:white;
}
.logc
    {
      position: absolute;
      width: 12%;
      height:90%;
      left:45%;
      top: 5%;
   } 
   .ruedx
    {
      position: absolute;
      width: 8%;
      height:50%;
      left:88%;
      top: 22%;
      cursor:pointer;
   } 
   .boto1 {

position: absolute;
text-decoration: none;
top:19%;
font-family: “letra”;
left:48%;
color:#044769;
padding: 12px 24px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 125%;
cursor: pointer;
}

.boto1:hover {
transition: all 0.4s;
text-decoration: none;
color:#81BEB5;
}

.boto1:hover::after {
content: '';
display: block;
height: 3px;
background-color:#81BEB5;
margin-top: 5px;
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
@import 'https://fonts.googleapis.com/css?family=Rubik+One';




.button3::after, .button3::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.button3 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 45%;
  left: 64%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;

}
.button3::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
.button3::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
.button3:active {
  margin-left: 10px;
  margin-top: 10px;
}
.button3:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.button3:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.button3:hover {
background-color:#81BEB5;
  text-decoration: none;

  cursor: pointer;
    display: inline;
    
}


.button4::after, .button4::before {
  position: absolute;
  content: "";
  transition: all 0.6s;
}

.button4 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  top: 45%;
  border-radius:8px;
  left: 78%;
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
    display: inline;
    
}
#cosonfiguracion
{
  z-index: 1000;
  position:fixed;
  width:40%;
  height:80%;
  left:30%;
  top:10%;
  background:white;
  border-radius:12px;
}
#y1
{
  position:absolute;
  top:25%;
  left:24%;
width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 2px solid;
 color: #044769;
 font-family:“letra”;
 text-align: center;
 font-size: 170%;
 display:none;
}
#y4
{
  position:absolute;
  top:60%;
  left:24%;
width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 2px solid;
 color: #044769;
 font-family:“letra”;
 text-align: center;
 font-size: 170%;
 display:none;
}
.button7::after, .button7::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}
.boto3 {

position: absolute;
text-decoration: none;
top: 21%;
left:7%;
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
.button7 {
  padding: 5px 10px;
  color:white;
  filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  top: 82%;
  left: 50%;
  z-index: 9;
  transform: translate(-50%, -50%);
  vertical-align: middle;
  font-size: 2vw;
  transition: all 0.5s;
  font-family:“letra”;
  background-color: #044769;
  border:none;
  cursor: pointer;
}
.button7::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: white;
}
.button7::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: white;
}
.button7:active {
  margin-left: 10px;
  margin-top: 10px;
}
.button7:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.button7:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
#camnom
{
  position:absolute;
  font-family:“letra”;
  font-size:250%;
  top:10%;
  left:34%;
  width: 49%;
  color:black;
  cursor:pointer;
}
#camcon
{
  position:absolute;
  font-family:“letra”;
  font-size:250%;
  top:45%;
  left:30%;
width: 49%;
  color:black;
  cursor:pointer;
}
#mancha1
{
  position:absolute;
  width:12%;
  height:50%;
  left:26.5%;
  top:26%;
}
#mancha2
{
  position:absolute;
  width:17%;
  height:10%;
  left:53%;
  top:25%;
}
#mancha3
{
  position:absolute;
  width:17%;
  height:10%;
  left:10%;
  top:25%;
}
.container {
			position: absolute;
      text-align:justify;
			top: 35%;
      left:35%;
			width: 30%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3); 
		}

		.form-group {
			margin-bottom: 5%;
		}
		label {
			display: block;
			margin-bottom: 2%;
			font-weight: bold;
		}
		input[type="submit"] {
			background-color:#02254a;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 15%;
			cursor: pointer;
      transition:0.7s;
		}
		input[type="submit"]:hover {
			background-color: #EEECE8;
		}
    #rechaz
{
  position :absolute;
  left:56%;
  top:26%;
}
#rechazz
{
  position :absolute;
  left:11%;
  top:26%;
}
#solis
{
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    width: 42%;
    text-decoration: none;
    top: 40%;
    left: 54%;
    align-items: center;
    flex-direction: row;
}  
#misn
{
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    width: 42%;
    text-decoration: none;
    top: 40%;
    left: 6%;
    align-items: center;
    flex-direction: row;
} 
.repor
{
  display:flex;
  flex-direction: row;
  width:100%;
}
.solicitudes
{
  display:flex;
  cursor:pointer;
  text-decoration:none;
  width:45%;
  margin-left:1%;
  margin-top:2%;
  border:1px solid black;
  flex-direction:row;
  align-items:center;  
}
.ver{
    padding-left:5%;
width:30%;
height:10%;
}
.titus
{
  display:flex;
  flex-direction:row;
  flex-wrap:wrap;
  width:90%;
  margin-top:1%;
  font-size:90%;
  color:black;
  text-align:center;
  font-weight:bold;
}
.ttl
{
overflow:hidden;
text-overflow: ellipsis;
margin-left:5%;
  width:90%;
  height:100%;
  align-items:center;
}
.fech
{
  font-weight: normal;
  margin:0%;
  height:10%;
  margin-left:5%;
  width:100%;
  font-size:100%;
  color:#255D86;
  align-items:start;
  text-align:left;
}
.ttl1
{
overflow:hidden;
text-overflow: ellipsis;
margin-left:5%;
  width:90%;
  height:60%;
  align-items:center;
}
.fech1
{
  font-weight: normal;
  margin:0%;
  height:10%;
  margin-left:5%;
  width:70%;
  font-size:100%;
  color:#255D86;
  align-items:start;
  text-align:left;
}
.stats
{
  display:flex;
  flex-direction:column;
  width:45%;
  font-size:100%;
  color:black;
  font-family:“wazi”;
  text-align:left;
  font-weight:bold;
}

.califs
{
  height:20%;
  align-items:center;
}
.vists
{
  margin:0%;
  height:50%;
}
.ttl
{
  overflow:hidden;
text-overflow: ellipsis;
  height:100%;
  width:100%;
  align-items:center;
}
.fech
{
  margin:0%;
  height:10%;
  font-size:100%;
  color:#02254a;
  align-items:end;
  text-align:right;
}
.boto {
    position: absolute;
  text-decoration: none;
  top: 20%;
  left:10%;
  color: white;
   font-family: “letra”;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 200%;
  cursor: pointer;

}

.boto:hover {

  text-decoration: none;
   transition: all 0.4s;
  color:#81BEB5;
  cursor: pointer;
    display: inline;
    
}

.boto:hover::after {
  content: '';
  display: block;
  height: 3px;
  background-color: #81BEB5;
  margin-top: 5px;
}
.imgg1
        {
            position: absolute;
            top: 29%;
            height:45%;
            width:16%;
            left: 6%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
            z-index:-5;
           
        }
        .noticias
{
  display:flex;
  cursor:pointer;
  text-decoration:none;
  align-items:center;
  border:1px black solid;
  height:10%;
  width:55%;
  margin-left:1%;
  margin-top:2%;
  flex-direction:column;
}
#mspb
{
  display:flex;
  flex-direction:row;
  flex-wrap: wrap;

}
@media(orientation:portrait)
   {
#gnrl
{
  display:flex;
  flex-direction:column;
}
    #letravi
  {
    z-index:1003;
    font-family: “letra”;
    position:fixed;
    font-size:270%;
    color:black;
    width:70%;
    top:42%;
    left:15%;   
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

#rayialerti{
  z-index:1003;
  position: fixed;
          height: 7%;
          width: 80%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 8%;
          top: 30%;
          border: black solid 3px;
          }
#reenvi
{
  display:flex;
  width:100%;
}
    #misn
{
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    text-decoration: none;
    top: 25%;
    left: 1%;
    align-items: center;
    flex-direction: row;
} 
.stats
{
  width:60%;
}
#rechaz
{
  top:15%;
  color:#044769;
  margin-bottom:10%;
}
#rechazz
{
  left:0%;
  top:15%;
  color:#044769;
  margin-bottom:10%;
}
#solis
{
  left:59%;
  top:25%;
  width:35%;
}
.solicitudes
{
  width:100%;
}
.taq1
        {
          display:none;
          top:102%;
          left:0%;
          position: absolute;
          width:100% ; 
          opacity:0.5;
          color: #044769;
          height:170% ;
          background-color:white;
           box-shadow: 0 -5px 20px -5px ;
          
          z-index:12;
}
.barra
        {
           position: absolute;
      width: 15%;
      height:60%;
      left:5%;
      top: 20%;
       background: url(awo.png); 
        background-size: contain;
            background-repeat:no-repeat;
        }
          .barra1
        {
          display:none;
           position: absolute;
      width: 15%;
      height:60%;
      left:5%;
      top: 20%;
       background: url(awo.png); 
        background-size: contain;
            background-repeat:no-repeat;
        }
        .imgg1
        {
          display:none;
        }
        #mancha1
        {
          display:none;
        }
        #mancha3
        {
          display:none;
        }
        .boto 
      {
        display:none;
        z-index:1000;
        color:black;
        position:fixed;
        left:10%;
        top:14%;
      }
      .boto2
      {
        display:none;
        z-index:1000;
        color:black;
        position:fixed;
        top:14%;
        left:58%;
      }
      .button4 {
        display:none;
  position: fixed;
  top: 26%;
  z-index:1000;
  width:30%;
  left: 75%;
  font-size: 180%;
}
.button3 {
  display:none;
  position: fixed;
  top: 26%;
  z-index:1000;
  left: 22%;
  font-size: 180%;
}
.ruedx
{
left:82%;
width:12%;
}
.logc
{
  left:42%;
  width:20%;
}
.container
{
  display:none;
}

#mancha2
{
  display:none;
}
#cosonfiguracion
{
  left:5%;
  width:90%;
  height:50%;
}
#cosequis
{
  left:82%;
  width:12%;
}
#camnom
{
  left:25%;
  
  width:70%;
}
#camcon
{
  left:20%;
  width:70%;
}
#y6
{
  top:85%;
  font-size:180%;
}
  }
    </style>
<body>
  <div id="nombre"></div>
<div class="baner">
<div class="barra"id="ba1" onclick="b1()">
          </div>
            <div class="barra1" id="ba2" onclick="b2()" ></div>
           <div class="taq1" id="taq1"></div>

<div class="imgg1"></div>
<a href="index.php?usuario=<?php echo $_GET['usuario'];?>"class="boto"id="boto">Inicio</a>
  <img src="etse2.png" id="mancha1">
  <a href="explora.php?usuario=<?php echo $_REQUEST['usuario'];?>" class="boto2"id="boto2">Explorar</a>
  </img>
  <a href="#"><img src="logri.png"  alt="imagen1"  onclick="botolo()" class="logc"></a>
          <a class="button4" href="index.php"id="r4">Cerrar sesion</a>
        <a class="button3" href="crear.php?usuario=<?php echo $_REQUEST['usuario'];?>" nam="r3" id="r3">Crear</a>
        <img src="rueda.png"  alt="imagen1"  onclick="cambios()" class="ruedx">
        </div> 
        <form action="user.php?usuario=<?php echo $_REQUEST['usuario'];?>"method="POST"id="cosonfiguracion"style="display:none;">
        <div id="camnom"onclick="cambionom()">Cambiar Nombre</div>
        <div id="camcon"onclick="cambiocon()">Cambiar Contraseña</div>
<input type="text" id="y1" name="nombrec" placeholder="Nombre Nuevo">
<input type="text" class="bo2" name="contrac" id="y4" placeholder="Contraseña Nueva">
 <input type="submit"class="button7"name="i1"id="y6"value="Cambiar"style="display:none">
 <img src="equi.png" id="cosequis" onclick="equiashor()"></img>
        </form>
        <div class="container"id="contain">
		<h2>Subir o crear archivo</h2>
		<form action="#" method="post" enctype="multipart/form-data">
		<div class="form-group">
		<label for="opcion">Selecciona una opción:</label>
		<select name="opcion" id="opcion">
		<option value="subir">Subir archivo</option>
		<option value="crear">Crear archivo</option>
		</select>
		
		</div>
		<div class="form-group">
		<label for="archivo">Archivo:</label>
		<input type="file" id="archivo" name="archivo">
		</div>
		<div class="form-group">
		<input type="submit" value="Enviar">
		</div>
		</form>
  </div>
  <div id="gnrl">
             <?php
             $usu=$_GET['usuario'];
             $conexion=new mysqli("localhost","root","","grad");
             $sql="SELECT * FROM notics WHERE estado='acept' AND usuario='$usu'";
             $resultado=$conexion->query($sql);
             $dato1=$resultado->fetch_assoc();
             $sql="SELECT * FROM notics WHERE estado='renvu' AND usuario='$usu'";
             $resultado=$conexion->query($sql);
             $dato=$resultado->fetch_assoc();
             if($dato)
             {
              ?>
                  <img src="etse2.png" id="mancha2">
    <a href="#" class="boto3" id="rechaz">Correcciones</a>
    <div id="solis">
              <?php if($dato1)
              {?>
                <script>contain.style.display="none";</script>  
                <?php
              }
              else
              {?>
              <script>contain.style.left="10%";</script>  
              <?php } 
              $sql="SELECT * FROM notics WHERE estado='renvu' AND usuario='$usu'";
             $resultado=$conexion->query($sql);
             while ($dato=$resultado->fetch_assoc()) {
                     ?>
                 <a href="correcs.php?not=<?php echo $dato['titulo']; ?>&usuario=<?php echo $dato['usuario']; ?>"class="solicitudes">
                     <div class="ver">Corregir</div>
                     <?php
                echo "<div class='titus'><p class='fech1'>".$dato['fecha']."</p><p class='ttl1'>".$dato['titulo']."</p></div></a>";
             }
            }
            ?>
                         </div>

            <?php
            $usu=$_GET['usuario'];
            $conexion=new mysqli("localhost","root","","grad");
            $sql="SELECT * FROM notics WHERE estado='renvu' AND usuario='$usu'";
            $resultado=$conexion->query($sql);
            $dato1=$resultado->fetch_assoc();
            $sql="SELECT * FROM notics WHERE estado='acept' AND usuario='$usu'";
            $resultado=$conexion->query($sql);
            $dato=$resultado->fetch_assoc();
            $n2=$dato['titulo'];
            if($dato)
            {
             ?>
                 <img src="etse2.png" id="mancha3">
   <a href="#" class="boto3" id="rechazz">Mis publicaciones</a>
   <div id="misn"><?php if($dato1)
              {?>
                <script>contain.style.display="none";</script>  
                <?php
              }
              else
              {?>
              <script>contain.style.left="52%";</script>  
              <?php } 
             $sql="SELECT * FROM notics WHERE estado='acept' AND usuario='$usu'";
            $resultado=$conexion->query($sql);
            while ($dato=$resultado->fetch_assoc()) {
              $fo=$dato['portada'];   ?>
    <div class="repor">
    <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>&pgu=1"class="noticias">
        <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
        <?php
        if($dato['calificaciones']==0)
        {echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><div class='stats'><p class='califs'>Publicación sin calificaciones.<br><br><br><br><br><br><br><br><br></p>";
        }
        else
        {echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><div class='stats'><p class='califs'>".$dato['procal']."<img src='estrella.png'width='38px'height='20px'><br><br><br><br><br><br><br></p>";
        }     
        if($dato['visitas']==0)
        {echo "<p class='vists'>Publicación sin visitas.</p></div></div>";
        }
        else
        {echo "<p class='vists'>".$dato['visitas']."<img src='ojo.png'width='35px'height='18px'></p></div></div>";
        }      
            }
           }?>
</div>
    <script>
      var select = document.getElementById("opcion");
		select.addEventListener("change", function() {
      var url = new URL(window.location.href);
var variable = url.searchParams.get('usuario');
			var opcionSeleccionada = select.options[select.selectedIndex].value;
			if (opcionSeleccionada === "crear") {
				window.location.href = "crear.php?usuario="+variable;
			}
		});
    function b1()
{
taq1.style.display="block";  
boto.style.display="block";   
r3.style.display="block";  
r4.style.display="block"; 
  boto2.style.display="block"; 
   ba1.style.display="none";
   ba2.style.display="block";
}
function b2()
{
taq1.style.display="none";    
r3.style.display="none";  
r4.style.display="none"; 
  boto.style.display="none";  
  boto2.style.display="none"; 
  ba2.style.display="none";
   ba1.style.display="block";
}
      function tratra()
      {
        
        cosonfiguracion.style.display="none";
        aviso.style.display="none";
  rayialerti.style.display="none";
  equis.style.display="none";
  transpar.style.display="none";
  letravi.style.display="none";
      }
      function cambionom()
      {
        camnom.innerHTML="Nombre";
        camnom.style.left="44%";
        y1.style.display="block";
        y6.style.display="block";
      }
      function cambiocon()
      {
        camcon.innerHTML="Contraseña";
        camcon.style.left="39%";
        y4.style.display="block";
        y6.style.display="block";
      }
      function cambios()
      {
        cosonfiguracion.style.display="block";
        transpar.style.display="block";
        
      }
      function equiashor()
      {
        cosonfiguracion.style.display="none";
        camcon.style.left="30%";
        camnom.style.left="34%";
        camnom.innerHTML="Cambiar nombre";
        camcon.innerHTML="Cambiar contraseña";
        y4.style.display="none";
        y6.style.display="none";
        y1.style.display="none";
        transpar.style.display="none"
      }
        function quitaviso()
{
  aviso.style.display="none";
  rayialerti.style.display="none";
  equis.style.display="none";
  transpar.style.display="none";
  letravi.style.display="none";
  urlParams = new URLSearchParams(window.location.search);
  if(urlParams.has('avc'))
  {
    verific=urlParams.get('avc');
    if(verific==1)
    {
      usu=urlParams.get('usuario');
      location.assign("user.php?usuario="+usu);
    }
  }
}
        </script>
</body>
</html>
