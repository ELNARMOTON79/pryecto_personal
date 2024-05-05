<?php
  session_start();
  include("../contacto.php");
  include("navbar_users.php");
?>
<div id="contenido-bienvenido" class="contenido">
  <div style="text-align: center;">
    <h2>Bienvenido <?php echo $_SESSION['usuario']; ?>, Que vamos a hacer hoy?</h2>
  </div>
</div>