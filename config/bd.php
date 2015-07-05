<?php
$host = 'localhost';
$usuario = 'root';
$senha = 'sway105base587';
$bd = 'CondoEasy';

$mysqli = new mysqli($host, $usuario, $senha, $bd); 
if($mysqli -> connect_errno)
{
    echo"falha de conexão em (".$mysqli ->connect_errno.")".$mysqli -> connect_error;
}

?>  