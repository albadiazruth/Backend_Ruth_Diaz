<?php
  require('./filtro.php');
  $filtroCiudad = $_GET['filtro']['Ciudad'];
  $filtroTipo = $_GET['filtro']['Tipo'];
  $filtroPrecio =  $_GET['filtro']['Precio'];
  $getData = leerDatos(); 

  filtrarDatos($filtroCiudad, $filtroTipo, $filtroPrecio,$getData);
 ?>
