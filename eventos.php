<?php
    header('content-type: application/json');
    $pdo=new PDO('mysql:host=127.0.0.1;dbname=calendario;charset=UTF8','root','');

// Seleccionar los eventos del calendario
$sentenciaSQL = $pdo ->prepare("SELECT * FROM eventos");
$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);

?>