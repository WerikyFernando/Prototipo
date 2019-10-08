<?php

$get = isset($_GET['pagina'])? $_GET['pagina']:'';
require 'libs/funcs.php';
require 'libs/config.php';
require 'paginas/cabecalho.php';
require 'paginas/home.php';


navega($get);


 ?>
