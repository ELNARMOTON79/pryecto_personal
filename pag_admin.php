<?php
  session_start(); // Iniciar sesión
  include("contacto.php"); // Incluir el archivo de contacto
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Univerdidad de Colima</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
  <link rel="stylesheet" href="styles/style.css">
  <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Logo_de_la_Universidad_de_Colima.svg/2048px-Logo_de_la_Universidad_de_Colima.svg.png">
  <style>
    .contenido {
      display: none;
      padding: 20px;
    }
    .resultado-lista {
      list-style-type: none;
      padding: 0;
      margin: 0;
      text-align: center;
    }
    .resultado-lista li {
      margin-bottom: 10px;
    }
    .resultado-etiqueta {
      font-weight: bold;
    }
    .justificante-container {
      text-align: center;
    }

    .justificante-container form {
      display: inline-block;
      text-align: left;
    }
    .centrar-texto {
      text-align: center;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">

  <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
      <li id="bienvenido" class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-user-circle"></i>Bienvenido <?php echo $_SESSION['usuario']; ?></a>
      </li>
      <li class="nav-item">
        <a href="menu_usuarios.php"><i class="fas fa-home"></i>Dar de alta usuario</a>
      </li>
      
      <li class="nav-item">
        <a href="menu_maestros.php"><i class="fas fa-exclamation-triangle"></i>Dar de alta maestros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu_alumnos.php"><i class="fas fa-certificate"></i>Dar de alta alumnos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu_usuario.php"><i class="fas fa-certificate"></i>Inicidencias y Justificantes</a>
      </li>
      <li class="nav-item" id="cambiar-contrasena">
        <a class="nav-link" href="#"><i class="fas fa-key"></i>Cambiar contraseña</a>
      </li>
      <?php if (isset($_SESSION['nombre_usuario'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Cerrar sesión</a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>

<div id="contenido-bienvenido" class="contenido">
    <div style="text-align: center;">
        <h2>Bienvenido <?php echo $_SESSION['usuario']; ?>, Que vamos a hacer hoy?</h2>
    </div>
    </div>

<div id="contenido-cambiar-contrasena" class="contenido">
  <h1 style="text-align: center;font-family: 'Oswald', sans-serif; font-weight: bold;">Cambiar contraseña</h1><br>
  <div style="text-align: center;">
    <form method="POST" action="">
      <!-- Agregar campos del formulario -->
      <label>Nueva contraseña:</label>
      <input type="password" name="nueva_contrasena" id="nueva_contrasena" required><br><br>
      <label>Confirmar contraseña:</label>
      <input type="password" name="confirmar_contrasena" id="confirmar_contrasena" required><br><br>
      <input type="submit" name="cambiar_contrasena" value="Cambiar contraseña">
    </form>
  </div>
</div>

<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
<script src="scripts/script.js"></script>

<script>
  $(document).ready(function() {
    // Mostrar el contenido del justificante por defecto
    $('.contenido').hide();
    $('#contenido-bienvenido').show();
    $('.nav-item').removeClass('active');
    $('#bienvenido').addClass('active');

  });
</script>
</body>
</html>