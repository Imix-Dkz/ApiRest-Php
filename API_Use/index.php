<?php
    //Se inicialia API_URL con su curl-handler
    const API_URL = "https://www.whenisthenextmcufilm.com/api";
    $ch = curl_init(API_URL);
    //Se indica que se recibe el resultado de la petición y no se muestra en pantalla
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //Se ejecuta la petición y garda resultado...
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);
    //var_dump($data);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MARVEL API USE</title>
    <meta name="description" content="La próxima película de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
    <style>
        :root{ color-scheme: light dark; }
        body{
            display: grid;
            place-content: center;
            text-align: center;
            margin: auto;
            margin-top: 15px;

        }
        section{
            display: flex;
            justify-content: center;
            text-align: center;
        }
        hgroup{
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>
<body>
    <!--pre style="font-size: 8px; overflow: scroll; height:250px;">
        <?php //= var_dump($data);?>
    </pre-->
    <h2>La próxima película de Marvel es...</h2>
    <section>
        <img src="<?= $data['poster_url']; ?>" width="65%" alt="<?= $data['title']; ?>"
            style="border-radius:16px">
    </section>
    <hgroup>
        <h3>La película <b><?=$data['title'];?></b>, se estrena en <b><?= $data['days_until']; ?></b> días</h3>
        <p>Fecha de estreno <b><?= $data['release_date']; ?></b></p>
        <p>La siguiente es: <?= $data['following_production']['title'] ;?> </p>
    </hgroup>
        
</body>
</html>