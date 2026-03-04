<?php
        if(isset($_GET['avc']))
        {
            if($_GET['avc']==1)
            {
            echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Gracias! Calificacion enviada</div><div id='equis'onclick='quitaviso()'>X</div>";
            }
        }         
            if(isset($_POST['i1']))
            {
                if(isset($_POST['cal']))
                {
                    if($_POST['cal']!="")
                    {
                $titul=$_GET['not'];
    $aut=$_GET['autor'];
    $conexion=new mysqli("localhost","root","","grad");
    $sql="SELECT * FROM notics WHERE titulo='$titul' AND usuario='$aut'";
    $resultado=$conexion->query($sql);
    $dato=$resultado->fetch_assoc();
    $vist=$dato['visitas'];
      $uv=$vist-1;
      $sql="UPDATE notics SET visitas='$uv' WHERE titulo='$titul' AND usuario='$aut'";
      $ejecutar=mysqli_query($conexion,$sql);
                $tot=$dato['calto'];
                $calif=$_POST['cal'];
                $ncl=$dato['calificaciones'];
                $clt=$tot+$calif;
                $sumacl=$ncl+1;
                $nupr=$clt/$sumacl;
                echo $clt;
                $sql="UPDATE notics SET calificaciones='$sumacl',procal='$nupr',calto='$clt' WHERE titulo='$titul' AND usuario='$aut'";
                $ejecutar=mysqli_query($conexion,$sql);
                header("location:noticia.php?not=".$titul."&autor=".$aut."&usua=".$_GET['usua']."&avc=1");
            
                    }
                }
        }
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praeda</title>
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
    width:18%;
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
   .califica
   {
    height:30%;
    top:30%;
    padding-top:15%;
    padding-bottom:50%;
   }
   .estrellas
   {
    position:relative;
    background:url("estrella.png");
    left:5%;
    width:8%;
    height:4.5%;
    background-repeat:no-repeat;
    opacity:0.6;
    transition:0.5s;
   }
   .estrellas:hover
   {
    opacity:1;
    transition:0.5s;
   }
   #letravi
  {
    
font-family: “letra”;
    z-index:1002;
    position:fixed;
    font-size:270%;
    color:black;
    width:30%;
    top:52%;
    left:38%;   
  }
#aviso
{
  
font-family: “letra”;
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
  
font-family: “letra”;
  position: fixed;
          font-size: 50px;
          color:black;
          left: 64.5%;
          z-index: 1002;
          top: 40%;
}

#rayialerti{
  z-index:1002;
  position: fixed;
          height: 7%;
          width: 33.8%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 33.8%;
          top: 40%;
          border: black solid 3px;
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
#ojillo
{
  width:60%;
  height:70%;
}
#strll
{
  width:12%;
  height:30%;
}
#videou
   {
    padding-left:20%;
    padding-top:2%;
   }
   @media(orientation:portrait)
   {
    body
    {
      overflow-y:visible;
    }
    .cuadronoti
   {
    position:absolute;
    left:2%;
    width:95%;
    top:20%;
    border:1px solid black;
    background:white;
   }
   .dats 
{
  display:flex;
  flex-direction:row;
  width:92%;
  font-size:70%;
  color:black;
  font-weight:normal;
  padding-left:4%;
  text-align:center;
  align-items:center;
}
#strll
{
  width:18%;
  height:50%;
}
#ojillo
{
  width:100%;
  height:70%;
}
    .logc
    {
       position: absolute;
      width: 20%;
      height:86%;
      left:40%;
      top: 3%;
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
          .estrellas
   {
    position:relative;
    background:url("estrella.png");
    left:5%;
    width:15%;
    height:4.5%;
    background-repeat:no-repeat;
    opacity:0.6;
    transition:0.5s;
   }
   .buttonn {
  display: inline-block;
  position:absolute;
  z-index: 998;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  left: 20%;
font-family: “letra”;
  transform: translate(-50%, -50%);
  vertical-align: middle;
  text-decoration: none;
  font-size: 180%;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;

}
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
    <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="90%" height="25%" onmousemove="vistasf()">
    <?php
    echo "<div class='dats'><div class='escritor'>Hecho por: ".$dato['usuario']."</div><hr size='15px'color='black'style='height:25px;' /><div class='fech'>".$dato['fecha']."</div><hr size='15px'color='black'style='height:25px;' />";
    if($dato['calificaciones']==0)
    {
    echo "<div class='visitas'>".$dato['visitas']."   <img id='ojillo' src='ojo.png'></div><hr size='15px'color='black'style='height:25px;' /><div class='calif'>No hay calificaciones</div><hr size='15px'color='black'style='height:25px;' /><p class='catego'>".$dato['categoria']."</p></div>";
    }
    else
    {
      echo "<div class='visitas'>".$dato['visitas']."<img id='ojillo' src='ojo.png'></div><hr size='15px'color='black'style='height:25px;' /><div class='calif'>".$dato['procal']." <img id='strll' src='estrella.png'></div><hr size='15px'color='black'style='height:25px;' /><p class='catego'>".$dato['categoria']."</p></div>";
    }
  

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
            if(isset($_GET['usua']))
            {
            if(isset($_GET['pgu']))
            {
              ?>
              <div class="baner"><a href="user.php?usuario=<?php echo $_GET['usua'] ?>"><img src="logri.png"  alt="imagen1" class="logc"></a>
              <img src="etse2.png" id="mancha1"><a href="user.php?usuario=<?php echo $_GET['usua'] ?>" class="boto3">Volver</a>
            </div><?php 
            }
            else
            {
              ?>
            <div class="baner"><a href="explora.php?usuario=<?php echo $_GET['usua'] ?>"><img src="logri.png"  alt="imagen1" class="logc"></a>
            <img src="etse2.png" id="mancha1"><a href="explora.php?usuario=<?php echo $_GET['usua'] ?>" class="boto3">Volver</a>
            </div><?php 
                ?>
                <div class="califica"><div class="titus"style="color:black;">Como te parecio esta noticia?</div>
                    <img src="estrella.png" class="estrellas"id="est1"onclick="estc1()"onmousemove="estc11()"></img>
                    <img src="estrella.png" class="estrellas"id="est2"style="left:5%;"onclick="estc2()"onmousemove="estc21()"></img>
                    <img src="estrella.png" class="estrellas"id="est3"style="left:5%;"onclick="estc3()"onmousemove="estc31()"></img>
                    <img src="estrella.png" class="estrellas"id="est4"style="left:5%;"onclick="estc4()"onmousemove="estc41()"></img>
                    <img src="estrella.png" class="estrellas"id="est5"style="left:5%;"onclick="estc5()"onmousemove="estc51()"></img>
                    <form method="POST"action="noticia.php?not=<?php echo $_GET['not'] ?>&autor=<?php echo $_GET['autor'] ?>&usua=<?php echo $_GET['usua'] ?>">
                    <input type="number"id="calificaciong"name="cal"style="display:none;"><br><br><br>
                     <input type="submit"class="buttonn"name="i1"id="y6"value="Calificar"></form>
                </div>
            </div>
            <?php
            
            
          }
        }
            else
            {
              if(isset($_GET['prd']))
              {
                ?>
                <div class="baner"><a href="explora.php"><img src="logri.png"  alt="imagen1" class="logc"></a>
                <img src="etse2.png" id="mancha1"><a href="crpe.php?adm=<?php echo $_GET['prd'] ?>" class="boto3">Volver</a>
                <?php
              }
              else
              {
                if(isset($_GET['prdc']))
              {
                if($_GET['prdc']=='')
                {
                  ?>
                  <div class="baner"><a href="explora.php"><img src="logri.png"  alt="imagen1" class="logc"></a>
                  <img src="etse2.png" id="mancha1"><a href="lavz.php" class="boto3">Volver</a>
                  <?php
                }
                else
                {
                ?>
                <div class="baner"><a href="explora.php"><img src="logri.png"  alt="imagen1" class="logc"></a>
                <img src="etse2.png" id="mancha1"><a href="lavz.php?usuario=<?php echo $_GET['prdc'] ?>" class="boto3">Volver</a>
                <?php
                }
              }
              else
              {
              ?>
                <div class="baner"><a href="explora.php"><img src="logri.png"  alt="imagen1" class="logc"></a>
                <img src="etse2.png" id="mancha1"><a href="explora.php" class="boto3">Volver</a>
                <?php
              }
            }
          }
            ?>
            
        <script>
          vst=0;
          function vistasf()
          {
            if(vst==0)
            {
              console.log(vst);
              <?php
              $titul=$_GET['not'];
              $aut=$_GET['autor'];
              $conexion=new mysqli("localhost","root","","grad");
              $sql="SELECT * FROM notics WHERE titulo='$titul' AND usuario='$aut'";
              $resultado=$conexion->query($sql);
              $dato=$resultado->fetch_assoc();
                    if(isset($_GET['usua']))
                    {
                    if($_GET['usua']==$_GET['autor']||isset($_GET['avc']))
                    {
                    }
                    else
                    {
                    $vist=$dato['visitas'];
                    $uv=$vist+1;
                    $sql="UPDATE notics SET visitas='$uv' WHERE titulo='$titul' AND usuario='$aut'";
                    $ejecutar=mysqli_query($conexion,$sql);
                    }
                  }
                  else
                  {
                    $vist=$dato['visitas'];
                    $uv=$vist+1;
                    $sql="UPDATE notics SET visitas='$uv' WHERE titulo='$titul' AND usuario='$aut'";
                    $ejecutar=mysqli_query($conexion,$sql);
                  }
              ?>
              vst=vst+1;
            }
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
      usu=urlParams.get('usua');
      noti=urlParams.get('not');
      aut=urlParams.get('autor');
      location.assign("noticia.php?not="+noti+"&autor="+aut+"&usua="+usu);
    }
  }
}
            function estc1()
            {
                est1.style.opacity="1";
                est2.style.opacity="0.6";
                est3.style.opacity="0.6";
                est4.style.opacity="0.6";
                est5.style.opacity="0.6";
                calificaciong.value=1;
                est1.onmousemove="null";
                est2.onmousemove="null";
                est3.onmousemove="null";
                est4.onmousemove="null";
                est5.onmousemove="null";
            }
            function estc2()
            {
                est1.style.opacity="1";
                est2.style.opacity="1";
                est3.style.opacity="0.6";
                est4.style.opacity="0.6";
                est5.style.opacity="0.6";
                calificaciong.value=2;
                est1.onmousemove="null";
                est2.onmousemove="null";
                est3.onmousemove="null";
                est4.onmousemove="null";
                est5.onmousemove="null";
            }
            function estc3()
            {
                est1.style.opacity="1";
                est2.style.opacity="1";
                est3.style.opacity="1";
                est4.style.opacity="0.6";
                est5.style.opacity="0.6";
                calificaciong.value=3;
                est1.onmousemove="null";
                est2.onmousemove="null";
                est3.onmousemove="null";
                est4.onmousemove="null";
                est5.onmousemove="null";
            }
            function estc4()
            {
                est1.style.opacity="1";
                est2.style.opacity="1";
                est3.style.opacity="1";
                est4.style.opacity="1";
                est5.style.opacity="0.6";
                calificaciong.value=4;
                est1.onmousemove="null";
                est2.onmousemove="null";
                est3.onmousemove="null";
                est4.onmousemove="null";
                est5.onmousemove="null";
            }
            function estc5()
            {
                est1.style.opacity="1";
                est2.style.opacity="1";
                est3.style.opacity="1";
                est4.style.opacity="1";
                est5.style.opacity="1";
                calificaciong.value=5;
                est1.onmousemove="null";
                est2.onmousemove="null";
                est3.onmousemove="null";
                est4.onmousemove="null";
                est5.onmousemove="null";
            }
            function estc11()
            {
                est1.style.opacity="0.8";
                est2.style.opacity="0.6";
                est3.style.opacity="0.6";
                est4.style.opacity="0.6";
                est5.style.opacity="0.6";
            }
            function estc21()
            {
                est1.style.opacity="0.8";
                est2.style.opacity="0.8";
                est3.style.opacity="0.6";
                est4.style.opacity="0.6";
                est5.style.opacity="0.6";
            }
            function estc31()
            {
                est1.style.opacity="0.8";
                est2.style.opacity="0.8";
                est3.style.opacity="0.8";
                est4.style.opacity="0.6";
                est5.style.opacity="0.6";
            }
            function estc41()
            {
                est1.style.opacity="0.8";
                est2.style.opacity="0.8";
                est3.style.opacity="0.8";
                est4.style.opacity="0.8";
                est5.style.opacity="0.6";
            }
            function estc51()
            {
                est1.style.opacity="0.8";
                est2.style.opacity="0.8";
                est3.style.opacity="0.8";
                est4.style.opacity="0.8";
                est5.style.opacity="0.8";
            }
        </script>
  </div>
</body>
</html>