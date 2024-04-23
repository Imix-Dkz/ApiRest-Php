<?php
    /* [NOTAS DE ESTE EJEMPLO]
        * Se usarán tipos estrictos en función para su recepción de datos y sus return
        * Se usará snake_case, ya que es el usado por defecto para los metodos NATIVOS de PHP
        * 
    */
    //Habilitación de tipos ESTRICTOS
    declare(strict_types=1); //<- Se tiene  que mantener a nivel de archivo, NO GLOBAL

    //Se inicialia API_URL con su curl-handler
    const API_URL = "https://www.whenisthenextmcufilm.com/api";

    function get_data(string $url):array
    { //Modo SIMPLIFICADO, solo para cuando es GET de datos
        $result = file_get_contents($url);
        $data = json_decode($result, true);

        return $data;
    }

    function get_until_message(int $days):string{
        return match(true){
            $days == 0   => "¡Hoy se estrena! 🥳",
            $days == 1   => "Mañana se estrena 😜",
            $days < 7    => "Se estrena está semana 😦",
            $days < 30   => "Estamos en el mes de estreno 📅",
            default     => "$days hasta el estreno",
        };
    }
?>