<?php
 
error_reporting(E_ERROR);
error_reporting(0);
if ($_SERVER[HTTP_HOST]=='localhost') {
	$usuario = 'root';
	$senha = '';
} else {
	$usuario = 'interdes';
	$senha = '1nt3rd3s1gn3rs';
}
if(!mysql_connect("localhost","$usuario","$senha")) exit("<h1>Erro ao conectar com o banco de dados</h1>");
mysql_select_db("interdes_2014");

mysql_query("SET NAMES utf8");
header('Content-Type: text/html; charset=utf-8');	 
session_start();

?>