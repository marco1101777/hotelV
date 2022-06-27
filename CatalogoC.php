<?php
  if($_POST['buscar2']){
    $Aact = true ;  
  }else{
    $Aact = false ;
  }
if($_POST['buscar3']){
  $Ade = true ;
}else{
  $Ade = false  ;
}
if($_POST['buscar']){
  $si = true ;
}else{
  $si = false  ;
}
  
          if($_POST["buscar"] || $_POST['buscar2'] || $_POST['buscar3'] ){
              
             
            $search = $_POST['IDcliente'] ;
            $ruta = "DB/Usuarios/Clientes/".$search;
            if(file_exists($ruta)){
                $abrir = fopen($ruta."/Nombre","r+");
                $nombre = fgets($abrir); 
                fclose($abrir); 
                $abrir =fopen($ruta."/AP","r+");
                $AP =fgets($abrir);
                fclose($abrir); 
                 $abrir =fopen($ruta."/AM","r+");
                $AM =fgets($abrir);
                fclose($abrir); 
                 $abrir =fopen($ruta."/Direccion","r+");
                $DIR =fgets($abrir);
                fclose($abrir); 
                $abrir =fopen($ruta."/Cel","r+");
                $Cel =fgets($abrir);
                fclose($abrir); 
                $abrir =fopen($ruta."/TelFijo","r+");
                $TEL =fgets($abrir);
                fclose($abrir); 
                $abrir =fopen($ruta."/correo","r+");
                $correo =fgets($abrir);
                fclose($abrir); 
                $abrir =fopen($ruta."/obs","r+");
                $obs =fgets($abrir);
                fclose($abrir); 
                
                
                
            }else {
              echo "<script>alert('usuario no encontrado');</script>";
   
            }
                            
              
            
}
if($_POST['delete']){
  $ruta = "DB/Usuarios/Clientes/";
  $eliminar = $_POST['IDcliente'];
  $ruta .=  $eliminar ;
  system("rm -r ".$ruta);
}
  if($_POST ['actualizar']){
    $ruta = "DB/Usuarios/Clientes/"; 
    $ClientID = $_POST["IDcliente"] ;
    $Name = $_POST["Nombre"];
    $AP = $_POST["ApellidoPA"] ;
    $AM = $_POST["ApellidoMA"] ;
    $Direccion = $_POST["Direccion"] ;
    $Cel = $_POST["TELCEL"] ;
    $TelFijo = $_POST["TELF"] ;
    $correo = $_POST["Correo"] ;
    $obs = $_POST["obs"] ;
    $ruta .= $ClientID;
   if(file_exists($ruta)){
     $crear = fopen($ruta."/Nombre","w+");
     fputs($crear,$Name);
     fclose($crear); 
     $crear = fopen($ruta."/AP","w+");
     fputs($crear,$AP);
     fclose($crear); 
     $crear = fopen($ruta."/AM","w+");
     fputs($crear,$AM);
     fclose($crear); 
     $crear = fopen($ruta."/Direccion","w+");
     fputs($crear,$Direccion);
     fclose($crear); 
    $crear = fopen($ruta."/Cel","w+");
     fputs($crear,$Cel);
     fclose($crear); 
    $crear = fopen($ruta."/TelFijo","w+");
     fputs($crear,$TelFijo);
     fclose($crear); 
       $crear = fopen($ruta."/correo","w+");
     fputs($crear,$correo);
     fclose($crear); 
      $crear = fopen($ruta."/obs","w+");
     fputs($crear,$obs);
     fclose($crear); 
   }else{
     echo  $ruta.$ClientID;
     echo "<script>alert('usuario no encontrado');</script>" ;
   }
  } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/CC.css">
  <link rel="shortcut icon" href="img/xd.jpeg">
	<title>Clientes</title>
</head>
<body>
	<div class='all'>
		<!-- <div class="titulo">Catalogo Usuarios</div> -->
		<div class="varN">
			<div class="opcRegistro" id="opc1" onclick="ocultar('1','opc1');"><div class="icon"></div>Registrar</div>
			<div class="opcEliminar" id="opc2"onclick="ocultar('2','opc2');"><div class="icon"></div>Eliminar</div>
			<div class="opcActualizar" id="opc3"onclick="ocultar('3','opc3');"><div class="icon"></div>Actualizar</div>
			<div class="opcConsulta" id="opc4" onclick="ocultar('4','opc4');"><div class="icon"></div>Consulta</div>
			<div class="opcReporte" id="opc5" onclick="ocultar('5','opc5');"><div class="icon"></div>Reporte</div>
      <div class="volver"  onclick="renviar('catalogoroot.html');"><div class="icon"><img src="img/back.png"></div>Regresar</div>
		</div>
		<div class="registrar" id ="1">
			<span class = "titulo">Registrar</span>
			<form action="registre.php" method="post">
				
				<input type="text" name="Nombre" id="" placeholder="NOMBRE(S)"><br>
				<input type="text" name="ApellidoPA" id="" placeholder="APELLIDO PAT"><br>
				<input type="text" name="ApellidoMA" id="" placeholder="APELLIDO MAT"><br>
				<input type="text" name="Direccion" id="" placeholder="DIRECCION"><br>
				<input type="text" name="TELCEL" id="" placeholder="TEL CELULAR"><br>
				<input type="text" name="TELF" id="" placeholder="TEL FIJO"><br>
				<input type="text" name="Correo" id="" placeholder="CORREO"><br>
				<textarea name="obs" id="" cols="50" rows="10" placeholder="OBSERVACIONES"></textarea><br>
				<input type="submit" value="REGISTRAR" id="enviar" name="registrar">
				<input type="reset" value="CANCELAR" id="cancelar">
			</form>
		</div>
		<div class="eliminar" id="2">
			<span class = "titulo">Eliminar</span>
			<form action="#" method="post">
					<input type="text" name="IDcliente" id="" placeholder="ID Cliente"  value="<?php echo $search;?>" required><br>
				<input type="text" name="Nombre" id="" placeholder="NOMBRE(S)" value="<?php echo $nombre ;?>" ><br>
				<input type="text" name="ApellidoPA" id="" placeholder="APELLIDO PAT" value="<?php echo $AP ;?>"><br>
				<input type="text" name="ApellidoMA" id="" placeholder="APELLIDO MAT" value="<?php echo $AM ;?>"><br>
				<input type="text" name="Direccion" id="" placeholder="DIRECCION" value="<?php echo $DIR;?>"><br>
				<input type="text" name="TELCEL" id="" placeholder="TEL CELULAR" value="<?php echo $Cel;?>"><br>
				<input type="text" name="TELF" id="" placeholder="TEL FIJO" value="<?php echo $TEL;?>" ><br>
				<input type="text" name="Correo" id="" placeholder="CORREO" value="<?php echo $correo; ?>"><br>
				<textarea name="obs" id="" cols="30" rows="10" placeholder="OBSERVACIONES" ><?php echo $obs;?></textarea><br>
				<input type="submit" value="BUSCAR" id="enviar" name="buscar3">
				<input type="submit" value="ELIMINAR" id="cancelar" name="delete" > 
				<input type="reset" value="CANCELAR" id="cancelar">
			</form>
		</div>
		<div class="Actualizar" id ="3">
			<span class = "titulo">Actualizar</span>
			<form action="#" method="post" name="act">		
        <input type="text" name="IDcliente" id="" placeholder="ID Cliente"  value="<?php echo $search;?>" ><br>
				<input type="text" name="Nombre" id="" placeholder="NOMBRE(S)" value="<?php echo $nombre ;?>" ><br>
				<input type="text" name="ApellidoPA" id="" placeholder="APELLIDO PAT" value="<?php echo $AP ;?>" ><br>
				<input type="text" name="ApellidoMA" id="" placeholder="APELLIDO MAT" value="<?php echo $AM ;?>" ><br>
				<input type="text" name="Direccion" id="" placeholder="DIRECCION" value="<?php echo $DIR;?>" ><br>
				<input type="text" name="TELCEL" id="" placeholder="TEL CELULAR" value="<?php echo $Cel;?>" ><br>
				<input type="text" name="TELF" id="" placeholder="TEL FIJO" value="<?php echo $TEL;?>" ><br>
				<input type="text" name="Correo" id="" placeholder="CORREO" value="<?php echo $correo; ?>" ><br>
				<textarea name="obs" id="" cols="30" rows="10" placeholder="OBSERVACIONES" ><?php echo $obs;?></textarea><br>
				<input type="submit" value="BUSCAR" id="enviar" name="buscar2">
				<input type="submit" value="ACTUALIZAR" id="enviar" name="actualizar">
				<input type="reset" value="CANCELAR" id="cancelar">
			</form>
		</div>
		<div class="consulta" id="4">
			<span class = "titulo">Consulta</span>
			<form action="#" method="post" name="consulta">
        
				<input type="text" name="IDcliente" id="" placeholder="ID Cliente"  value="<?php echo $search;?>" required><br>
				<input type="text" name="Nombre" id="" placeholder="NOMBRE(S)" value="<?php echo $nombre ;?>" ><br>
				<input type="text" name="ApellidoPA" id="" placeholder="APELLIDO PAT" value="<?php echo $AP ;?>"><br>
				<input type="text" name="ApellidoMA" id="" placeholder="APELLIDO MAT" value="<?php echo $AM ;?>"><br>
				<input type="text" name="Direccion" id="" placeholder="DIRECCION" value="<?php echo $DIR;?>"><br>
				<input type="text" name="TELCEL" id="" placeholder="TEL CELULAR" value="<?php echo $Cel;?>"><br>
				<input type="text" name="TELF" id="" placeholder="TEL FIJO" value="<?php echo $TEL;?>" ><br>
				<input type="text" name="Correo" id="" placeholder="CORREO" value="<?php echo $correo; ?>"><br>
				<textarea name="obs" id="" cols="30" rows="10" placeholder="OBSERVACIONES" ><?php echo $obs;?></textarea><br>
				<input type="submit" value="BUSCAR" id="enviar" name="buscar">
				<input type="reset" value="CANCELAR" id="cancelar">
			</form>
		</div>
		<div class="reporte" id="5">
			<span class = "titulo">Reporte</span>
			<center>
 <?php
$rutaFile = "DB/Usuarios/Clientes/" ;
$ID = fopen("id","r+");
$Numid = 1 ;
$fin = fgets($ID); 
	echo "	<table border=1  id ='tabla'>
					<tr id='first'>
					<td>ID CLIENTE</td>
					<td>NOMBRE(S)</td>
					<td>AP_PATERNO</td>
					<td>AP_MATERNO</td>
					<td>DIRECCION</td>
					<td>CELULAR</td>
					<td>TEL_FIJO</td>
					<td>CORREO</td>
					<td>OBSERVACIONES</td>
					</tr>";
for($i = 1;$i < $fin  ;$i++){
  
  if(file_exists($rutaFile.$i)){
  echo "<tr>" ;
  echo "<td>".$i."</td>";
  $abrir = fopen($rutaFile.$i."/Nombre","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  $abrir = fopen($rutaFile.$i."/AP","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  $abrir = fopen($rutaFile.$i."/AM","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  $abrir = fopen($rutaFile.$i."/Direccion","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  $abrir = fopen($rutaFile.$i."/Cel","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  $abrir = fopen($rutaFile.$i."/TelFijo","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  $abrir = fopen($rutaFile.$i."/correo","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  $abrir = fopen($rutaFile.$i."/obs","r+"); 
  echo "<td>".fgets($abrir)."</td>";
  fclose($abrir); 
  
  echo "</tr>";
  }
}
echo "</table>";
 ?>
			</center>

		</div>

	</div>

<script src="js/script.js"></script>
  <script >
<?php if($_POST['buscar']){
   if($si){ 
     echo "ocultar('4','opc4');";  
   }
 }
   if($_POST['buscar2']){
     if($Aact){
       echo "ocultar('3','opc3');";
     }
   }
     if($_POST['buscar3']){
       if($Ade){
         echo "ocultar('2','opc2');";
       }
     }
   ?></script>
</body>
</html>