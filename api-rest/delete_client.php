<?php
    require_once('../inc/Client.class.php');

    //Se valida que se recibieron todos los parametros necesarios... en este caso,sólo el ID
    if( $_SERVER['REQUEST_METHOD'] == 'DELETE'
        && isset($_GET['id']) )
        { //Si pasó todas estas validaciones se procede a llamar al funcion de la calse Cliente...
            Client::delete_client_by_id($_GET['id']);
        }
?>