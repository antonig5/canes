<?php
include_once 'apiOrden.php';
$api = new ApiOrden();
if (isset($_GET['numero_orden'])) {
    $id = $_GET['numero_orden'];

    if (is_numeric($id)) {
        $api->getById($id);
    } else {
        $api->error('El id es incorrecto');
    }
} else {
    $api->getAll();
}
