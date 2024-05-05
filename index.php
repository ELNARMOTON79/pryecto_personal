<?php
session_start();
include("contacto.php");

if(isset($_POST["log_in"])) {
  $usuario = $_POST['usuario'];
  $contra = $_POST['contra'];

  $contacto = new Contacto();
  $contacto = new Contacto();
  $loginResult = $contacto->login($usuario, $contra);
  if ($loginResult > 0) {
	  $_SESSION['usuario'] = $usuario;
	  header("Location: pag_admin.php");
  } else {
	  echo "<script>alert('Usuario o contraseña incorrectos');</script>";
  }  
  
}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta charset="utf-8"/>
        <title>Universidad de Colima | Log In</title>
		<style>
			#escudo,body{background-size:contain;background-position:center center}#main,body,html{height:100%}#main h1,body{color:#444;margin:0}#main h1,#user-agreement{padding-top:15px;padding-bottom:15px}#logins,#user-agreement{width:100%;max-width:400px;margin:0 auto}#logins,#main{display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;position:relative}#escudo,#logins input{outline:0}#main h1,input.button{font-weight:400;text-align:center}*{font-family:'Open Sans',Arial,sans-serif!important;-webkit-box-sizing:border-box;box-sizing:border-box}body{background-color:#e0e0e0!important;font-size:14px;line-height:1.4286;padding:0 15px;min-height:100%}#escudo{background-image:url(data:image/png;base64,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);background-repeat:no-repeat;height:145px;margin-bottom:15px}#main{display:flex;-webkit-flex-direction:column;flex-direction:column;min-height:550px}#main h1{font-size:35px}#main::after,#main::before{-webkit-box-flex:1;box-flex:1;-webkit-flex-grow:1;flex-grow:1;content:'';display:block}#user-agreement{text-align:center}a:link,a:visited{color:#693;text-decoration:underline}a:hover{color:#466423}#logins{display:flex;-webkit-flex-direction:column;flex-direction:column;background-color:#FFF;border:1px solid #C7CACE;-webkit-flex-shrink:0;flex-shrink:0;-webkit-border-radius:8px;border-radius:8px;box-shadow:none;min-height:0;z-index:2;overflow:hidden;padding:48px 40px 36px}#logins input.input,input.button{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;width:100%}#logins input.input{display:block;height:calc(2.875rem + 2px);margin-bottom:15px;border-radius:.2rem;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}input.button{border-radius:.3rem;color:#FFF;background-color:#693;display:inline-block;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:2px solid #693;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;cursor:pointer}input.button:hover{color:#FFF;background-color:#466423;border-color:#466423}
		</style>
	</head>
	<body>
		<div id="main">
			<h1>Log In</h1>
			<div id="logins">
				<div class="wifi-symbol">
			        <div class="wifi-circle first"></div>
			        <div class="wifi-circle second"></div>
			        <div class="wifi-circle third"></div>
		        </div>
				<div id="escudo"></div>
				<div class="wifi-symbol2">
			        <div class="wifi-circle first"></div>
			        <div class="wifi-circle second"></div>
			        <div class="wifi-circle third"></div>
		        </div>
				<form method="post" autocomplete="off">
					<input type="text" name="usuario" class="input" accesskey="u" size="25" value=""  placeholder="Usuario">
					<input type="password" name="contra" class="input" accesskey="p" size="25"   value=""  placeholder="Contrase&ntilde;a">
					<input name="log_in" type="submit" class="button">
				</form>
			</div>
			<p id="user-agreement">Nota: Los datos de acceso son los mismos de tu correo Universitario. ( No incluir el @ucol.mx )</p>
		</div>
	</body>
	<script src="scripts/index_script.js"></script>
</html>
