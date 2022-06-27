<?php
  if($_POST){
    $admin = $_POST['usuario'] ;
    $pass = $_POST['pass']; 
    if($admin == "admin"){
      if($pass == "777"){
       
        echo "<script>window.location.assign('catalogoroot.html'); </script>";
      }
    }
  }
?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/index.css" />
	<title>Inicio de sesion</title>
 
</head>
<body >
	<div class="all">
		<div class="titulo">HOTEL <span>V</span></div>
		<form action="#" method="post">
            <div id="ErrorU"></div> 
			<div class="unir">
			<div class="iconusu"><img src="img/usuarioIcon.png" alt="usuario" ></div>
			<input required type="text" name="usuario" id="nameusu" placeholder="USUARIO"><br>
      
			<br>
			</div>
<div id="ErrorP"></div>
			<div class="unir">
			<div class="iconcon"><img src="img/conIcon.png" alt=""></div>
			<input 
			required 
			type="password"
			name="pass" 
			id="con" 
			placeholder="CONTRASE&Ntilde;A"
			/><br>
      
			</div>
      
			<input id="botonINICIAR" type="submit" value="Iniciar" >
		</form>
		
	</div>
 <script>
    const $ = id => document.getElementById(id)
    function  err(what){
      var error ; 
      if(what == 'usu'){
        error = $('ErrorU') ;
        error.innerHTML = "USUARIO INCORRECTO" ;
        error.style.color ="red" ;
      }else{
        error = $('ErrorP');
        error.innerHTML = "CONTRASE&Ntilde;A INCORRECTA";
        error.style.color ="red" ;
      }
      setTimeout(function(){
        error.innerHTML = ""; 
      },2000);
    }
    <?php
      if($_POST){
        if($admin != "admin"){
          echo "err('usu');";
        }else if($pass != "777"){
          echo "err('pass');";
        }
      }
      
    ?>
  </script>
</body>
</html>