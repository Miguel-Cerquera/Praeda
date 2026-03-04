<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Periódico</title>
    <link rel="shortcut icon" href="logri.png">
</head>
<style>
     body
    {
        background:url("fondex.png");
        overflow-x:hidden;
        color: #02254a;
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
   #mancha1
{
  position:absolute;
  width:12%;
  height:50%;
  left:6%;
  top:26%;
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
}
.contenot
{
  position:absolute;
  display: flex;
  flex-wrap: wrap;
  width:66%;
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
  height:20%;
  width:80%;
  margin-left:1%;
  margin-top:2%;
  flex-direction:column;
}
input[type="checkbox"]
{
    width:4%;
    height:2%;
    transform: scale(2);
}
.orden
{
    position:absolute;
    left:69%;
    top:20%;
    width:28%;
    background:#F3EBE5 ;
    font-family:“letra2”;
    padding:1%;
}
.flechas
{
    display:flex;
    flex-direction:column;
    height:90%;
    width:8%;
}
.parriba
{
    padding-bottom:15%;
}
.pabajo
{
    padding-top:15%;
}
#rdn1
{
    display:flex;
    flex-direction:row;
    align-items:center;
}
#rdn2
{
    display:flex;
    flex-direction:row;
    align-items:center;
}
#rdn3
{
    display:flex;
    flex-direction:row;
    align-items:center;
}
#rdn4
{
    display:flex;
    flex-direction:row;
    align-items:center;
}
#rdn5
{
    display:flex;
    flex-direction:row;
    align-items:center;
}
#rdn6
{
    display:flex;
    flex-direction:row;
    align-items:center;
}
.distr
{
    display:flex;
  cursor:pointer;
  text-decoration:none;
  align-items:center;
  height:10%;
  width:44%;
  flex-direction:column;
}
#envio::after, #envio::before {
  content: "";
  transition: all 0.6s;
}
#envio{
  z-index: 1000;
  padding: 5px 10px;
color:white;filter: drop-shadow(0 0 1px white) drop-shadow(0 0 2px white) contrast(1) brightness(1);transition:0.5s;
  margin-bottom:1%;
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
#envio::before {
  bottom: -15px;
  height: 15px;
  width: 100%;
  left: 45.5%;
  transform: skewX(45deg);
  background-color: #EEECE8;
}
#envio::after {
  right: -15px;
  height: 100%;
  width: 15px;
  bottom: -8px;
  transform: skewY(45deg);
  background-color: #EEECE8;
}
#envio:active {
  margin-left: 45.5%;
  margin-top: 5.5%;
}
#envio:active::before {
  bottom: -5px;
  height: 5px;
  left: 3px;
}
#envio:active::after {
  right: -5px;
  width: 5px;
  bottom: -3px;
}
#envio:hover {
background-color:#81BEB5;
  text-decoration: none;
  cursor: pointer;
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
    left:36%;   
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
          height: 7%;
          width: 33.8%;
          background-color: #044769;
          box-shadow:inset 0 0 10px 5px;
          left: 33.8%;
          top: 40%;
          border: black solid 3px;
          }
</style>
<body>
<div class="baner">  <a href="#"><img src="logri.png"  alt="imagen1"  onclick="botolo()" class="logc"></a>
       <div class="cua" ame="r7" id="r7"></div> 
	   <img src="etse2.png" id="mancha1">
	   <a href="admin.php?adm=<?php echo $_GET['adm'];?>" class="boto3">Volver</a>
	   <a class="button4" href="index.php">Cerrar sesion</a>
       </div> 
       <div class="orden"id="ord">
        <h1>Orden:</h1>
            <div id="rdn1"></div>
            <div id="rdn2"></div>
            <div id="rdn3"></div>
            <div id="rdn4"></div>
            <div id="rdn5"></div>
            <div id="rdn6"></div>

    <form action="crpe.php?adm=<?php echo $_GET['adm'];?>"method="POST">
    <input type="text" name="nro1" id="nr1" style="display:none;"onchange="rdns(1)">    
    <input type="text" name="nro2" id="nr2" style="display:none;"onchange="rdns(2)">    
    <input type="text" name="nro3" id="nr3" style="display:none;"onchange="rdns(3)">    
    <input type="text" name="nro4" id="nr4" style="display:none;"onchange="rdns(4)">    
    <input type="text" name="nro5" id="nr5" style="display:none;"onchange="rdns(5)">    
    <input type="text" name="nro6" id="nr6" style="display:none;"onchange="rdns(6)">  
    <input type="text" name="fechaa" id="fes"style="display:none;"> 
    <input type="submit" value="Publicar"name="env"id="envio"style="display:none;">
    </form>
       </div>
       <?php
        $conexion=new mysqli("localhost","root","","grad");
        if(isset($_POST['env']))
        {
          $sql="SELECT MAX(id) as id FROM periodesp";
          $resultado=$conexion->query($sql);
          $dato=$resultado->fetch_assoc();
          $idd=$dato['id'];

          $j=$idd+1;
          $no1=$_POST['nro1'];
          $no2=$_POST['nro2'];
          $no3=$_POST['nro3'];
          $no4=$_POST['nro4'];
          $no5=$_POST['nro5'];
          $no6=$_POST['nro6'];
          $fec=$_POST['fechaa'];

          $sql="INSERT INTO periodesp VALUES($j,'$no1','$no2','$no3','$no4','$no5','$no6','$fec')";
          $ejec=mysqli_query($conexion,$sql);
          echo "<div id='transpar'></div><div id='aviso'></div><div id='rayialerti'></div><div id='letravi'>Periodico publicado.</div><div id='equis'onclick='quitaviso()'>X</div>";
          
        }
       ?>
       <div class="contenot" id="contnot">
       <?php
         $sql = "SELECT COUNT(*) as total FROM notics WHERE estado='acept' ORDER BY id DESC";
$result = $conexion->query($sql);
    $row = $result->fetch_assoc();
    $numero = $row["total"];
       $sql="SELECT * FROM notics WHERE estado='acept' ORDER BY id DESC";
    $resultado=$conexion->query($sql);
    $i=0;
    while ($dato=$resultado->fetch_assoc()) {
      $fo=$dato['portada'];?>
        <div id="noti<?php echo $dato['id'] ?>"class="distr"><a href="noticia.php?not=<?php echo $dato['titulo'] ?>&autor=<?php echo $dato['usuario'] ?>&prd=<?php echo $_GET['adm']; ?>"class="noticias">
            <img id="foto"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" width="80%" height="10%"style="margin-top:5%;">
            <?php
            $i=$i+1;
            if($i%2==0||$i==$numero)
            {
              if($i%2!=2)
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a></div><input type='checkbox'id='ckbox".$dato['id']."' onchange='laschk(".$dato['id'].")' /><hr color='black'style='height:1%;width:95%;' />";

            }
              else
              {
              echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a></div><input type='checkbox'id='ckbox".$dato['id']."' onchange='laschk(".$dato['id'].")' />";
              }
            }
            else
            {
       echo "<div class='titus'><p class='fech'>".$dato['fecha']."</p><p class='ctrs'>".$dato['categoria']."</p><p class='ttl'>".$dato['titulo']."</p></div></a></div><input type='checkbox'id='ckbox".$dato['id']."' onchange='laschk(".$dato['id'].")' /><hr size='2px'color='black'style='height:250px;' />";
            }
      }
     
    ?>
    </div>
    <script>
         window.onload = function(){
  var fecha = new Date();
  var mes = fecha.getMonth()+1;
  var dia = fecha.getDate();
  var ano = fecha.getFullYear();
  if(dia<10)
    dia='0'+dia;
  if(mes<10)
    mes='0'+mes;
  document.getElementById('fes').value=dia+"-"+mes+"-"+ano;
}
        function abaj(a)
        {
            baj=document.getElementById("nr"+a);
            l=a+1;
            sub=document.getElementById("nr"+l);
            su=sub.value;
            ba=baj.value;
            if(su=="")
            {
            }
            else
            {
                baj.value=su;
                baj.onchange();
            sub.value=ba;
            sub.onchange();
            }
        }
        function arrib(b)
        {
            baj=document.getElementById("nr"+b);
            l=b-1;
            sub=document.getElementById("nr"+l);
            su=sub.value;
            ba=baj.value;
            if(su=="")
            {
            }
            else
            {
                baj.value=su;
                baj.onchange();
            sub.value=ba;
            sub.onchange();
            }
        }
        function rdns(z)
        {
           ords=document.getElementById("rdn"+z);
           not=document.getElementById("nr"+z);
           g=not.value;
           if(g=="")
           {
            ords.innerHTML="";
           }
           else
           {
           notic=document.getElementById("noti"+g);
           if(z==1)
           {
            flecho="<div class='flechas'><img src='abajo.png' onclick='abaj("+z+")'class='pabajo' /></div>"
            ords.innerHTML=flecho+notic.innerHTML;

           }
           else
           {
            if(z==6)
            {
                flecho="<div class='flechas'><img src='arriba.png' onclick='arrib("+z+")'class='parriba' /></div>"
            ords.innerHTML=flecho+notic.innerHTML;
            }
            else
            {
                flecho="<div class='flechas'><img src='arriba.png' onclick='arrib("+z+")'class='parriba' /><img src='abajo.png' onclick='abaj("+z+")'class='pabajo' /></div>"
                ords.innerHTML=flecho+notic.innerHTML;
            }
           }
           
           }
        }
        x=1;
        function laschk(y)
        {
          chk=document.getElementById("ckbox"+y);
          notic=document.getElementById("noti"+y);
          if(chk.checked)
          {
            x=x+1;
            if(x<=7)
            {
            i=1;
            while(i<=6)
            {
                inpt=document.getElementById("nr"+i);
                if(inpt.value=="")
                {
                    inpt.value=y;
                    inpt.onchange();
                    i=i+6;
                }
                i=i+1;
            }
            if(x==7)
            {
                envio.style.display="block";
            }
          }
          else
          {
            x=x-1;
            chk.checked=false;
          }
        }
          else
          {
            if(x==6)
            {
                envio.style.display="none";
            }
            x=x-1;
            if(x<=7)
            {
            i=1;
            o=0;
            while(i<=6)
            {
                inpt=document.getElementById("nr"+i);
                if(o==6)
                {
                    p=i-1;
                    inptt=document.getElementById("nr"+p);
                    inptt.value=inpt.value;
                    inptt.onchange();
                    if(i==6)
                    {
                        inpt.value="";
                    inpt.onchange();
                    }
                }
                if(inpt.value==y)
                {
                    inpt.value="";
                    inpt.onchange();
                    o=6;
                }
                
                i=i+1;
            }
          }
        }
        }
        function quitaviso()
{
  
  aviso.style.display="none";
  rayialerti.style.display="none";
  equis.style.display="none";
  transpar.style.display="none";
  letravi.style.display="none";
}
        </script>
</body>
</html>