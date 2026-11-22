<?php

define('SERVIDOR','db.fr-roub1.bengt.wasmernet.com');
define('USUARIO','user_6c1fce9a');
define('PASSWORD','pw_OnVFiNPtnyWPDYPxkCzr5sbdy2xVBdF0');
define('BD','sisgestionescolar');

define('APP_NAME','SITEMA DE GESTIÓN ESCOLAR');
define('APP_URL','https://sisgestionescolar.wasmer.app/');
define('KEY_API_MAPS','');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor,USUARIO,PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    print_r($e);
    echo "Error no se pudo conectar a la base de datos";
}

date_default_timezone_set("America/Lima");
$fechaHora = date('Y-m-d H:i:s');

$fecha_actual = date('Y-m-d');
$dia_actual = date('d');
$mes_actual = date('m');
$alo_actual = date('Y');

$estado_de_registro = '1';
