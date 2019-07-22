<?php
$logged = true;
if($logged == false) {
?>
  <header>
    <a href="./" class="navbar_title">Mi Horario</a>
    <nav>
      <a class="item-nav" href="./">Inicio</a>
      <a class="item-nav" href="./acceso">Acceso</a>
      <a class="item-nav" href="./registro">Registro</a>
    </nav>
  </header>
<?php } else if ($logged == true) { ?>
  <header>
  <a href="./eventos" class="navbar_title">Mi Horario</a>
  <nav>
    <a class="item-nav" href="./eventos">Eventos</a>
    <a class="item-nav" href="./actividades">Actividades</a>
    <a class="item-nav" href="./perfil">Perfil</a>
  </nav>
</header>
<?php } ?>