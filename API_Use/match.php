<?php
    $name = "Imix";
    $isDev = true;
    $age = 34;

    $isOld = $age > 40;

    //Logo
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-png-transparent.png');

    $output = "Hola $name, con edad de $age. 😋";
    $outputAge = match (true) {
        $age < 2    => "Eres un bebé, $name 👶",
        $age < 10   => "Eres un niño, $name 👦",
        $age < 18   => "Eres un adolecente, $name 🤟",
        $age == 18  => "Eres mayor de edad, $name 🍺",
        $age < 40   => "Eres un adulto Joven, $name 🧑",
        $age < 60   => "Eres un adulto viejo, $name 👴",
        default => "Hueles a madera... 🤮",
    }
?>
<style>
    :root{ color-scheme: light dark; }
    body{
        display: grid;
        place-content: center;
    }
</style>

<h2><?=$outputAge;?></h2>
<img src="<?=LOGO_URL;?>" alt="PHP Logo" width="200px">
<h1><?=$output;?></h1>
