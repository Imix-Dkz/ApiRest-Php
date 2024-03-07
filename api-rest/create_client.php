<?php
    require_once('../inc/Client.class.php');

    //Se valida que se recibieron todos los parametros necesarios...
    if( $_SERVER['REQUEST_METHOD'] == 'POST'
        && isset($_GET['email']) && isset($_GET['name']) && isset($_GET['city']) && isset($_GET['telephone']))
        { //Si pasó todas estas validaciones se procede a llamar al funcion de la calse Cliente...
            Client::create_client($_GET['email'], $_GET['name'], $_GET['city'], $_GET['telephone']);
        }
?>