<?php
$host = 'localhost';
$usuario = 'root';
$senha = 'sway105base587';
$bdname = 'CondoEasy';

$conexao = mysql_connect($host, $usuario, $senha);
$bd=  mysql_select_db($bdname);

$consulta = mysql_query("select * from usuario");
echo mysql_num_rows($consulta);

?>  