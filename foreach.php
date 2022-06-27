<?php
          if($_POST["buscar"]){
              
             
              $search = $_POST['IDcliente'] ;
            $ruta = "DB/Usuarios/Clientes/".$search;
             echo $ruta.' = '; 
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
                
                
                
                echo "si existo<br>";             
              }else{
                echo "chale no existo" ;
              }
                            
              
            
}
?>

