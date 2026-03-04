<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La voz</title>
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
font-family: “dins”;
src: url(Dionisio-regular.ttf);
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

.button4 {
  position:fixed;
  z-index: 1000;
 position: absolute;
  top: 48%;
  border-radius:8px;
  left: 80%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 2vw;
  transition: all 0.2s;

}
#foto1
{
    width:40%;
     height:55%;
     margin-top:8%;
}
#foto2
{
    width:60%;
     height:50%;
     margin-top:8%;
     margin-right:1%;
}
.camb
{
    position:absolute;
  background:url("chl.png");
  background-size:contain;
  background-repeat:no-repeat;
  border:none;
  width:7%;
  height:20%;
  left:85%;
  top:40%;
  cursor: pointer;
}
#contenot
{
  position:absolute;
  display: flex;
  flex-wrap: wrap;
  width:72%;
  margin-bottom:20%;
  height:180%;
  background:#F3EBE5 ;
  text-decoration:none;
  font-family:“letra2”;
  top:20%;
  left:14%;
  align-items:center;
  flex-direction:column;
}
#titul
{
  display:flex;
  width:50%;
  margin-top:2%;
  font-family:“dins”;
  font-size:600%;
}
#cabe
{
    display:flex;
    flex-direction:row;
    width:100%;
    color:black;
    font-family:Calibri;
    font-size:100%;
    font-weight:600;
    margin-top:2%;
    margin-left:2%;
}
#subttl
{
    color:black;
    font-family:Calibri;
    margin-top:1%;
    font-size:110%;
    font-weight:600;
}
#fepe
{
    width:88%;
}
#ppr
{
    width:14%;
    align-items:right;
}
#debaj
{
    width:66%;
}
#trpr
{
    display:flex;
  text-decoration:none;
    flex-direction:row;
    font-size:90%;
    height:16%;
    font-family:Calibri;
    width:96%;
    margin-top:2%;
}
.ttl
{
    display:flex;
    color: #02254a;
    font-weight:bold;   
    white-space: normal;
    text-overflow: ellipsis;    
  width:100%;
  height:25%;
  align-items:center;
}
.conten
{
    display:flex;
    flex-wrap:wrap;
    white-space: normal;
    text-overflow: ellipsis;    
    color:black;
  width:100%;
  height:65%;
  align-items:center;
}
.noticias
{
    display:flex;
  cursor:pointer;
  text-decoration:none;
  align-items:center;
  height:10%;
  width:31%;
  margin-right:3%;
  flex-direction:column;
}
.noticiasmt
{
    display:flex;
  flex-direction:row;
  text-decoration:none;
}
.ttlmt
{
    display:flex;
    word-wrap:break-word;
    font-family:“dins”;
    font-size:260%;
    color: #02254a;
    font-weight:bold;
  width:100%;
  height:30%;
  align-items:center;
}
.femt
{
    display:flex;
    font-family:“dins”;
    font-size:90%;
    color: #02254a;
    font-weight:bold;
  width:100%;
  height:1%;
}
.ctgmt
{
    display:flex;
    font-family:“dins”;
    font-size:90%;
    color: #02254a;
    font-weight:bold;
  width:100%;
  height:1%;
}
.contenmt
{
    display:flex;
    flex-wrap:wrap;
    white-space: normal;
    text-overflow: ellipsis;    
    color:black;
    font-weight:bold;
  width:100%;
  height:55%;
  align-items:center;
}
#mtd
{
    display:flex;
  text-decoration:none;
    flex-direction:row;
    padding:none;
    font-family:Calibri;
    width:96%;
    height:35%;
}
#txmt
{
    display:flex;
  cursor:pointer;
  align-items:center;
  height:10%;
  width:55%;
  margin-right:3%;
  flex-direction:column;
}
#dsfnl
{
    display:flex;
  text-decoration:none;
    flex-direction:row;
    font-size:90%;
    height:16%;
    font-family:Calibri;
    width:96%;
    margin-top:2%;
}
.ttlfn
{
    display:flex;
    color: #02254a;
    font-weight:bold;   
    white-space: normal;
    text-overflow: ellipsis;    
  width:100%;
  height:25%;
  align-items:center;
}
.contenfn
{
    display:flex;
    flex-wrap:wrap;
    white-space: normal;
    text-overflow: ellipsis;    
    color:black;
  width:100%;
  height:65%;
  align-items:center;
}
.noticiasfn
{
  flex-direction:row;
  margin-left:3%;
  width:40%;
  text-decoration:none;
}
.noticiasfnn
{
    display:flex;
  flex-direction:row;
  width:60%;
  text-decoration:none;
}
#txfn
{
    display:flex;
  cursor:pointer;
  text-decoration:none;
  width:30%;
  margin-right:3%;
  flex-direction:column;
}
#txfnn
{
    display:flex;
  cursor:pointer;
  text-decoration:none;
  align-items:right;
  height:80%;
  margin-right:3%;
  flex-direction:column;
}
@media(orientation:portrait)
   {
    .button4 {
  position:fixed;
  z-index: 1000;
 position: absolute;
  top: 48%;
  border-radius:8px;
  left: 78%;
  transform: translate(-50%, -50%);
  vertical-align: middle;
    font-family: “letra”;
  text-decoration: none;
  font-size: 150%;
  transition: all 0.2s;

}
.camb
{
    position:absolute;
  background:url("chl.png");
  background-size:contain;
  background-repeat:no-repeat;
  border:none;
  width:7%;
  height:20%;
  left:92%;
  top:40%;
  cursor: pointer;
}
    #contenot
{
  position:absolute;
  display: flex;
  flex-wrap: wrap;
  width:96%;
  margin-bottom:20%;
  height:175%;
  background:#F3EBE5 ;
  text-decoration:none;
  font-family:“letra2”;
  top:20%;
  left:2%;
  align-items:center;
  flex-direction:column;
}
.ttlfn
{
    display:flex;
    color: #02254a;
    font-size:80%;
    font-weight:bold;   
    white-space: normal;
    text-overflow: ellipsis;    
  width:100%;
  height:25%;
  align-items:center;
}
.contenfn
{
    display:flex;
    font-size:70%;
    flex-wrap:wrap;
    white-space: normal;
    text-overflow: ellipsis;    
    color:black;
  width:100%;
  height:65%;
  align-items:center;
}
#foto1
{
    width:65%;
    height:50%;
    margin-top:35%;
}
#foto2
{
    width:60%;
    height:50%;
    margin-top:35%;
}
#titul
{
  display:flex;
  width:70%;
  margin-top:2%;
  font-family:“dins”;
  font-size:350%;
}
#debaj
{
    width:86%;
}
#subttl
{
    color:black;
    font-family:Calibri;
    margin-top:1%;
    font-size:70%;
    font-weight:600;
}
#trpr
{
    display:flex;
  text-decoration:none;
    flex-direction:row;
    font-size:60%;
    height:13%;
    font-family:Calibri;
    width:96%;
    margin-top:5%;
}
#fepe
{
    width:75%;
}
#ppr
{
    width:25%;
    align-items:right;
}
.ttl
{
    display:flex;
    color: #02254a;
    font-weight:bold;   
    white-space: normal;
    text-overflow: ellipsis;    
  width:100%;
  height:25%;
  align-items:center;
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
#txmt
{
    display:flex;
  cursor:pointer;
  align-items:center;
  height:10%;
  width:35%;
  margin-right:3%;
  flex-direction:column;
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
.ttlmt
{
    display:flex;
    word-wrap:break-word;
    font-family:“dins”;
    font-size:120%;
    color: #02254a;
    font-weight:bold;
  width:100%;
  height:30%;
  align-items:center;
}
.femt
{
    display:flex;
    font-family:“dins”;
    font-size:80%;
    color: #02254a;
    font-weight:bold;
  width:100%;
  height:1%;
}
.ctgmt
{
    display:flex;
    font-family:“dins”;
    font-size:80%;
    color: #02254a;
    font-weight:bold;
  width:100%;
  height:1%;
}
.contenmt
{
    display:flex;
    flex-wrap:wrap;
    white-space: normal;
    text-overflow: ellipsis;    
    color:black;
    font-size:70%;
    font-weight:bold;
  width:100%;
  height:55%;
  align-items:center;
}
   }
</style>
<body>
<div class="baner">  <a href="#"><img src="logri.png"  alt="imagen1"  onclick="botolo()" class="logc"></a>
       <div class="cua" ame="r7" id="r7"></div> 
	   <img src="etse2.png" id="mancha1">
    <?php
            $conexion=new mysqli("localhost","root","","grad");
     $sql="SELECT MAX(id) as id FROM periodesp";
     $resultado=$conexion->query($sql);
     $dato=$resultado->fetch_assoc();
     $idd=$dato['id'];
    if(isset($_GET['usuario']))
    {
    ?>
    	   <a href="explora.php?usuario=<?php echo $_GET['usuario'];?>" class="boto3">Volver</a>

    <form action="lavz.php?usuario=<?php echo $_GET['usuario']; ?>">
    <?php
    }
    else
    {
    ?>
    	   <a href="explora.php" class="boto3">Volver</a>
    <form action="lavz.php"method="POST">
    <?php
    }
    ?>
     <select name="fechs" id="elefec"class="button4"onchange="cambiodef()">
    <?php
     $sql="SELECT * FROM periodesp ORDER BY id DESC";
     $resultado=$conexion->query($sql);
     while($dato=$resultado->fetch_assoc())
     {
        echo "<option>Periodico #".$dato['id']."</option>";
     }
    ?>
</select>
<input type="submit" name="cambio"class="camb"value="">
<input type="text" id="fecam"name="nuefe" value="<?php echo $idd ?>"style="display:none;">
</form>
</div> 
<?php
     $sql="SELECT * FROM periodesp WHERE id=$idd";
     $resultado=$conexion->query($sql);
     $dato=$resultado->fetch_assoc();
    ?>
    <div id="contenot">
    <div id="cabe"><div id="fepe"><?php echo $dato['fecha']; ?></div> <div id="ppr">Por: Praeda</div></div>
     <div id="titul">LA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VOZ</div>
     <img src="bast.png" id="debaj" />
     <div id="subttl">CONÉCTATE CON NUESTRA COMUNIDAD NEOSISTEMAS</div>
     <div id="trpr">
        <?php
        $i=1;
        while($i<=3)
        {
            $notic=$dato['not'.$i];
            $sql2="SELECT * FROM notics WHERE id=$notic";
     $resultado2=$conexion->query($sql2);
     $dato2=$resultado2->fetch_assoc();
     if(isset($_GET['usuario']))
    {
     echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticias'>";
    }
    else
    {
        echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticias'>";
    }
    echo "<p class='ttl'>".$dato2['titulo']."</p><br>";
    $texto=$dato2['contenido'];
    $cort=str_split($texto);  
    $tama=count($cort);
    $qui=$tama-180;
    $cont = array_slice($cort, 0, -$qui);
    echo "<p class='conten'>";
    foreach ($cont as $letra) {
        echo $letra;
    }
    $i=$i+1;
    echo "...</p></a>";
        }
        ?>
     </div>
     <hr color='black'style='height:0.2px;width:100%;margin-left:0%;' />
     <div id="mtd">
        <?php
            $notic=$dato['not4'];
            $sql2="SELECT * FROM notics WHERE id=$notic";
     $resultado2=$conexion->query($sql2);
     $dato2=$resultado2->fetch_assoc();
     if(isset($_GET['usuario']))
    {
     echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticiasmt'>";
    }
    else
    {
        echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticiasmt'>";
    }
    echo "<div id='txmt'><p class='ctgmt'>".$dato2['categoria']."</p><br><p class='ttlmt'>".$dato2['titulo']."</p><br><p class='femt'>".$dato2['fecha']."</p><br>";
    $texto=$dato2['contenido'];
    $cort=str_split($texto);  
    $tama=count($cort);
    $qui=$tama-380;
    if($qui>=0)
    {
    $cont = array_slice($cort, 0, -$qui);
    }
    else
    {
        $cont=str_split($texto);
    }
    echo "<p class='contenmt'>";
    foreach ($cont as $letra) {
        echo $letra;
    }
    echo "</p></div>";
    $fo=$dato2['portada'];
        ?><img id="foto1"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>">
        </a>
    </div>
    <hr color='black'style='height:0.2px;width:100%;margin-left:0%;' />
     <div id="dsfnl">
        <?php
        $o=5;
        while($o<=6)
        {
            $notic=$dato['not'.$o];
            $sql2="SELECT * FROM notics WHERE id=$notic";
     $resultado2=$conexion->query($sql2);
     $dato2=$resultado2->fetch_assoc();
     if(isset($_GET['usuario']))
    {
        if($o==5)
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticiasfnn'>";
        }
        else
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticiasfn'>";
        }

    }
    else
    {
        if($o==5)
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticiasfnn'>";
        }
        else
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticiasfn'>";
        }
    }
    if($o==5)
    {
        
        $fo=$dato2['portada'];
        ?><img id="foto2"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" />
        <?php
        echo "<div id='txfn'><p class='ttlfn'>".$dato2['titulo']."</p><br>";
        $texto=$dato2['contenido'];
        $cort=str_split($texto);  
        $tama=count($cort);
        $qui=$tama-180;
        $cont = array_slice($cort, 0, -$qui);
        echo "<p class='contenfn'>";
        foreach ($cont as $letra) {
            echo $letra;
        }
        $o=$o+1;
        echo "...</p></div></a><hr size='2px'color='black'style='height:250px;' />";

    }
    else
    {
    echo "<div id='txfnn'><p class='ttlfn'>".$dato2['titulo']."</p><br>";
    $texto=$dato2['contenido'];
    $cort=str_split($texto);  
    $tama=count($cort);
    $qui=$tama-180;
    $cont = array_slice($cort, 0, -$qui);
    echo "<p class='contenfn'>";
    foreach ($cont as $letra) {
        echo $letra;
    }
    $o=$o+1;
    echo "...</p></div></a>";
        }
    }
        ?>
     </div>
    </div>
<?php
if(isset($_POST['cambio']))
{
    $cmb=$_POST['nuefe'];
     $sql="SELECT * FROM periodesp WHERE id=$cmb";
     $resultado=$conexion->query($sql);
     $dato=$resultado->fetch_assoc();
    ?>
    <script>document.getElementById("contenot").remove();</script>
    <div id="contenot">
    <div id="cabe"><div id="fepe"><?php echo $dato['fecha']; ?></div> <div id="ppr">Por: Praeda</div></div>
     <div id="titul">LA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VOZ</div>
     <img src="bast.png" id="debaj" />
     <div id="subttl">CONÉCTATE CON NUESTRA COMUNIDAD NEOSISTEMAS</div>
     <div id="trpr">
        <?php
        $i=1;
        while($i<=3)
        {
            $notic=$dato['not'.$i];
            $sql2="SELECT * FROM notics WHERE id=$notic";
     $resultado2=$conexion->query($sql2);
     $dato2=$resultado2->fetch_assoc();
     if(isset($_GET['usuario']))
    {
     echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticias'>";
    }
    else
    {
        echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticias'>";
    }
    echo "<p class='ttl'>".$dato2['titulo']."</p><br>";
    $texto=$dato2['contenido'];
    $cort=str_split($texto);  
    $tama=count($cort);
    $qui=$tama-180;
    $cont = array_slice($cort, 0, -$qui);
    echo "<p class='conten'>";
    foreach ($cont as $letra) {
        echo $letra;
    }
    $i=$i+1;
    echo "...</p></a>";
        }
        ?>
     </div>
     <hr color='black'style='height:0.2px;width:100%;margin-left:0%;' />
     <div id="mtd">
        <?php
            $notic=$dato['not4'];
            $sql2="SELECT * FROM notics WHERE id=$notic";
     $resultado2=$conexion->query($sql2);
     $dato2=$resultado2->fetch_assoc();
     if(isset($_GET['usuario']))
    {
     echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticiasmt'>";
    }
    else
    {
        echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticiasmt'>";
    }
    echo "<div id='txmt'><p class='ctgmt'>".$dato2['categoria']."</p><br><p class='ttlmt'>".$dato2['titulo']."</p><br><p class='femt'>".$dato2['fecha']."</p><br>";
    $texto=$dato2['contenido'];
    $cort=str_split($texto);  
    $tama=count($cort);
    $qui=$tama-380;
    if($qui>=0)
    {
    $cont = array_slice($cort, 0, -$qui);
    }
    else
    {
        $cont=str_split($texto);
    }
    echo "<p class='contenmt'>";
    foreach ($cont as $letra) {
        echo $letra;
    }
    echo "</p></div>";
    $fo=$dato2['portada'];
        ?><img id="foto1"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>">
        </a>
    </div>
    <hr color='black'style='height:0.2px;width:100%;margin-left:0%;' />
     <div id="dsfnl">
        <?php
        $o=5;
        while($o<=6)
        {
            $notic=$dato['not'.$o];
            $sql2="SELECT * FROM notics WHERE id=$notic";
     $resultado2=$conexion->query($sql2);
     $dato2=$resultado2->fetch_assoc();
     if(isset($_GET['usuario']))
    {
        if($o==5)
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticiasfnn'>";
        }
        else
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc=".$_GET['usuario']."'class='noticiasfn'>";
        }

    }
    else
    {
        if($o==5)
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticiasfnn'>";
        }
        else
        {
            echo "<a href='noticia.php?not=".$dato2['titulo']."&autor=".$dato2['usuario']."&prdc='class='noticiasfn'>";
        }
    }
    if($o==5)
    {
        
        $fo=$dato2['portada'];
        ?><img id="foto2"src="data:image/jpg;base64,<?php echo base64_encode($fo); ?>" />
        <?php
        echo "<div id='txfn'><p class='ttlfn'>".$dato2['titulo']."</p><br>";
        $texto=$dato2['contenido'];
        $cort=str_split($texto);  
        $tama=count($cort);
        $qui=$tama-180;
        $cont = array_slice($cort, 0, -$qui);
        echo "<p class='contenfn'>";
        foreach ($cont as $letra) {
            echo $letra;
        }
        $o=$o+1;
        echo "...</p></div></a><hr size='2px'color='black'style='height:250px;' />";

    }
    else
    {
    echo "<div id='txfnn'><p class='ttlfn'>".$dato2['titulo']."</p><br>";
    $texto=$dato2['contenido'];
    $cort=str_split($texto);  
    $tama=count($cort);
    $qui=$tama-180;
    $cont = array_slice($cort, 0, -$qui);
    echo "<p class='contenfn'>";
    foreach ($cont as $letra) {
        echo $letra;
    }
    $o=$o+1;
    echo "...</p></div></a>";
        }
    }
        ?>
     </div>
    </div>
    <?php
}
?>

</body>
<script>
    function cambiodef()
    {
        elef=document.getElementById("elefec");
        fechan=document.getElementById("fecam");
        txt=elef.value;
        vec=txt.split('#');
        vec.shift();
        fechan.value=vec;
    }
</script>
</html>