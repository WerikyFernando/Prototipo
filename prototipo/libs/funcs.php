<?php
function navega($pagina){
  switch ($pagina) {
    case 'home':
    require 'paginas/home.php';
    break;


  }
}
function conecta(){
  return mysqli_connect(HOST, USER, PASS, BANCO);
}
?>
