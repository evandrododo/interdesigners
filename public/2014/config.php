<?php

error_reporting(E_ERROR);
error_reporting(0);
if ($_SERVER[HTTP_HOST]=='localhost') {
	$usuario = 'root';
	$senha = '';
} else {
	$usuario = 'root';
	$senha = 'h4t3th3l1f3';
}
if(!mysql_connect("localhost","$usuario","$senha")) exit("<h1>Erro ao conectar com o banco de dados</h1>");
mysql_select_db("interdes_2014");

mysql_query("SET NAMES utf8");
header('Content-Type: text/html; charset=utf-8');	 
session_start();

//PHPIDS
require_once 'IDS/Init.php';
$request = array(
	'REQUEST' => $_REQUEST,
	'GET' => $_GET,
	'POST' => $_POST,
	'COOKIE' => $_COOKIE
);
$init = IDS_Init::init(dirname(__FILE__) . '/IDS/Config/Config.ini.php');
$init->config['General']['base_path'] = dirname(__FILE__) . '/IDS/';
$init->config['General']['use_base_path'] = true;
$init->config['Caching']['caching'] = 'none';
$ids = new IDS_Monitor($request, $init);
$result = $ids->run();
if (!$result->isEmpty()) {
	echo $result;
	die();
}

?>
