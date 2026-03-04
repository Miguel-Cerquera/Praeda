<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praeda</title>
    <link rel="shortcut icon" href="logri.png">
</head>
<style>
    		@font-face {
font-family: “letra”;
src: url(EB.otf);
}
@font-face {
font-family: “wazi”;
src: url(NotoSerif-Bold.ttf);
}	
.baner{
  position: fixed;
  z-index: 999;
  top:0%;
  left:0%;
  width:100%;
  height: 108px;
  background-color:white;
  box-shadow:0 0 10px 5px;
}

.logc
    {
       position: absolute;
      width: 12%;
      height:94%;
      left:43%;
      top: 3%;
   } 
   #mancha1
{
  position:absolute;
  width:12%;
  height:10%;
  left:6%;
  top:20%;
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
color:white;
filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
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
#solis
{
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    width: 42%;
    text-decoration: none;
    top: 32%;
    left: 2%;
    align-items: center;
    flex-direction: row;
}  
#rechaz
{
  position :absolute;
  left:56%;
}
#mancha2
{
  position:absolute;
  width:24%;
  height:10%;
  left:53%;
  top:20%;
}
#solisre
{
    position: absolute;
    display: flex;
    flex-wrap: wrap;
    width: 42%;
    text-decoration: none;
    top: 32%;
    left: 52%;
    align-items: center;
    flex-direction: row;
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
  background:white;
}
.ver{
    padding-left:5%;
width:30%;
height:10%;
}
.titus
{
  width:70%;
  font-size:120%;
  color:black;
  font-family:“wazi”;
  word-wrap: break-word;
  text-align:center;
  font-weight:bold;
}
.boto {
    position: absolute;
  text-decoration: none;
  top: 20%;
  left:10%;
  color: white;
   font-family: “letra”;
  padding: 0.88% 1.56%;
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
        #mancha3
{
  position:absolute;
  width:12%;
  height:50%;
  left:26.5%;
  top:26%;
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
.repor
{
  display:flex;
  flex-direction: row;
  align-items:center;
  width:100%;
}
#aprbs
{
  margin-left:2%;
font-size:180%;
font-family: “wazi”;
}
</style>
<body>
           <div class="baner">  <a href="#"><img src="logri.png"  alt="imagen1"  onclick="botolo()" class="logc"></a>
       <div class="cua" ame="r7" id="r7"></div> 
       <div class="imgg1"></div>
<a href="index.php?usuario=<?php echo $_GET['adm'];?>"class="boto"id="boto">Inicio</a>
  <img src="etse2.png" id="mancha3">
  <a href="explora.php?usuario=<?php echo $_REQUEST['adm'];?>" class="boto2">Explorar</a>
  <a class="button4" href="crpe.php?adm=<?php echo $_GET['adm'];?>"style="left:68%;">Crear periodico</a>
	   <a class="button4" href="index.php">Cerrar sesion</a>
       </div> 
       	   <img src="etse2.png" id="mancha1">
           <a href="#" class="boto3">Solicitudes</a>
           <div id="solis">
<?php
$conexion=new mysqli("localhost","root","","grad");
$sql="SELECT * FROM notics WHERE estado='revi'";
$resultado=$conexion->query($sql);
while ($dato=$resultado->fetch_assoc()) {
  $titul=$dato['titulo'];
  $sql2="SELECT * FROM admisns WHERE titulo='$titul'";
$resultado2=$conexion->query($sql2);
$dato2=$resultado2->fetch_assoc();
$i=1;
$qta=0;
$chl=0;
$admi=$_GET['adm'];
while($i<=4)
{
  if($dato2['admn'.$i]==$admi)
  {
    $qta=1;
  }
  if($dato2['admn'.$i]!="")
  {
    $chl=$chl+1;
  }
  $i=$i+1;
}
if($qta==1)
{}
else
{
        ?>
                <div class="repor">
    <a href="solicitudes.php?not=<?php echo $dato['titulo']; ?>&autor=<?php echo $dato['usuario']; ?>&adm=<?php echo $_GET['adm']; ?>"class="solicitudes">
        <div class="ver">Revisar</div>
        <?php
   echo "<div class='titus'>".$dato['titulo']."</div></a><div id='aprbs'>".$chl."<img src='chl.png'width='24px'height='24px'></div></div>";
}
}?>
</div>
<img src="etse2.png" id="mancha2">
<a href="#" class="boto3" id="rechaz">Solicitudes Reenviadas</a>
           <div id="solisre">
<?php
$conexion=new mysqli("localhost","root","","grad");
$sql="SELECT * FROM notics WHERE estado='renva'";
$resultado=$conexion->query($sql);
while ($dato=$resultado->fetch_assoc()) {
  $titul=$dato['titulo'];
  $sql2="SELECT * FROM admisns WHERE titulo='$titul'";
$resultado2=$conexion->query($sql2);
$dato2=$resultado2->fetch_assoc();
$i=1;
$qta=0;
$chl=0;
$admi=$_GET['adm'];
while($i<=4)
{
  if($dato2['admn'.$i]==$admi)
  {
    $qta=1;
  }
  if($dato2['admn'.$i]!="")
  {
    $chl=$chl+1;
  }
  $i=$i+1;
}
if($qta==1)
{}
else
{

        ?>
        <div class="repor">
    <a href="solicitudes.php?not=<?php echo $dato['titulo']; ?>&autor=<?php echo $dato['usuario']; ?>&adm=<?php echo $_GET['adm']; ?>"class="solicitudes">
        <div class="ver">Revisar</div>
        <?php
   echo "<div class='titus'>".$dato['titulo']."</div></a><div id='aprbs'>".$chl."<img src='chl.png'width='24px'height='24px'></div></div>";
}
}?>
</div>
</body>
</html>