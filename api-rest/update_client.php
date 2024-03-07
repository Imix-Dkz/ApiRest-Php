<?php
    require_once('../inc/Client.class.php');

    //Se valida que se recibieron todos los parametros necesarios...
    if( $_SERVER['REQUEST_METHOD'] == 'PUT'
        && isset($_GET['id'], $_GET['email'], $_GET['name'], $_GET['city'], $_GET['telephone']))
        { //Si pasó todas estas validaciones se procede a llamar al funcion de la clase Cliente...
            Client::update_client($_GET['id'], $_GET['email'], $_GET['name'], $_GET['city'], $_GET['telephone']);
        }
    else{ header('HTTP/1.1 404 Datos INCORRECTOS'); }
?>