<?php
    require_once('../inc/Client.class.php');

    if( $_SERVER['REQUEST_METHOD'] == 'GET' )
    {   //Se valida que SÓLO el metodo
        Client::get_all_clients();
    }
    
?>