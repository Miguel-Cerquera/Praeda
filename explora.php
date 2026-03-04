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
<?php
if(isset($_POST['i1']))
{
$n=$_POST['nombrei'];
$c=$_POST['contrai'];
if($c&$n)
{
    $conexion=new mysqli("localhost","root","","grad");
$sql="SELECT * FROM usuas WHERE nombre='$n'";
$resultado=$conexion->query($sql);
$dato=$resultado->fetch_assoc();

if($dato)
{

  if($dato['contra']==$c)
  {
    if($dato['nombre']=="Messi"||$dato['nombre']=="adm2"||$dato['nombre']=="adm3"||$dato['nombre']=="adm4")
    {
      header("location:explora.php?usuario=".$n."");
    }
    else
    {
   header("location:explora.php?usuario=".$n."&avc=1");
    }
  }
 else
{
    echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>La contraseña es incorrecta</div><div id='equis'onclick='quitaviso()'>X</div>";
}
}
else
{
  echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>El usuario no existe</div><div id='equis'onclick='quitaviso()'>X</div>";
}
}
}
if(isset($_GET['avc']))
{
  if($_GET['avc']==0)
  {
    echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Sesion cerrada correctamente</div><div id='equis'onclick='quitaviso()'>X</div>";
  }
  if($_GET['avc']==1)
  {
    echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Sesion iniciada correctamente</div><div id='equis'onclick='quitaviso()'>X</div>";
  }
}

?>
<style>
  @import url('https://fonts.googleapis.com/css?family=Rubik+One');
    @font-face {
font-family: “wazi”;
src: url(NotoSerif-Bold.ttf);
}
@font-face {
  font-family:“roboto”;
  src: url(Roboto-Bold.ttf);
}
@font-face {
font-family: “letra”;
src: url(EB.otf);
}
@font-face {
font-family: “letra2”;
src: url(OpenSans.ttf);
}
.crecuen {
  position: absolute;
  text-decoration: none;
  top: 68%;
  left:24%;
  color: #044769;
   font-family: “letra”;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 160%;
  cursor: pointer;

}
.crecuen:hover {
  text-decoration: none;
   transition: all 0.4s;
  color:#81BEB5;
  cursor: pointer;
    display: inline;
}
.crecuen:hover::after {
  content: '';
  display: block;
  height: 3px;
  background-color: #81BEB5;
  margin-top: 5px;
}
  #letravi
  {
    z-index:1003;
    font-family: “letra”;
    position:fixed;
    font-size:270%;
    color:black;
    width:30%;
    top:52%;
    left:38%;   
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
          z-index: 1004;
          top: 40%;
}
#equisi
{
          font-family: Arial;
          font-size: 50px;
          color:#044769;
          margin-left:1%;
          z-index: 1004;
          top: 40%;
}
#rayialerti{
  z-index:1003;
  position: fixed;
          height: 7%;
          width: 33.8%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 33.8%;
          top: 40%;
          border: black solid 3px;
          }
#y9
{
  position: absolute;
  background: url("palin.png"); width: 36%; height: 74%; left: 12%; top: 24%; border-radius: 5%;display:none;
}
#t9
{
  position: absolute; 
  background:url("madro.png");
  width: 36%; height: 74%; left: 49.8%; top: 24%; border-radius: 5%;display:none;
}
.taq
        {
          display: block;
           z-index: 9;
          position: absolute;
          font-style: italic;

          top:55%;
          left:12%;
        font-size: 25px;
  color: #044769;
  text-align: center;
  margin-bottom: 20px;

    font-family: “letra”;
   animation:apartacho3 3s;
}
.asdim
{
         position: absolute;
            top: 22%;
            height:36%;
            width:46%;
            left: 1%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
          z-index: 2;
            max-height:200%;
}

@keyframes apartacho3
    { 
      0%{
    opacity:0;
      }
      10%{
       opacity:0.1;
      }
      20%{
          opacity:0.2;
      }
      30%{
          opacity:0.3;
      }
      40%{
          opacity:0.4;
      }
      50%{
        opacity:0.5;
      }
      60%{
          opacity:0.6;
      }
      70%{
          opacity:0.7;
      }
      80%{
           opacity:0.8;
      }
      100%{
          opacity:1;
          
      }
        }
.titu
{
  position: absolute;
  top:3vh;
  left: 8.5vw;
  font-family: “letra”;
  font-size: 4vw;
}
.h1 {
  color: white;
}

.n1
  {
position: absolute;
    top: 2%;
    left:30%;
    width: 300px;
    height: 50px;
    border:solid 4px white;
    border-radius: 20px;
    color:#50D95A;
    background-color:black;
    animation: apartacho1 60s;
    font-size: 35px;
    text-align: center;
    justify-content: center;
    font-family:cursive ;
    transition: 0.5s;
    color:white;filter: drop-shadow(0 0 2px white) drop-shadow(0 0 5px white) contrast(2) brightness(2);transition:0.5s;
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
  top: 7%;
  border-radius:8px;
  left: 90%;
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
.button5::after, .button5::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}
.button5 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  top: 7%;
  left: 93%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 3vw;
  transition: all 0.5s;
  background-color: black;
  border: 3px solid white;
}
.button5::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: white;
}
.button5::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: white;
}
.button5:active {
  margin-left: 10px;
  margin-top: 10px;
}
.button5:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.button5:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.boto1 {

  position: absolute;
  text-decoration: none;
  top:19%;
 font-family: “letra”;
  left:42%;
  color:white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
 font-size: 200%;
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
  left:61%;
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

         #apart1
        {
          scroll-behavior: smooth;
            position:absolute; 
            top: 100vh;
            transition: all 1s ease;
            color:white;
           left: 0vw;
            width: 200vw;
            height: 100vh;
        }
          #bodyy
        {
          position:absolute; 
           width: 100vw;
            height: 50vw;

                     top:0%;
          left:0%;
          background-color:white;

        }
        .bas1
        {
          position:absolute;
         color:white;
         width:500px;
         height:500px;
        }
        #ti1
        {
            position: absolute;
            top:15vh;
            left: 35vw;
            color:#044769;
             font-family: “letra”;
             font-weight:bolder;
             font-size: 4.5vw;
             z-index:1;
        }
        #te1
        {
            position: absolute;
            width: 80vw;
            height: 300vh;
            top:27vh;
             color:black;
              text-align: justify;
            left: 10vw;
            font-family: “letra”; 
            font-size: 2vw;
            
        }
        #numer1
        {
          position: absolute;
            width: 80vw;
            height: 300vh;
            top:50vh;
             color:black;
              text-align: justify;
            left: 4vw;
            font-family:;
            font-size: 8vw;
            
        }
        #titi1
        {
           position: absolute;
            width: 80vw;
            height: 300vh;
            top:45% ;
             color:white;
              text-align: justify;
            left: 9vw;
            font-family: “letra”;
            font-size: 3.5vw;
            
        }
          #imga1
        {
            position: absolute;
            top: 45%;
            height:8%;
            width:12%;
            left: 2%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
        }
        #tete1
        {
           position: absolute;
            width: 25vw;
            height: 300vh;
            top:54vh;
             color:black;
              text-align: justify;
            left: 9vw;
            font-family: “letra”;
            font-size: 2vw;
            
        }
                #img1
        {
            position: absolute;
            top: 28vw;
            height:80vw;
            width:30vw;
            left: 3vw;
            background: url(etse.png);
            background-size: contain;
            background-repeat:no-repeat;
        }
        #numer2
        {
          position: absolute;
            width: 80vw;
            height: 300vh;
            top:50vh;
             color:black;
              text-align: justify;
            left: 35vw;
            font-family:;
            font-size: 8vw;
            
        }
        #titi2
        {
           position: absolute;
            width: 80vw;
            height: 300vh;
            top:45vh;
             color:white;
              text-align: justify;
            left: 40vw;
          font-family: “letra”;
            font-size: 3.5vw;
            
        }
          #imga2
        {
            position: absolute;
            top: 45%;
             height:8%;
            width:12%;
            left: 17%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
        }
          #tete2
        {
           position: absolute;
            width: 25vw;
            height: 300vh;
            top:54vh;
             color:black;
              text-align: justify;
            left: 40vw;
            font-family: “letra”;
            font-size: 2vw;
            
        }
          #img2
        {
            position: absolute;
            top: 28vw;
            height:80vw;
            width:30vw;
            left: 36vw;
            background: url(etse.png);
            background-size: contain;
            background-repeat:no-repeat;
        }
        #numer3
        {
          position: absolute;
            width: 80vw;
            height: 300vh;
            top:50vh;
             color:black;
              text-align: justify;
            left: 66vw;
            font-family:;
            font-size: 8vw;
            
        }
        #titi3
        {
           position: absolute;
            width: 80vw;
            height: 300vh;
            top:45vh;
             color:white;
              text-align: justify;
            left: 71vw;
            z-index:300;
            font-family: “letra”;
            font-size: 3.5vw;
            
        }
         #tete3     
        {
           position: absolute;
            width: 25vw;
            height: 300vh;
            top:54vh;
             color:black;
              text-align: justify;
            left: 71vw;
           font-family: “letra”;
            font-size: 2vw;
            
        }
         #img3
        {
            position: absolute;
            top: 28vw;
            height:80vw;
            width:30vw;
            left: 68vw;
            background: url(etse.png);
            background-size: contain;
            background-repeat:no-repeat;
        }
          #imga3
        {
            position: absolute;
            top: 45%;
            height:8%;
            width:12%;
            left: 34%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
        }
        
         #apart2
        { 
           scroll-behavior: smooth;
            position:absolute; 
            top: 210vh;
            transition: all 1s ease;
            color:white;
            left: 8vw;
            width: 88vw;
            height: 90vh;
        }
        #ti2
        {
            position: absolute;
            top:18vh;
            left: 30vw;
            color:#044769;
            font-family: “letra”;
            font-weight:bolder;
             font-size: 3vw;
        }
        #te2
        {
            position: absolute;
            width: 38vw;
            height: 30vh;
            top:27vh;
             color:black;
            left: 22vw;
        font-family: “letra”;
            text-align:center;
            font-size: 1.8vw;
            
        }
        #im2
        {
            position: absolute;
            top: 15vh;
            height: 60vh;
            width: 25vw;
            left:-6vw;
            background: url('chipuco.png');
            background-size: contain;
            background-repeat:no-repeat;
        }
          
            #titulo {
                width: 100%;
                position: absolute;
                padding: 0px;
                margin: 0px auto;
                text-align: center;
                font-size: 27px;
                color: rgba(255, 255, 255, 1);
                
                z-index: 9999;
                text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
                     -1px 0px 2px rgba(255, 255, 255, 0);
            }
            
      .cuadr1{
        display: none;
position: absolute;
top:21%;
left: 35%;
width:300px;
height:450px;
background-color:#EEECE8 ;
z-index: 8;
 padding: 3px 10px;
  border: #044769 8px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
      }
      .bo1{
        display: none;
        position: absolute;
         
top:39%;
left: 36%;
width:160px;
height:40px;
background-color:#EEECE8 ;
z-index: 9;
font-family:"letra";
font-size: 2vw;
font-family: “letra”;
 padding: 3px 10px;
  border: #044769 8px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
      }

      .button7::after, .button7::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.button7 {
  display: none;
  
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  top: 90%;
  left: 48%;
  z-index: 9;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.5s;
  background-color: #044769;
  border: 3px solid white;

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
.titulo
{
  display: none;
  z-index: 9;
   font-family: “letra”;
  text-decoration: none;
  font-size: 3vw;
  position: absolute;
top:27%;
left: 41%;
}
 .cuadr2{
        display: none;
position: absolute;
top:21%;
left: 35%;
width:300px;
height:450px;
background-color:#EEECE8 ;
z-index: 8;
 padding: 3px 10px;
  border: #044769 8px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
      }
      .bos1{
        display: none;
        position: absolute;
top:39%;
left: 36%;
width:160px;
height:40px;
background-color:#EEECE8 ;
z-index: 9;
font-family:"letra";
font-size: 2vw;
font-family: “letra”;
 padding: 3px 10px;
  border: #044769 8px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
      }
        .bos2{
display: none;
        position: absolute;
top:59%;
left: 45%;
width:160px;
height:40px;
background-color:#EEECE8 ;
z-index: 9;
font-family:"letra";
font-size: 2vw;
font-family: “letra”;
 padding: 3px 10px;
  border: #044769 8px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
      }
      .button8::after, .button8::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.button8 {
  display: none;
  
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  top: 82%;
  left: 48%;
  z-index: 9;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.5s;
  background-color: #044769;
  border: 3px solid white;

}
.button8::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: white;
}
.button8::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: white;
}
.button8:active {
  margin-left: 10px;
  margin-top: 10px;
}
.button8:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.button8:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.titulo1
{
  display: none;
  z-index: 9;
   font-family: “letra”;
  text-decoration: none;
  font-size: 3vw;
  position: absolute;
top:27%;
left: 41%;
}
@keyframes apartacho9
    { 
      0%{
        position: absolute;     
        left: -5vw;
      }
      10%{
        position: absolute;
        left: -4vw;
      }
      20%{
          position: absolute;    
          left: -3vw;
      }
      30%{
            position: absolute; 
            left: -2vw;
      }
      40%{
           position: absolute;
           left: -1vw;
      }
      50%{
        position: absolute; 
        left: 0vw;
      }
      60%{
        position: absolute; 
        left:1vw;
      }
      70%{
        position: absolute;  
        left: 2vw;
      }
      80%{
           position: absolute;  
           left: 3vw;
      }
      90%
      {
        position: absolute;  
           left: 4vw;
      }
      100%{
           position: absolute;
           left: 5vw;
      }
        }
@keyframes apartacho2
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

        @keyframes apartacho1
    { 
      0%{
        position: absolute;     
top:20%;
left: 6%;
      }
      10%{
        position: absolute;     
top:20%;
left: 8%;
      }
      20%{
          position: absolute;     
top:20%;
left: 10%;
      }
      30%{
            position: absolute;     
top:20%;
left: 12%;
      }
      40%{
           position: absolute;     
top:20%;
left: 14%;
      }
      50%{
        position: absolute;     
top:20%;
left: 16%;
      }
      60%{
            position: absolute;     
top:20%;
left:18%;
      }
      70%{
            position: absolute;     
top:20%;
left: 20%;
      }
      80%{
           position: absolute;     
top:20%;
left: 22%;
      }
      100%{
           position: absolute;     
top:20%;
left: 24%;
      }
        }
        @keyframes apartacho4
    { 
      0%{
    opacity:0;
      }
      10%{
       opacity:0.1;
      }
      20%{
          opacity:0.1;
      }
      30%{
          opacity:0.1;
      }
      40%{
          opacity:0.1;
      }
      50%{
        opacity:0.3;
      }
      60%{
          opacity:0.5;
      }
      70%{
          opacity:0.7;
      }
      80%{
           opacity:0.9;
      }
      100%{
          opacity:1;
          
      }
        }

          @keyframes apartacho5
    { 
      0%{
        position: absolute;     
top:20vh;
  left: -8vw;
      }
      10%{
        position: absolute;     
top:20vh;
            left: -7vw;
      }
      20%{
          position: absolute;     
top:20vh;
            left: -6vw;
      }
      30%{
            position: absolute;     
top:20vh;
            left: -5vw;
      }
      40%{
           position: absolute;     
top:20vh;
            left: -4vw;
      }
      50%{
        position: absolute;     
top:20vh;
            left: -3vw;
      }
      60%{
            position: absolute;     
top:20vh;
            left: -2vw;
      }
      70%{
            position: absolute;     
top:20vh;
            left: -1vw;
      }
      80%{
           position: absolute;     
top:20vh;
            left: 0vw;
      }
      100%{
           position: absolute;     
top:20vh;
            left: 1vw;
      }
        }
       
        .im{
          position:absolute;
          top:9%;
          left:42%;
          width:58%;
          height:92%;
   animation:apartacho3 1s;

        }
        .wazo
        {    
           z-index: 9;
          position: absolute;
          top:27%;
          left:10%;
          width:30%;
        font-size: 38px;
  color:white;
  text-align: center;
  margin-bottom: 30px;
  transition: all 0.3s ease-in-out;
  font-family: “letra”;
   animation:apartacho3 1s;
}

wazo:hover {
  color: #f00;
  transform: scale(1.1);
}

.wazo2
        {    
           z-index: 9;
          position: absolute;
          top:5%;
          left:30%;
        font-size: 225%;
  color: #044769;
  text-align: center;
  margin-bottom: 20px;
  transition: all 0.3s ease-in-out;
   font-family: 'Geologica',serif;
}

wazo2:hover {
  color: #f00;
  transform: scale(1.1);
}


.wazo3
        {    
           z-index: 9;
          position: absolute;
          top:40%;
          left:35%;
        font-size: 225%;
  color: #044769;
  text-align: center;
  margin-bottom: 20px;
  transition: all 0.3s ease-in-out;
   font-family: 'Geologica',serif;
}

wazo3:hover {
  color: #f00;
  transform: scale(1.1);
}


.todo{
  display: block;
}
.aviso{
  display: none;
  position: absolute;
  font-family: “letra”;
    width: 33.8%;
    top: 40%;
    left: 33.8%;
    height: 40%;
    border: black solid 3px;
}
.volbt{
  display: block;
  position: absolute;
  color: white;
  background-color: #DC7633;
  width: 10%;  
  height: 8%;
  font-size: 240%;
  border-radius: 20px;
  top: 55%;
  left: 35%;
  z-index: 500;
   display: none;
}
.regisbt{
  display: block;
    position: absolute;
  color: white;
  background-color: #DC7633;
  width: 13%;  
  height: 8%;
  font-size: 240%;
  border-radius: 20px;
  top: 55%;
  left: 53%;
  z-index: 500;
   display: none;
}
.ingrebt{
  display: block;
    position: absolute;
  color: white;
  background-color: #DC7633;
  width: 10%;  
  height: 8%;
  font-size: 240%;
  border-radius: 20px;
  top: 65%;
  left: 43.5%;
  z-index: 500;
   display: none;
}
.oculto{
  display: none;
}


.ford
{
position: absolute;
top: 16%;
left: 10%;
width: 80%;
height: 85%;
background: white;
border-radius: 10px;
 display: none;

}
#y7
{
  position: absolute;
top: 16%;
left: 10%;
width: 80%;
height: 85%;
background: white;
border-radius: 10px;
 display: none;
}
.head
{
position: fixed;
top: 20%;
left: 38%;
width: 26%;
height: 62%;
background: white;
border-radius: 10px;
border: solid #044769   10px;
color: white;
 display: none;
 position: absolute;
  z-index:9999;
}

#y8
{
  position: fixed;
  z-index:9999;
width: 26%;
height: 62%;
background: white;
border-radius: 10px;
border: solid #044769   10px;
color: white;
 display: none;
}

#t1
{
  position:absolute;
  top:20%;
  left:24%;
width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 5px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
 color: #044769;
 text-align: center;
 font-size: 120%;
}
#y1
{
  position:absolute;
  top:20%;
  left:24%;
width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 5px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
 color: #044769;
 text-align: center;
 font-size: 120%;
}
#t2
{
width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 5px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
 color: orange;
 text-align: center;
 font-size: 120%;
}

#t3
{
  position:absolute;
  top:50%;
  left:24%;
width: 49%;
width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 5px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
 color: orange;
 text-align: center;
 font-size: 120%;
}

#t4
{
  position:absolute;
  top:55%;
  left:24%;
width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 5px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
 color: #044769;
 text-align: center;
 font-size: 120%;
}
#y4
{
  position:absolute;
  top:55%;
  left:24%;
width: 49%;
height:5%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 5px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
 color: #044769;
 text-align: center;
 font-size: 120%;
}
#t5
{
 width: 49%;
  padding: 7px 10px;
 border-radius: 5px;
  border: #044769 5px solid;
  border-top-left-radius: 20px;
  border-bottom-right-radius: 20px;
 color: orange;
 text-align: center;
 font-size: 120%;
}


.button9::after, .button9::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.button9 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
 
  top:83%;
  left: 52%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;
    z-index: 500;

}
.button9::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: #EEECE8;
    z-index: 500;
}
.button9::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
    z-index: 500;
}
.button9:active {
  margin-left: 10px;
  margin-top: 10px;
    z-index: 500;
}
.button9:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
    z-index: 500;
}
.button9:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
    z-index: 500;
}
.button9:hover {
background-color:#81BEB5;
  text-decoration: none;

  cursor: pointer;
    display: inline;
      z-index: 500;
    
}
.boton{
  position: absolute;
  height: 50%;
width: 50%;
  top: 50%;
  left: -65%;
  z-index: 30;
   display: none;
}
.volver{
  position: absolute;

  top: 90%;
  left: -59%; 
   display: none;
}
#result
{
  position:absolute;
  top:0%;
  left:0%;
  width:100%;
  height:100%;
}
.buton3::after, .buton3::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.buton3 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 30%;
  left: 5%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;
  opacity: 1;

}
.buton3::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
.buton3::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
.buton3:active {
  margin-left: 10px;
  margin-top: 10px;
}
.buton3:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.buton3:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.buton3:hover {
background-color:#81BEB5;
  text-decoration: none;

  cursor: pointer;
    display: inline;
    border: solid 2px #81BEB5;
}
.buton2::after, .buton2::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
  opacity:1;
}

.buton2 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 52%;
  left: 5%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;
  opacity:1;

}
.buton2::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
.buton2::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
.buton2:active {
  margin-left: 10px;
  margin-top: 10px;
}
.buton2:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.buton2:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.buton2:hover {
background-color:#81BEB5;
  text-decoration: none;

  cursor: pointer;
    display: inline;
    border: solid 2px #81BEB5;
}

.buton1::after, .buton1::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.buton1 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 74%;
  left: 5%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;


}
.buton1::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 8px;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
.buton1::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
.buton1:active {
  margin-left: 10px;
  margin-top: 10px;
}
.buton1:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
.buton1:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
.buton1:hover {
background-color:#81BEB5;
  text-decoration: none;

  cursor: pointer;
    display: inline;
    border: solid 2px #81BEB5;
}


.ch{
  position:absolute;
  top:19%;
  left: -4%;
  width:220px;
  height:400px;
  border: solid 2px #044769;
  background-color:white;
  z-index:0;
   box-shadow: 10px 5px 10px #044769;
}
.ch1{
  position:absolute;
  top:19%;
  left: 30%;
  width:720px;
  height:400px;
  border: solid 2px #044769;
  background-color:white;
  z-index:0;
    box-shadow: 10px 5px 10px #044769;
}
  .wazq
        {
          

         position: absolute;
            top: -20%;
            height:500%;

            width:50%;
            left: 30%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
         
           
        }
  .contenedor {
  margin: auto;
  display: table;
   position: absolute;
  left:22%;
  
}

h1 { 
 font-family: “letra”;
    position: relative;
    float: left;
    left:2vw;
    background: white;
    color: #044769;
    font-size: 3.2em;
}

h1 span {
    position:absolute;
    right:0;
    width:0;
    background:white;
    border-left: 1px solid #000;
     
}
.contenedor2 {
  margin: auto;
  display: none;
  position: absolute;
  left:30%;
  
}

h2 { 
 font-family: “letra”;
    position: relative;
    float: left;
    left:2vw;
    background: white;
    color: #044769;
    font-size: 3.2em;
}

h2 span {
    position:absolute;
    right:0;
    width:0;
    background:white;
    border-left: 1px solid #000;
     
   
}
.contenedor3 {
  margin: auto;
  display: none;
  position: absolute;
  left:22%;
  
}

h3 {
     font-family: “letra”;
    position: relative;
    float: left;
    left:2vw;
    background: white;
    color: #044769;
    font-size: 3.2em;
}

h3 span {
    position:absolute;
    right:0;
    width:0;
    background:white;
    border-left: 1px solid #000;
     
   
}
.contenedor4{
  margin: auto;
  display: none;
  position: absolute;
  left:22%;
}
h4 {
     font-family: “letra”;
    position: relative;
    float: left;
    left:2vw;
    background: white;
    color: #044769;
    font-size: 3.2em;
}

h4 span {
    position:absolute;
    right:0;
    width:0;
    background:white;
    border-left: 1px solid #000;
     
   
}

@keyframes escribir {
    from { width: 100% }
    to { width:0 }
}
.contenidog
{
  position:absolute;
  font-size:1.5vw;
  top:20vh;
  width:600px;
  height: 300px;
  left:-7vw;
  color:black;
   text-align: justify;
}
.contenidog1
{
  position:absolute;
  font-size:1.5vw;
  top:20vh;
  width:600px;
  height: 300px;
  left:-12vw;
  color:black;
   text-align: justify;
}
    body
    {
        background:url("fondex.png");
        overflow-x:hidden;
        color: #02254a;
    }

.buttonn {
  position: absolute;
  text-decoration: underline;
  border:none;
  background:transparent;
  top: 35%;
  left:28%;
  color:#044769;
   font-family: “letra2”;
  text-align: center;
  text-decoration: none;
  font-size: 100%;
  cursor: pointer;
  display: flex;
  z-index: 998;

}
.buttonn:hover {

text-decoration: none;
 transition: all 0.4s;
color:#81BEB5;
cursor: pointer;
  display: inline;
  
}

.buttonn:hover::after {
content: '';
display: block;
height: 3px;
background-color: #81BEB5;
margin-top: 5px;
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
      left:12%;
      top: 3%;
   } 
   .ray
    {
       position: absolute;
      width: 6%;
      height:54%;
      left:3%;
      top: 25%;
   } 
   .imgg1
        {
            position: absolute;
            top: 28%;
            height:40%;
            width:20%;
            left: 25%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
            z-index:-5;
           
        }
   .boto {
    position: absolute;
  text-decoration: none;
  top: 20%;
  left:28%;
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
.contenot
{
  position:absolute;
  display: flex;
  flex-wrap: wrap;
  width:98%;
  background:#F3EBE5 ;
  text-decoration:none;
  font-family:“letra2”;
  top:20%;
  left:1%;
  justify-content:center;
  align-items:center;
  flex-direction:row;
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
  width:45%;
  font-size:100%;
  color:#255D86;
  align-items:start;
  text-align:left;
}
.ctrs
{
  font-weight: normal;
  margin:0%;
  height:10%;
  margin-right:5%;
  width:45%;
  font-size:100%;
  color:#255D86;
  align-items:start;
  text-align:right;
}
.noticias
{
  display:flex;
  cursor:pointer;
  text-decoration:none;
  align-items:center;
  height:10%;
  width:30%;
  margin-left:1%;
  margin-top:2%;
  flex-direction:column;
}
#cuadctg
          {
            display:none;
            position:fixed;
            z-index: 10000;
            width:13%;
            height: 30%;
            background:white;
            text-decoration:none;
            top:26%;
            left:86%;
            flex-direction:column;
            border:solid 1px black;
            border-top:none;        
          }

          #cuadfil
          {
            display:flex;
            position:fixed;
            z-index: 998;
  width:100%;
  background:white;
  text-decoration:none;
  top:16%;
  left:0%;
  flex-direction:row;
          }
          #mnuev
          {
            left:6%;
          }
          #mant
          {
            left:26%;
          }
          #mca
          {
            left:46%;
          }
          #mvi
          {
            left:66%;
          }
          #ctgs
          {
            top:0%;
            left:86%;
            height:100%;
          }
          #ctgs:hover + #cuadctg
          {
            display:block;
            position:fixed;
            z-index: 10000;
            width:13%;
            height: 30%;
            background:white;
            text-decoration:none;
            top:26%;
            left:86%;
            flex-direction:column;
            border:solid 1px black;
            border-top:none;
            transition:1s;
          }
          #cuadctg:hover
          {
            display:block;
            position:fixed;
            z-index: 10000;
            width:13%;
            height: 55%;
            background:white;
            text-decoration:none;
            top:26%;
            left:86%;
            flex-direction:column;
            border:solid 1px black;
            border-top:none;
            transition:1s;
          }
          
          @keyframes despleg
          {
            10%{height:0%;}20%{height:2%;}30%{height:3%;}40%{height:4%;}50%{height:5%;}
            60%{height:6%;}70%{height:7%;}80%{height:8%;}90%{height:9%;}100%{height:10%;}
          }
          @keyframes despleg2
          {
            10%{height:9%;}20%{height:8%;}30%{height:7%;}40%{height:6%;}50%{height:5%;}
            60%{height:4%;}70%{height:3%;}80%{height:2%;}90%{height:1%;}100%{height:0%;}
          }
          #col
          {
            left:5%;
            top:0%;
          }
          #mun {left:5%;top:10%;
          }
          #pol {left:5%;top:20%;}
          #tec {left:5%;top:30%;
          }
          #eco {left:5%;top:40%;} 
          #dep {left:5%;top:50%;}
          #ent {left:5%;top:60%;}
          #arc {left:5%;top:70%}
          #aro{left:5%;top:80%;} 
          #dib {left:5%;top:90%;}
          .numers
          {
  cursor:pointer;
  text-decoration:none;
  align-items:center;
  justify-content:center;
  margin-left:35%;
          }
          .pgns
{
  position:absolute;
  display: flex;
  flex-wrap: wrap;
  font-family:“letra2”;
  width:100%;
  margin-top:5%;
  padding-bottom:10%;
  top:100%;
  left:1%;
  justify-content:center;
  flex-direction:row;
}
.pagns
{
  border:solid white 1px;
  width:3%;
  margin-left:2%;
  text-decoration:none;
  justify-content:center;
  align-items:center;
  font-size:150%;
  height:22%;
  cursor:pointer;
  background:#2172ad;
  color:white;
}
.pagns:hover
{
  background:white;
  color:#2172ad;
  border:solid #2172ad 1px;
  transition:0.7s;
}
#lvz
{
  left:79%;
}
#lvzz
{
  left:63%;
}
#pdu
{
  left:76%;
}
@media(orientation: portrait)
{
.button7 {
  font-size: 200%;
}
.button9
{
  font-size: 200%;
}
  .head
{
position: fixed;
top: 20%;
left: 8%;
width: 80%;
height: 62%;
background: white;
border-radius: 10px;
border: solid #044769   10px;
color: white;
 display: none;
 position: absolute;
  z-index:9999;
}
#y8
{
  position: fixed;
  z-index:9999;
width: 80%;
height: 62%;
background: white;
border-radius: 10px;
border: solid #044769   10px;
color: white;
 display: none;
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
  .boto {
    position: absolute;
  text-decoration: none;
  top: 28%;
  left:37%;
  color: #044769;
   font-family: “letra”;
  padding: 0.88% 1.56%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 180%;
  cursor: pointer;

}
.ray
    {
       position: absolute;
      width: 11%;
      height:50%;
      left:3%;
      top: 25%;
   } 
.logc
    {
       position: absolute;
      width: 18%;
      height:86%;
      left:18%;
      top: 3%;
   } 
   #mnuev
          {
            left:1%;
          }
          #mant
          {
            left:18%;
          }
          #mca
          {
            left:37%;
          }
          #mvi
          {
            left:56%;
          }
          #ctgs
          {
            top:0%;
            left:75%;
            height:100%;
          }
          
.imgg1
        {
            display:none;
        }
#lvz
{
  left:62%;
}
#lvzz
{
  top:11%;
  left:63%;
}

#pdu
{
  top:3%;
  left:63%;
}
#ctgs:hover + #cuadctg
          {
            display:block;
            position:fixed;
            z-index: 10000;
            width:100%;
            height: 46%;
            background:white;
            text-decoration:none;
            top:26%;
            left:72%;
            flex-direction:column;
            border:solid 1px black;
            border-top:none;
            transition:1s;
          }
          #cuadctg:hover
          {
            display:block;
            position:fixed;
            z-index: 10000;
            width:20%;
            height: 60%;
            background:white;
            text-decoration:none;
            top:26%;
            left:72%;
            flex-direction:column;
            border:solid 1px black;
            border-top:none;
            transition:1s;
          }
          #col
          {
            left:1%;
            top:0%;
          }
          #mun {left:1%;top:8%;
          }
          #pol {left:1%;top:16%;}
          #tec {left:1%;top:24%;
          }
          #eco {left:1%;top:32%;} 
          #dep {left:1%;top:40%;}
          #ent {left:1%;top:48%;}
          #arc {left:1%;top:56%}
          #aro{left:1%;top:70%;} 
          #dib {left:1%;top:90%;}
.buttonn {
  position: absolute;
  text-decoration: underline;
  border:none;
  background:transparent;
  top: 25%;
  left:28%;
  width:20%;
  white-space: pre-line;
  color:#044769;
   font-family: “letra2”;
  text-align: center;
  text-decoration: none;
  font-size: 80%;
  cursor: pointer;
  display: flex;
  z-index: 998;

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
  top: 7%;
  border-radius:8px;
  left: 84%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 120%;
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
.noticias
{
  display:flex;
  cursor:pointer;
  text-decoration:none;
  align-items:center;
  height:10%;
  width:45%;
  margin-left:1%;
  margin-top:2%;
  flex-direction:column;
}
hr
{
  display:none;
}
.pgns
{
  position:absolute;
  display: flex;
  flex-wrap: wrap;
  font-family:“letra2”;
  width:100%;
  margin-top:5%;
  padding-bottom:100%;
  top:120%;
  left:1%;
  justify-content:center;
  flex-direction:row;
}
.pagns
{
  border:solid white 1px;
  width:10%;
  margin-left:2%;
  text-decoration:none;
  justify-content:center;
  align-items:center;
  font-size:150%;
  height:22%;
  cursor:pointer;
  background:#2172ad;
  color:white;
}
.pagns:hover
{
  background:white;
  color:#2172ad;
  border:solid #2172ad 1px;
  transition:0.7s;
}
}
</style>
<body>

<div id="result"></div>
<?php

  ?>
  <form action="explora.php"method="POST"id="cuadfil">
  <div id="filtros"style="display:none;">
<input type="submit" name="nuevos"value="Mas nuevos"class="buttonn" id="mnuev">
<input type="submit" name="antig"value="Mas antiguos"class="buttonn"id="mant">
<input type="submit" name="mejcal"value="Mejor calificados"class="buttonn"id="mca">
<input type="submit" name="mvis"value="Mas vistos"class="buttonn"id="mvi">
<input type="submit"value="Categorias"class="buttonn"id="ctgs"disabled>
<div id="cuadctg"> 
  <input type="submit"class="buttonn"name="colo"value="Colombia"id="col">
  <input type="submit"class="buttonn"name="mund"value="Mundo"id="mun">
  <input type="submit"class="buttonn"name="poli"value="Política"id="pol">
  <input type="submit"class="buttonn"name="tecn"value="Tecnología"id="tec">
  <input type="submit"class="buttonn"name="econ"value="Economía"id="eco">
  <input type="submit"class="buttonn"name="depo"value="Deportes"id="dep">
  <input type="submit"class="buttonn"name="entr"value="Entretenimiento"id="ent">
  <input type="submit"class="buttonn"name="artc"value="Artículo científico"id="arc">
  <input type="submit"class="buttonn"name="arto"value="Artículo de opinión"id="aro">
  <input type="submit"class="buttonn"name="dibu"value="Dibujo"id="dib">
</div>
</div>
</form>
<a class="button4"id="lvz" href="lavz.php">La Voz</a>
<a class="button4" href="#" nam="r4" id="r4" onclick="f9()">Ingresar</a>
<div class="contenot" id="contnot">
<?php
  $conexion=new mysqli("localhost","root","","grad");
$sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept'";
$result = $conexion->query($sql);
    $row = $result->fetch_assoc();
    $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%"style="margin-top:5%;">
            <?php
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {
              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }
            }
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }
    ?>
    </div>
    <?php 
    if($_GET['ctg'])
    {
      if(isset($_GET['pg']))
      {
       $pgs=$_GET['pg'];
        ?><script>document.getElementById("contnot").remove();</script>
        <div class="contenot" id="contnot"> <?php
        $s=$pgs-1;
        $g=$s*6;
        $numero1=$numero-$g;
        if($_GET['ctg']==0){
          $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Dibujos'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?pg=".$o."&ctg=0'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }
          $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Dibujos' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==1){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo de opinión'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=1'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }
          $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo de opinión' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==2){
          $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo científico'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=2'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo científico' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==3){
          $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Entretenimiento'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=3'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Entretenimiento' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==4){
          $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Deportes'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=4'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Deportes' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==5){
          $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Economía'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=5'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Economía' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==6){
          $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Tecnología'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=6'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Tecnología' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==7){
          $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Política'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=7'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Política' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==8){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Colombia'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=8'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Colombia' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==9){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' categoria='Mundo'";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=9'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Mundo' LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==10){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id ASC";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=10'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id ASC LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==11){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id DESC";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=11'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id DESC LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==12){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY procal DESC";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=12'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY procal DESC LIMIT 6 OFFSET $g";}
        if($_GET['ctg']==13){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY visitas DESC";
          $result = $conexion->query($sql);
              $row = $result->fetch_assoc();
              $numero = $row["total"];
            $divi=$numero/6;
            $apr=ceil($divi);
            $o=1;
            ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
            while($o<=$apr)
            {
              echo "<a href='explora.php?pg=".$o."&ctg=13'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
              $o=$o+1;
              if($o>$apr)
              {
                echo "</div>";
              }
            }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY visitas DESC LIMIT 6 OFFSET $g";}
        $resultado=$conexion->query($sql);
        $i=0;
        while ($dato=$resultado->fetch_assoc()) {
          $fo=$dato['portada'];?>
            <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
                <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
                <?php
                $i=$i+1;
                if($i%3==0||$i==$numero1)
                {
                  if($i==3)
                  {
                  echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
                  }
                  else
                  {
                  echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
                  }
                }
                else
                {
           echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
                }       
      }

          ?></div> <?php
        
      }
    }
    else
    {

    if(isset($_GET['pg']))
    {
      ?><script>document.getElementById("contnot").remove();</script>
      <div class="contenot" id="contnot"> <?php
     $pgs=$_GET['pg'];
      $s=$pgs-1;
      $g=$s*6;
      $numero1=$numero-$g;
      $sql="SELECT * FROM notics WHERE estado='acept' LIMIT 6 OFFSET $g";
      $resultado=$conexion->query($sql);
      $i=0;
      while ($dato=$resultado->fetch_assoc()) {
        $fo=$dato['portada'];?>
          <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
              <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
              <?php
              $i=$i+1;
              if($i%3==0||$i==$numero1)
              {              if($i==3)
                {
                echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
                }
                else
                {
                echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
                }
              }
              else
              {
         echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
              }       
    }
     
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
        ?></div> <?php
    }
    else
     {
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
  }
    }
    if(isset($_POST['dibu']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Dibujos'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Dibujos' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {      
                      if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }
            }
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=0'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['arto']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo de opinión'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo de opinión' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=1'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['artc']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo científico'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo científico' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=2'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['entr']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Entretenimiento'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Entretenimiento' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=3'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['depo']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Deportes'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Deportes' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=4'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['econ']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Economía'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Economía' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=5'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['tecn']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Tecnología'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Tecnología' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=6'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['poli']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Política'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Política' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }               else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=7'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['colo']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Colombia'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Colombia' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }               else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=8'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['mund']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept'  AND categoria='Mundo'";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Mundo' LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }               else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=9'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['nuevos']))
    {?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id DESC";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id DESC LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php   
            $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }               else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=10'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['antig']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id ASC";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id ASC LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php          $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=11'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['mejcal']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY procal DESC";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY procal DESC LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php         $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }               else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }}
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=12'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    }
    if(isset($_POST['mvis']))
    {
      ?>
    <script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot">
    <?php
    $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY visitas DESC";
    $result = $conexion->query($sql);
        $row = $result->fetch_assoc();
        $numero = $row["total"];
    $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY visitas DESC LIMIT 6";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php         $i=$i+1;
            if($i%3==0||$i==$numero)
            {              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              } }
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }
      }?>
    </div><?php
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?pg=".$o."&ctg=13'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
    } 
?>
<div class="baner"id="bann">
<img src="rayas.png"class="ray"id="filtr"onclick="filtro1()">
<img src="rayas.png"class="ray"id="filtr2"onclick="filtro2()"style="display:none;">
  <a href="#"><img src="logri.png"  onclick="botolo()" alt="imagen1"class="logc"></a>

<div class="imgg1"></div>
<a href="index.php"class="boto"id="boto">Inicio</a>
</div>

  <div class="head" id="y8" > 
<div id="equisi"onclick="quitac()">X</div>
<form action="explora.php"method="POST"id="datosi">
  <a class="crecuen" onclick="f10()">Crear una cuenta</a>
<div class="wazo2"  id="g1">Usuario</div>
<input type="text" id="y1" name="nombrei" placeholder="Usuario"></input>
<div class="wazo3" id="g2">Clave</div>
<input type="password" class="bo2" name="contrai" id="y4" placeholder="Contraseña"></input>
 <input type="submit"class="button7"name="i1"id="y6"value="Iniciar"></input>
</form>
</div>
<div class="head" id="t8"> 
<div id="equisi"onclick="quitac()">X</div>
    <form method="POST" id="datosr">
          <div class="wazo2"  id="h1">Usuario</div>
           <input type="text"  name="nombrer" placeholder="Nombre" id="t1" class="nombreu">
          <div class="wazo3" id="h2">Clave</div>
          <input type="text" name="contrar" placeholder="Contraseña" id="t4">
          <button type="button" class="button9" id="t6" onclick="regi()">Registrar</button>
     </form> 
  </div> 
  <?php

  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  if(isset($_GET['usuario']))
  {?>
  <script>document.getElementById("r4").remove();
  document.getElementById("lvz").remove();
  document.getElementById("bann").remove();
  document.getElementById("contnot").remove();</script>
  <a class="button4" href="explora.php?avc=0">Cerrar sesion</a>
  <a class="button4"id="lvzz"href="lavz.php?usuario=<?php echo $_REQUEST['usuario'];?>">La Voz</a>
  <a class="button4"id="pdu" href="user.php?usuario=<?php echo $_REQUEST['usuario'];?>">Panel de usuario</a>
  <div class="baner">
  <img src="rayas.png"class="ray"id="filtr"onclick="filtro1()">
  <img src="rayas.png"class="ray"id="filtr2"onclick="filtro2()"style="display:none;">
  <a href="#"><img src="logri.png"  onclick="botolo()" alt="imagen1"class="logc"></a>
  <div class="imgg1"></div>
  <a href="index.php?usuario=<?php echo $_GET['usuario'];?>"class="boto"id="boto">Inicio</a>
  
  </div> 
  <div class="contenot" id="contnot">
  <?php
  $sql="SELECT * FROM notics WHERE estado='acept' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {              if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }
  ?>
  </div>
  <?php 
  if($_GET['ctg'])
  {
    if(isset($_GET['pg']))
    {
     $pgs=$_GET['pg'];
      ?><script>document.getElementById("contnot").remove();</script>
      <div class="contenot" id="contnot"> <?php
      $s=$pgs-1;
      $g=$s*6;
      $numero1=$numero-$g;
      if($_GET['ctg']==0){
        $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Dibujos'";
      $result = $conexion->query($sql);
          $row = $result->fetch_assoc();
          $numero = $row["total"];
        $divi=$numero/6;
        $apr=ceil($divi);
        $o=1;
        ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
        while($o<=$apr)
        {
          echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=0'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
          $o=$o+1;
          if($o>$apr)
          {
            echo "</div>";
          }
        }
        $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Dibujos' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==1){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo de opinión'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=1'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }
        $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo de opinión' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==2){
        $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo científico'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=2'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo científico' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==3){
        $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Entretenimiento'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=3'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Entretenimiento' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==4){
        $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Deportes'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=4'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Deportes' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==5){
        $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Economía'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=5'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Economía' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==6){
        $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Tecnología'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=6'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Tecnología' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==7){
        $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Política'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=7'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Política' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==8){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Colombia'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=8'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Colombia' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==9){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' categoria='Mundo'";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=9'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Mundo' LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==10){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id ASC";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=10'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id ASC LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==11){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id DESC";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=11'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id DESC LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==12){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY procal DESC";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=12'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY procal DESC LIMIT 6 OFFSET $g";}
      if($_GET['ctg']==13){ $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY visitas DESC";
        $result = $conexion->query($sql);
            $row = $result->fetch_assoc();
            $numero = $row["total"];
          $divi=$numero/6;
          $apr=ceil($divi);
          $o=1;
          ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
          while($o<=$apr)
          {
            echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=13'class='pagns'id='pagnss'><div class='numers'>".$o."</div></a>";
            $o=$o+1;
            if($o>$apr)
            {
              echo "</div>";
            }
          }$sql="SELECT * FROM notics WHERE estado='acept' ORDER BY visitas DESC LIMIT 6 OFFSET $g";}
      $resultado=$conexion->query($sql);
      $i=0;
      while ($dato=$resultado->fetch_assoc()) {
        $fo=$dato['portada'];?>
          <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
              <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
              <?php 
              $i=$i+1;
              if($i%3==0||$i==$numero1)
              { 
                if($i==3)
                {
                echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
                }
                else
                {
                echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
                }
              }
              else
              {
         echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
              }       
    }
        ?></div> <?php
    }
  }
  else
  {

  if(isset($_GET['pg']))
  {
   $pgs=$_GET['pg'];
    ?><script>document.getElementById("contnot").remove();</script>
    <div class="contenot" id="contnot"> <?php
    $s=$pgs-1;
    $g=$s*6;
    $numero1=$numero-$g;
    $sql="SELECT * FROM notics WHERE estado='acept' LIMIT 6 OFFSET $g";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
            <?php
            $i=$i+1;
            if($i%3==0||$i==$numero1)
            {
              if($i==3)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
              }  
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
              }
            }
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
            }       
  }
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
      ?></div> <?php
  }
  else
  {
    $divi=$numero/6;
    $apr=ceil($divi);
    $o=1;
    ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
    while($o<=$apr)
    {
      echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
     
      $o=$o+1;
      if($o>$apr)
      {
        echo "</div>";
      }
    }
  }
  }
  ?>
  <script>document.getElementById("cuadfil").remove();</script>
  <form action="explora.php?usuario=<?php echo $_GET['usuario'] ?>"method="POST"id="cuadfil">
  <div id="filtros" style="display:none;">
  <input type="submit" name="nuevos"value="Mas nuevos"class="buttonn" id="mnuev">
  <input type="submit" name="antig"value="Mas antiguos"class="buttonn"id="mant">
  <input type="submit" name="mejcal"value="Mejor calificados"class="buttonn"id="mca">
  <input type="submit" name="mvis"value="Mas vistos"class="buttonn"id="mvi">
  <input type="submit"value="Categorias"class="buttonn"id="ctgs"disabled>
  <div id="cuadctg"> 
    <input type="submit"class="buttonn"name="colo"value="Colombia"id="col">
    <input type="submit"class="buttonn"name="mund"value="Mundo"id="mun">
    <input type="submit"class="buttonn"name="poli"value="Política"id="pol">
    <input type="submit"class="buttonn"name="tecn"value="Tecnología"id="tec">
    <input type="submit"class="buttonn"name="econ"value="Economía"id="eco">
    <input type="submit"class="buttonn"name="depo"value="Deportes"id="dep">
    <input type="submit"class="buttonn"name="entr"value="Entretenimiento"id="ent">
    <input type="submit"class="buttonn"name="artc"value="Artículo científico"id="arc">
    <input type="submit"class="buttonn"name="arto"value="Artículo de opinión"id="aro">
    <input type="submit"class="buttonn"name="dibu"value="Dibujo"id="dib">
  </div>
  </div>
  </form>
  <?php 
  if(isset($_POST['dibu']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Dibujos'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Dibujos' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=0'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['arto']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo de opinión'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo de opinión' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=1'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['artc']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Artículo científico'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Artículo científico' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=2'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['entr']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Entretenimiento'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Entretenimiento' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=3'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['depo']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Deportes'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Deportes' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=4'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['econ']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Economía'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Economía' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=5'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['tecn']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Tecnología'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Tecnología' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=6'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['poli']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Política'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Política' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=7'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['colo']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' AND categoria='Colombia'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Colombia' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=8'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['mund']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept'  AND categoria='Mundo'";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' AND categoria='Mundo' LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=9'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['nuevos']))
  {?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id DESC";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id DESC LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php   
          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=10'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['antig']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id ASC";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id ASC LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php          $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=11'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['mejcal']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY procal DESC";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY procal DESC LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php         $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=12'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  }
  if(isset($_POST['mvis']))
  {
    ?>
  <script>document.getElementById("contnot").remove();</script>
  <div class="contenot" id="contnot">
  <?php
  $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY visitas DESC";
  $result = $conexion->query($sql);
      $row = $result->fetch_assoc();
      $numero = $row["total"];
  $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY visitas DESC LIMIT 6";
  $resultado=$conexion->query($sql);
  $i=0;
  while ($dato=$resultado->fetch_assoc()) {
    $fo=$dato['portada'];?>
      <a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&usua=<?php echo $_GET['usuario'] ?>"class="noticias">
          <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%">
          <?php         $i=$i+1;
          if($i%3==0||$i==$numero)
          {
            if($i==3)
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr color='black'style='height:1%;width:95%;' />";
            }
            else
            {
            echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a>";
            }
          }
          else
          {
     echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a><hr size='2px'color='black'style='height:250px;' />";
          }
    }?>
  </div><?php
  $divi=$numero/6;
  $apr=ceil($divi);
  $o=1;
  ?><script>document.getElementById("pgnss").remove();</script><div class="pgns"id="pgnss"> <?php  
  while($o<=$apr)
  {
    echo "<a href='explora.php?usuario=".$_GET['usuario']."&pg=".$o."&ctg=13'class='pagns'id='pagnss'style='margin-top:10%;'><div class='numers'>".$o."</div></a>";
   
    $o=$o+1;
    if($o>$apr)
    {
      echo "</div>";
    }
  }
  } 
  }

?>
  <script src="jquery.js"></script><script src="libre.js"></script>
  <script>
      $(document).ready(function() {
  $('a[href^="#"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 800);
    return false;
  });
});

  if (window.matchMedia("(orientation: portrait)").matches) {
     url = new URL(window.location.href);
if (url.search) {
    document.getElementById("pdu").innerHTML = "Usuario";}
  }
  function quitac()
  {
    y8.style.display="none";
    t8.style.display="none";
  }
function filtro1()
{
  categs= document.getElementById('filtros');
  filtr=document.getElementById('filtr');
  filtr2=document.getElementById('filtr2');
  filtr.style.display="none";
  filtr2.style.display="block";
  cuadfil.style.display="block"
  cuadfil.style.animation="despleg 0.2s";
  cuadfil.style.animationFillMode="forwards";
  categs.style.display="block"
}
function filtro2()
{
  categs= document.getElementById('filtros');
  filtr.style.display="block";
  filtr2.style.display="none";
  cuadfil.style.animation="despleg2 0.2s";
  cuadfil.style.animationFillMode="forwards";
  categs.style.display="none";

}
function categos()
{
  cuadctg.style.display="block";
  ctgs.style.display="none"
}
function categos2()
{
  cuadctg.style.display="none";
  ctgs.style.display="block"
}
function regi()
{
  $.ajax({
        url:'registro.php',
        type: 'POST',
        data: $('#datosr').serialize(),success:function(res){$('#result').html(res);
      }
      });
      t8=document.getElementById("t8");
  t8.style.display="none";
}
function botolo()
{
    y8.style.display="none";
    t8.style.display="none";
}
function f9()
{
    y1.style.display="block";
      y4.style.display="block";
        y6.style.display="block";
     y8.style.display="block";
    t1.style.display="none";
    t8.style.display="none"
         y1.style.animation="apartacho1 0.6s";  
           y4.style.animation="apartacho2 0.6s";  

h1.style.animation="apartacho3 3s";   
h2.style.animation="apartacho3 3s";   
 
 
}
function f10()
{
 
    t1.style.display="block";
      t4.style.display="block";
        t6.style.display="block";
     t8.style.display="block";
      y8.style.display="none"
         t1.style.animation="apartacho1 0.6s";  
           t4.style.animation="apartacho2 0.6s";  

g1.style.animation="apartacho3 3s";   
g2.style.animation="apartacho3 3s";   

 
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
    if(verific==0)
    {
      location.assign("explora.php");
    }
    if(verific==1)
    {
      usu=urlParams.get('usuario');
      location.assign("explora.php?usuario="+usu);
    }
  }
}

    </script>
</body>
</html>