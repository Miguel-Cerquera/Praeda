<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      header("location:admin.php?adm=".$n."");
    }
    else
    {
   header("location:user.php?usuario=".$n."&avc=1");
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
?>
<style >
  .crecuen {
  position: absolute;
  text-decoration: none;
  top: 68%;
  left:33%;
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
    z-index:1002;
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
z-index: 1000;
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
          font-size: 50px;
          color:black;
          left: 64.5%;
          z-index: 1002;
          top: 40%;
}

#rayialerti{
  z-index:1001;
  position: fixed;
          height: 7%;
          width: 33.8%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 33.8%;
          top: 40%;
          border: black solid 3px;
          }
@import url('normalize.css');
@import url('demo.css');

@font-face {
 font-family: “letra”;
src: url(NotoSerif-Bold.ttf);
}
@font-face {
font-family: “waza”;
src: url(Bubblegum.ttf);
}
@font-face {
  font-family:“roboto”;
  src: url(Roboto-Bold.ttf);
}
  @font-face {
font-family: “letra”;
src: url(EB.otf);
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
       


  .body {
  background-color: #EEEEEE   ;
  overflow-x:hidden;
  overflow-y:hidden;
  color: #02254a;
}
.logc
    {
       position: absolute;
      width: 12%;
      height:100%;
      left:4%;
      top: 0%;
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
@import 'https://fonts.googleapis.com/css?family=Rubik+One';




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
.cua{
  position: absolute;
  display:none;
    width:100px ;
    height:200px;
    border: 3px solid white;
}
.baner{
  position: fixed;
  z-index: 999;
  top:0%;
  left:0%;
  width:100%;
  height: 100px;
  background-color:white;
  box-shadow: 0 0 10px 5px;
}
#botoo
    {
      left:20%;
    }   
     #botoo1
    {
      left:35%;
    }
    #botoo2
    {
      left:55%;
    }
    #pdus
    {
      left:75%;
    }
    #crs
    {
      left:90%;
    }
       
.boto {
  position: absolute;
  text-decoration: none;
  top: 20%;
  left:27%;
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
        .imgg2
        {
            position: absolute;
            top: 28%;
            height:45%;
            width:24%;
            left: 42%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
            z-index:-5;
           
        }
         .imgg3
        {
            position: absolute;
            top: 28%;
            height:42%;
            width:24%;
            left: 59%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;
            z-index:-5;
           
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
            top: 76%;
            height:28%;
            width:15%;
            left: 2%;
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
            top: 76%;
            height:28%;
            width:15%;
            left: 18%;
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
            top: 76%;
            height:28%;
            width:15%;
            left: 34%;
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
          .slide {
display:block;
                position: absolute;
                top:15%;
                left:18%;
                box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
                margin-top: 26px;
                background-size: contain;
            background-repeat:no-repeat;

            }
            .slide-inner {
                position: relative;
                overflow: hidden;
                width: 100%;
                height:80%;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            .slide-open:checked + .slide-item {
                position: static;
                opacity: 100;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            .slide-item {

                position: absolute;
                opacity: 0;
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            .slide-item img {
                display: block;
                height: auto;
                max-width: 100%;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            .slide-control {
                background: rgba(0, 0, 0, 0.28);
                border-radius: 50%;
                color: #fff;
                cursor: pointer;
                display: none;
                font-size: 40px;
                height: 40px;
                line-height: 35px;
                position: absolute;
                top: 50%;
                -webkit-transform: translate(0, -50%);
                cursor: pointer;
                -ms-transform: translate(0, -50%);
                transform: translate(0, -50%);
                text-align: center;
                width: 40px;
                z-index: 10;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            .slide-control.prev {
                left: 2%;
            }
            .slide-control.next {
                right: 2%;
            }
            .slide-control:hover {
                background: rgba(0, 0, 0, 0.8);
                color: #aaaaaa;
            }
            #slide-1:checked ~ .control-1,
            #slide-2:checked ~ .control-2,
            #slide-3:checked ~ .control-3 {
                display: block;
            }
            .slide-indicador {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            .slide-indicador li {
                display: inline-block;
                margin: 0 5px;
                 background-size: contain;
            background-repeat:no-repeat;

            }
            .slide-circulo {
                color: #828282;
                cursor: pointer;
                display: block;
                font-size: 35px;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            .slide-circulo:hover {
                color: #aaaaaa;
                 background-size: contain;
            background-repeat:no-repeat;
            }
            #slide-1:checked ~ .control-1 ~ .slide-indicador 
                 li:nth-child(1) .slide-circulo,
            #slide-2:checked ~ .control-2 ~ .slide-indicador 
                  li:nth-child(2) .slide-circulo,
            #slide-3:checked ~ .control-3 ~ .slide-indicador 
                  li:nth-child(3) .slide-circulo {
                color: #428bca;
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
  top: 86%;
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
          left:36%;
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
          left:40%;
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
position: absolute;
top: 2%;
left: 2%;
width: 46%;
height: 92%;
background: white;
border-radius: 10px;
border: solid #044769   10px;
color: white;
 display: none;

}

#y8
{
  position: absolute;
top: 2%;
left: 50%;
width: 46%;
height: 92%;
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
  width:18%;
  height:70%;
  border: solid 2px #044769;
  background-color:white;
  z-index:0;
   box-shadow: 10px 5px 10px #044769;
}
.ch1{
  position:absolute;
  top:19%;
  left: 30%;
  width:60%;
  height:70%;
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
@media(orientation: portrait)
            { 
              .taq
              {
                display:none;
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
          height:117% ;
          background-color:white;
           box-shadow: 0 -5px 20px -5px ;
          
          z-index:12;
}
                .im{
          position:absolute;
          top:6%;
          left:0%;
          width:100%;
          height:70%;
   animation:apartacho3 1s;

        }
              .logc
    {
       position: absolute;
      width: 10%;
      height:80px;
      left:4%;
      top: 5%;
        background-size: contain;
            background-repeat:no-repeat;
   } 
   
 .boto {
  position: absolute;
  text-decoration: none;
  top: 95%;
  left:-1%;
  color: black;
   font-family: “letra”;
  padding: 12px 24px;
  text-align: center;
  z-index:30;
  text-decoration: none;
  display:none;
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


.boto1 {

  position: absolute;
  text-decoration: none;
  top:95%;
 font-family: “letra”;
  left:13%;
  color:black;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: none;
 font-size: 200%;
 z-index:30;
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
  top: 95%;
  left:35%;
  color: black;
  padding: 12px 24px;
  text-align: center;
 font-family: “letra”;
  text-decoration: none;
  display: none;
 font-size: 200%;
 z-index:30;
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
 .boto3{
display: none;

}
#botoo
    {
      left:-1%;
    }   
     #botoo1
    {
      left:13%;
    }
    #botoo2
    {
      left:35%;
    }
    #pdus
    {
      left:15%;
    }
    #crs
    {
      left:36%;
    }
.imgg1
        {
          display:none;
        }
        .imgg2
        {
          display:none;
        }
        .imgg3
        {
          display:none;
        }
        .button4::after, .button3::before {
  position: absolute;
  content: "";
  transition: all 0.5s;
}

.button4 {
  display: none;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 177%;
  left: 26%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 7vw;
  transition: all 0.2s;
  z-index:30;
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
        .button2
        {
          dysplay: none;
        }
         .button
        {
          dysplay: none;
        }
        .barra
        {
           position: absolute;
      width: 15%;
      height:60%;
      left:40%;
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
      left:40%;
      top: 20%;
       background: url(awo.png); 
        background-size: contain;
            background-repeat:no-repeat;
        }
        .baner{
  position: fixed;
  z-index: 12;
  top:0%;
  left:0%;
  width:100%;
  height: 100px;
   box-shadow: 0 0 10px 5px;
  background-color:white;
}
 .wazo
        {    
           z-index: 937626732673267236712788712781278278278217878127827812872378378327832787877877878732732878327832783278327832783278327878327832783278327832783278;
          position: absolute;
          top:80%;
          left:0%;
        font-size: 38px;
  color:white;
  width:100%;
  text-align: center;
  margin-bottom: 30px;
  transition: all 0.3s ease-in-out;
  font-family: “letra”;
   animation:apartacho3 1s;
}
.asdim
{
         position: absolute;
            top:78%;
            height:20%;
            width:140%;
            left: -20%;
            background: url(etse2.png);
            background-size: contain;
            background-repeat:no-repeat;

            max-height:200%;
}
  #bodyy
        {
          position:absolute; 
          width: 100%;
          height: 110%;
          top:0%;
          left:0%;
          background-color:white;

        }
        .bas1
        {
          position:absolute;
         color:white;
         width:700px;
         height:500px;
        }
        #ti1
        {
            position: absolute;
            top:18%;
            left: 2%;
            color:#044769;
             font-family: “letra”;
             font-size: 230%;
             z-index: 10;
           
        }
        #te1
        {
            display: none;
        }
         #tee1
        {
             position: absolute;
            width: 50vw;
            height: 100vh;
            top:19vh;
             color:black;
              text-align: justify;
            left: 40vw;
            font-family: “letra”; 
            font-size: 5vw;
            
        }
        #numer1
        {
         position: absolute;
            width: 80vw;
            height: 300vh;
            top:36.5vh;
             color:#044769;
              text-align: justify;
            left: 60vw;
            font-family:;
            font-size: 30vw;
            
        }
        #titi1
        {
             position: absolute;
            width: 80vw;
            height: 10vh;
            top:35%;
             color:black;
              text-align: justify;
            left: 5vw;
            font-family: “letra”;
            font-size: 34vw;
            
        }
          #imga1
        {
           display:none;
        }
        #tete1
        {
         display:none;
        }
                #img1
        {
          display:none;
        }
        #numer2
        {
       position: absolute;
            width: 80vw;
            height: 300vh;
            top:60vh;
             color:#044769;
              text-align: justify;
            left: 13vw;
            font-family:;
            font-size: 30vw;
            
        }
        #titi2
        {
         position: absolute;
            width: 80vw;
            height: 300vh;
            top:58vh;
             color:black;
              text-align: justify;
            left: 50vw;
          font-family: “letra”;
            font-size: 34vw;
            
            
        }
          #imga2
        {
           display:none;
        }
          #tete2
        {
          display:none;
        }
          #img2
        {
            display:none;
        }
        #numer3
        {
           position: absolute;
            width: 80vw;
            height: 300vh;
            top:81vh;
              color:#044769;
              text-align: justify;
            left: 62vw;
            font-family:;
            font-size: 30vw;
            
            
        }
        #titi3
        {
         position: absolute;
            width: 80vw;
            height: 20vh;
            top:83vh;
             color:black;
              text-align: justify;
            left: 0vw;
            z-index:3;
            font-family: “letra”;
            font-size: 24vw;
            
        }
         #tete3     
        {
           display:none;
            
        }
         #img3
        {
          display:none;
        }
          #imga3
        {
          display:none;
        }
.buton3 {
  display: none;
}
.buton2 {
  display: none;
}
.buton1
 {
  display: none;
}
.ch{
  position:absolute;
  top:72%;
  left: -2%;
  width:98%;
  height:28%;
  border: solid 2px #044769;
  background-color:white;
  z-index:0;
   box-shadow: 10px 5px 10px #044769;
}
.ch1{
  position:absolute;
  top:19%;
  left: -2%;
  width:98%;
  height:50%;
  border: solid 2px #044769;
  background-color:white;
  z-index:0;
  overflow-y:auto;
    box-shadow: 10px 5px 10px #044769;
}
h1 { 
 font-family: “letra”;
    position: relative;
    float: left;
    left:-8vw;
    top:-4vw;
    text-align:center;
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
h2 { 
 font-family: “letra”;
    position: relative;
    float: left;
    left:-12vw;
    top:-8vw;
    text-align:center;
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
h3 { 
 font-family: “letra”;
    position: relative;
    float: left;
    left:-10vw;
    top:-10vw;
    text-align:center;
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
h4 { 
 font-family: “letra”;
    position: relative;
    float: left;
    left:-10vw;
    top:-15vw;
    text-align:center;
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
.contenidog
{
  position:absolute;
  font-size:4vw;
  top:21vh;
  width:100%;
  height: 98%;
  left:-14%;
  color:black;
   text-align: justify;
}.contenidog1
{
  position:absolute;
  font-size:4vw;
  top:21vh;
  width:100%;
  height: 98%;
  left:-20%;
  color:black;
   text-align: justify;
}
.buton3 {
  display: inline-block;
  padding: 6px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 79%;
  left: 22%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 10vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;
  opacity: 1;

}
.buton2 {
  display: inline-block;
  padding: 6px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 79%;
  left: 70%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 10vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;
  opacity:1;

}
.buton1 {
  display: inline-block;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  border-radius:8px;
  top: 92%;
  left: 45%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 10vw;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;


}
#t8
{
  width:90%;
  height:90%;
}
#t7
{
position: absolute;
top: 16%;
left: 2%;
width: 95%;
height: 75%;
background: white;
border-radius: 10px;
 display: none;
}
#y8
{
  position: absolute;
top: 2%;
left: 2%;
width: 90%;
height: 90%;
background: white;
border-radius: 10px;
border: solid #044769   10px;
color: white;
 display: none;
}
#y7
{
  position: absolute;
top: 16%;
left: 2%;
width: 95%;
height: 75%;
background: white;
border-radius: 10px;
 display: none;
}
.wazo2
{
  left:30%;
}
.wazo3
{
  left:35%;
}
.button7 {
  display: none;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  position: absolute;
  top: 86%;
  left: 50%;
  z-index: 9;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 200%;
  transition: all 0.5s;
  background-color: #044769;
  border: 3px solid white;

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
  font-size: 200%;
  transition: all 0.2s;
  background-color: #044769;
  border: 3px solid #EEECE8;
    z-index: 500;

}

.crecuen
{
  left:22%;
}
#letravi
  {
    z-index:1002;
    font-family: “letra”;
    position:fixed;
    font-size:270%;
    color:black;
    width:56%;
    top:27%;
    left:8%;
    
  }
#aviso
{
z-index: 1000;
position: fixed;
    width: 60%;
    top: 20%;
    left: 2%;
    height: 20%;
    background:white;
    border: black solid 3px;
}
#equis
{
  position: fixed;
          font-family: Arial;
          font-size: 50px;
          color:black;
          left: 55.5%;
          z-index: 1002;
          top: 20%;
}

#rayialerti{
  z-index:1001;
  position: fixed;
          height: 5%;
          width: 60%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 2%;
          top: 20%;
          border: black solid 3px;
          }
          #y9
          {
            background:transparent;
          }
          #t9
          {
            background:transparent;
          }
                 }
                .estad
                {
                  display:flex;
                  height:60%;
                  font-family: “letra”;
                  font-size:220%;
                  justify-content:center;
                  align-items:center;
                }
          
</style>
<script src="jquery.js"></script><script src="libre.js"></script>

<div id="result"></div>
<body class="body">
  <div id="elin">
  <div class="ford" id="y7"> 

<div class="head" id="y8"> 
<form action="index.php"method="POST"id="datosi">
  <a class="crecuen" onclick="f10()">Crear una cuenta</a>
<div class="wazo2"  id="g1">Usuario</div>
<input type="text" id="y1" name="nombrei" placeholder="Usuario"></input>
<div class="wazo3" id="g2">Clave</div>
<input type="password" class="bo2" name="contrai" id="y4" placeholder="Contraseña"></input>
 <input type="submit"class="button7"name="i1"id="y6"value="Iniciar"></input>
</form>

</div>
</div>
<div id="y9"></div>
</div>
 <div class="titulo" id="w5">INGRESA</div>

<div id="elregi">
 <div class="ford" id="t7"> 

      <div class="head" id="t8"> 

    <form method="POST" id="datosr">
          <div class="wazo2"  id="h1">Usuario</div>
           <input type="text"  name="nombrer" placeholder="Nombre" id="t1" class="nombreu">
          <div class="wazo3" id="h2">Clave</div>
          <input type="text" name="contrar" placeholder="Contraseña" id="t4">
          <button type="button" class="button9" id="t6" onclick="regi()">Registrar</button>
     </form> 

   
  </div>
  
   </div>  
   <div id="t9"></div>
</div>
  

   

 </div>


<?php
$sumav=0;
$sumap=0;
$sumac=0;
$conexion=new mysqli("localhost","root","","grad");
$sql="SELECT * FROM notics WHERE estado='acept'";
$resultado=$conexion->query($sql);
while ($dato=$resultado->fetch_assoc()) {
  $sumap=$sumap+1;
  $sumav=$dato['visitas']+$sumav;
  $sumac=$dato['calificaciones']+$sumac;
}
?>

  <div id="apart1">
        <div id="ti1">¿Cómo funciona Praeda?</div>
     <div id="bodyy"></div>
        <div id="imga1"></div>
       <div id="imga2"></div>
       <div id="imga3"></div>
        <div name="te1" id="te1">Praeda es un periodico virtual que tiene como funcion ser un medio de informacion y comunicacion para los jovenes.Praeda se divide en varias categorias donde podras encontrar os temas que más te llamen la atención, además, praeda tambien tiene la funcion de que el usuario pueda calificar los trabajos de los demás jovenes. </div>
        <div id="numer1">1</div>
        <div id="titi1">Crea</div>
        <div id="tete1">Establece tus ideas, mientras tu pensamiento conecta con otros escritores o artistas que compartan tu pensamiento</div>
        <div id="numer2">2</div>
        <div id="titi2">Lee</div>
        <div id="tete2">Halla voces que compartan tu mismo interés  en PRAEDA Y encuentra recursos que necesites para elaborar tu idea o pensamiento</div>
        <div id="numer3">3</div>
        <div id="titi3">Califica </div>
        <div id="tete3">Obtén y califica los pensamientos que compartes con las personas que tengan tu mismo interés, además, amplia tus ideas y crea más.</div>
        <div id="img1"><p class="estad"><?php echo $sumap." Publicaciones" ?></p></div>
       <div id="img2"><p class="estad"><?php echo $sumav." Visitas" ?></p></div>
       <div id="img3"><p class="estad"><?php echo $sumac." Calificaciones" ?></p></div>
    </div>
    <div id="apart2"  >
      <div class="ch" id="ch1" name="ch1" onmousemove="o()"></div>
       <div class="ch1" id="ch2" name="ch2"><div id="tz1" name="tz1" class="contenedor" >
      <h1>Quienes creamos Praeda<span id="ts1" name="ts1">&#160;</span></h1>
      <div class="contenidog">Praeda es un periódico virtual institucional que tiene como objetivo proporcionar noticias objetivas y veraces a nuestros lectores. Con un equipo comprometido y experimentado, nos aseguramos de que nuestro contenido se mantenga imparcial y de alta calidad. Nuestro equipo está formado por expertos en el campo de las noticias, la tecnología y el periodismo. Nos enorgullece contar con un diseñador y escritor, también con un editor encargado que las noticias sean mas bellas para la vista y por ultimo contamos con un agrupador del contenido, el encargado de que la información se vea reflejada en el periódico virtual.</div>
    </div>
    <div id="tz2" name="tz2" class="contenedor2" >
      <h2 >Juan Jose Lopera<span id="ts2" name="ts2">&#160;</span></h2>
      <div class="contenidog1">Juan Jose Lopera Londoño se especializa en el diseño css, además de eso se especializa en el responsive de la pagina para que sea multifuncional en todos los dispositivos donde se acceda a la pagina, también el mismo es el que se encarga de la interactividad de la pagina para que está se vea mas agradable y funcional a simple vista.</div>
    </div>
     <div id="tz3" name="tz3" class="contenedor3" >
      <h3 >Miguel Cerquera Arias <span id="ts3" name="ts3">&#160;</span></h3>
      <div class="contenidog">Miguel Cerquera Arias se especializa en la logica del proyecto, el es el que planea como llevar acabo las ideas del diseñador y del diseñador de css, además de eso es el encargado de la parte de php del proyecto, y por ultimo también es el encargado de javascript en el proyecto de grados es un pilar importante de el proyecto de grados. </div>
    </div>
    <div id="tz4" name="tz4" class="contenedor4" >
      <h4>Juan Esteban Madrid <span id="ts4" name="ts4">&#160;</span></h4>
      <div class="contenidog" >Juan Esteban Madrid se especializa en el diseño de la pagina, es el que tiene la idea de como va a ser la pagina web que se llevara acabo, tambien es el encargado del contenido de la pagina.</div>
    </div>
  </div>
    <a class="buton3"  name="x1" id="x1" onclick="w1()" onmousemove="o1()" >Lopera</a>
         <a class="buton2" name="x2" id="x2" onclick="w2()" onmousemove="o2()" >Cerquera</a>
        <a class="buton1"  name="x3" id="x3" onclick="w3()"onmousemove="o3()">Madrid</a>
     
  </div>


    <div class="slide" id="z2">
        
                </ol>
            </div>
        </div>
        <?php
        if(isset($_REQUEST['usuario']))
        {
          $sumav=0;
          $sumap=0;
          $sumac=0;
          $conexion=new mysqli("localhost","root","","grad");
          $sql="SELECT * FROM notics WHERE estado='acept'";
          $resultado=$conexion->query($sql);
          while ($dato=$resultado->fetch_assoc()) {
            $sumap=$sumap+1;
            $sumav=$dato['visitas']+$sumav;
            $sumac=$dato['calificaciones']+$sumac;
          }
          ?>
          <div class="baner">  <a href="#"><img src="logri.png"  alt="imagen1"  onclick="botolo()" class="logc"></a>
          <div class="cua" ame="r7" id="r7"></div> 
            <div class="imgg1"style="left:18%;"></div>
             <div class="imgg2"style="left:35%;"></div>
             <div class="imgg3"style="left:53%;"></div>
           <div class="barra"id="ba1" onclick="b1()">
          </div>
            <div class="barra1" id="ba2" onclick="b2()" ></div>
           <div class="taq1" id="taq1"></div>
            <a href="#apart1" class="boto"  id="botoo">¿Qué es?</a>
             <a href="#apart2" class="boto1"id="botoo1" onclick="a2()">¿Quienes somos?</a>
              <a href="explora.php?usuario=<?php echo $_REQUEST['usuario'];?>" class="boto2"id="botoo2">Explorar</a>
              <a class="button4"id="pdus"href="user.php?usuario=<?php echo $_REQUEST['usuario'];?>">Panel de usuario</a>
              <a class="button4"id="crs" href="index.php">Cerrar sesion</a>
        </div> 
        <script>document.getElementById("bodyy").remove();</script>
        <div id="apart1">
        <div id="bodyy"></div>
        <div id="imga1"></div>
       <div id="imga2"></div>
       <div id="imga3"></div>
        <div name="te1" id="te1">Praeda es un periodico virtual que tiene como funcion ser un medio de informacion y comunicacion para los jovenes.Praeda se divide en varias categorias donde podras encontrar os temas que más te llamen la atención, además, praeda tambien tiene la funcion de que el usuario pueda calificar los trabajos de los demás jovenes. </div>
        <div id="numer1">1</div>
        <div id="titi1">Crea</div>
        <div id="tete1">Establece tus ideas, mientras tu pensamiento conecta con otros escritores o artistas que compartan tu pensamiento</div>
        <div id="numer2">2</div>
        <div id="titi2">Lee</div>
        <div id="tete2">Halla voces que compartan tu mismo interés  en PRAEDA Y encuentra recursos que necesites para elaborar tu idea o pensamiento</div>
        <div id="numer3">3</div>
        <div id="titi3">Califica </div>
        <div id="tete3">Obtén y califica los pensamientos que compartes con las personas que tengan tu mismo interés, además, amplia tus ideas y crea más.</div>
        <div id="img1"><p class="estad"><?php echo $sumap." Publicaciones" ?></p></div>
       <div id="img2"><p class="estad"><?php echo $sumav." Visitas" ?></p></div>
       <div id="img3"><p class="estad"><?php echo $sumac." Calificaciones" ?></p></div>
    </div>
        </div>
          <?php
        }
        else
        {
          ?>
<div class="baner">  <a href="#"><img src="logri.png"  alt="imagen1"  onclick="botolo()" class="logc"></a>
          <div class="cua" ame="r7" id="r7"></div> 
            <div class="imgg1"></div>
             <div class="imgg2"></div>
             <div class="imgg3"></div>
           <div class="barra"id="ba1" onclick="b1()">
          </div>
            <div class="barra1" id="ba2" onclick="b2()" ></div>
           <div class="taq1" id="taq1"></div>
            <a href="#apart1" class="boto"  id="boto">¿Qué es?</a>
             <a href="#apart2" class="boto1"id="boto1" onclick="a2()">¿Quienes somos?</a>
              <a href="explora.php" class="boto2"id="boto2">Explorar</a>
        <a class="button4" href="#" nam="r4" id="r4" onclick="f9()">Ingresar</a>
        </div> 
          <?php
        }
        ?>
       
        <div id="inic">
        <div class="taq" id="o1">"¡Despierta al mundo con la verdad! <br> sumérgete en nuestro periódico virtual."<br><br><br>
"La verdad no conoce distancias, <br>nuestro periódico virtual tampoco".</div>
<?php
if(isset($_GET['usuario']))
{
  ?>
  <div class="asdim"></div>
  <div class="wazo" id="q2"><?php echo "Bienvenid@ ".$_GET['usuario']; ?></div>
  <?php
}
else
{?>
<div class="asdim"></div>
<div class="wazo" id="q2">Crea lee y expresate libremente con  nuestros articulos </div>
<?php
}
?>
  <img src="negroo.png" id="q1" class="im" >
  
</div>


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
function regi()
{
  $.ajax({
        url:'registro.php',
        type: 'POST',
        data: $('#datosr').serialize(),success:function(res){$('#result').html(res);
      }
      });
}
function inics()
{
  $.ajax({
        url:'iniciar.php',
        type: 'POST',
        data: $('#datosi').serialize(),success:function(res){$('#result').html(res);
      }
      });
}
function quitaviso()
{
  
  aviso.style.display="none";
  rayialerti.style.display="none";
  equis.style.display="none";
  transpar.style.display="none";
  letravi.style.display="none";
}

  function f1()
{
  r6.style.display="none";
  r7.style.display="block";
r1.style.display="block";
r2.style.display="block";
r3.style.display="block";
r4.style.display="block";
r5.style.display="block"; 
}
function f9()
{
  y9 = document.getElementById("y9");
    y1.style.display="block";
   inic.style.display="none";
      y4.style.display="block";
    elregi.style.display="none"
        y6.style.display="block";
    y7.style.display="block";
     y8.style.display="block";
     elin.style.display="block";
     y9.style.display="block";
    t1.style.display="none";

         y1.style.animation="apartacho1 0.6s";  
           y4.style.animation="apartacho2 0.6s";  

h1.style.animation="apartacho3 3s";   
h2.style.animation="apartacho3 3s";   
 
 
}
function botolo()
{
    inic.style.display="block";
    elregi.style.display="none";
    elin.style.display="none";
}
function o()
{
    ch1.style.border="solid 2px #044769";
  x2.style.opacity=1;
   x1.style.opacity=1;
   x3.style.opacity=1;
   ch1.style.opacity=1;
     }
function o1()
{
  x2.style.opacity=0.5;
   x3.style.opacity=0.5;
   
    ch1.style.border="solid 2px #81BEB5";
    

     }
     function o2()
{
   x1.style.opacity=0.5;
   x3.style.opacity=0.5;
    ch1.style.border="solid 2px #81BEB5";
     }
     function o3()
{
  
   x1.style.opacity=0.5;
   x2.style.opacity=0.5;
    ch1.style.border="solid 2px #81BEB5";
     }
function f10()
{
 
    t1.style.display="block";
      t4.style.display="block";
        t6.style.display="block";
    t7.style.display="block";
     t8.style.display="block";
     t9.style.display="block";

      elregi.style.display="block"
      elin.style.display="none"
  inic.style.display="none"

         t1.style.animation="apartacho1 0.6s";  
           t4.style.animation="apartacho2 0.6s";  

g1.style.animation="apartacho3 3s";   
g2.style.animation="apartacho3 3s";   

 
}

function f11()
{
  z2.style.display="none";
   t2.style.display="none";
    t1.style.display="none";
      t4.style.display="none";
       t5.style.display="none";

       w2.style.display="none";
    w1.style.display="none";
     w3.style.display="none";
      w4.style.display="none";
       w5.style.display="none";

       q1.style.display="block";
         q2.style.display="block";

       
 
}
function a2()
{
   tz1.style.display="block";  
    tz2.style.display="none";  
  tz3.style.display="none"; 
  tz4.style.display="none";  
  ts1.style.animation="escribir 3s steps(30)";  
}
function w1()
{
  
  tz1.style.display="none";  
  tz2.style.display="block";  
  tz3.style.display="none";  
  tz4.style.display="none";  
  ts2.style.animation="escribir 2s steps(30)";  
}
function w2()
{ 
   tz1.style.display="none";  
  tz2.style.display="none";  
  tz3.style.display="block"; 
  tz4.style.display="none";  
  ts3.style.animation="escribir 2s steps(30)";  
}
function w3()
{ 
   tz1.style.display="none";  
  tz2.style.display="none";  
  tz3.style.display="none";  
  tz4.style.display="block";  
  ts4.style.animation="escribir 2s steps(30)";  
}
function b1()
{
taq1.style.display="block";  
var url = new URL(window.location.href);

if (url.search) {botoo.style.display="block";  
  botoo1.style.display="block"; 
  botoo2.style.display="block"; 
  pdus.style.display="block";  
  crs.style.display="block";
} else {
  boto.style.display="block";  
  boto1.style.display="block"; 
  boto2.style.display="block";   
  r4.style.display="block";
}
 

   ba1.style.display="none";
   ba2.style.display="block";
}
function b2()
{
taq1.style.display="none";  
var url = new URL(window.location.href);
if (url.search) {botoo.style.display="none";  
  botoo1.style.display="none"; 
  botoo2.style.display="none"; 
  pdus.style.display="none";  
  crs.style.display="none";
} else {
  boto.style.display="none";  
  boto1.style.display="none"; 
  boto2.style.display="none"; 
    r4.style.display="none"; 
}

  ba2.style.display="none";
   ba1.style.display="block";
}
</script>
</body>
</html>