<?php
/*GLOBAL*/ 
  $ruta = "DB/Usuarios/Clientes/"; 
  $id = fopen("id","r+");
  $ID = fgets($id);
  echo $ID ;

 if($_POST){
    $ClientID = $_POST["IDcliente"] ;
    $Name = $_POST["Nombre"];
    $AP = $_POST["ApellidoPA"] ;
    $AM = $_POST["ApellidoMA"] ;
    $Direccion = $_POST["Direccion"] ;
    $Cel = $_POST["TELCEL"] ;
    $TelFijo = $_POST["TELF"] ;
    $correo = $_POST["Correo"] ;
    $obs = $_POST["obs"] ;
   if(!file_exists($ruta.$ID)){
     mkdir($ruta.$ID,0700); 
     $crear = fopen($ruta.$ID."/Nombre","w+");
     fputs($crear,$Name);
     fclose($crear); 
     $crear = fopen($ruta.$ID."/AP","w+");
     fputs($crear,$AP);
     fclose($crear); 
     $crear = fopen($ruta.$ID."/AM","w+");
     fputs($crear,$AM);
     fclose($crear); 
     $crear = fopen($ruta.$ID."/Direccion","w+");
     fputs($crear,$Direccion);
     fclose($crear); 
    $crear = fopen($ruta.$ID."/Cel","w+");
     fputs($crear,$Cel);
     fclose($crear); 
    $crear = fopen($ruta.$ID."/TelFijo","w+");
     fputs($crear,$TelFijo);
     fclose($crear); 
       $crear = fopen($ruta.$ID."/correo","w+");
     fputs($crear,$correo);
     fclose($crear); 
      $crear = fopen($ruta.$ID."/obs","w+");
     fputs($crear,$obs);
     fclose($crear); 
   }else{
     echo "Algo salio mal :c" ;
   }
   // incremento de id  ; 
  fclose($id);
  $id = fopen("id",'w+');
  $ID ++; 
  fputs($id,$ID);  
  fclose($id);   
   echo "<script>window.location.assign('CatalogoC.php'); </script>";
 }  
  
   
?>