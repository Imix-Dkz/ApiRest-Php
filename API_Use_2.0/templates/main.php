<body>
    <div id="loader" align="center">
        <img src="server_loading.gif" width="45%" alt="">
    </div>

    <!--pre style="font-size: 8px; overflow: scroll; height:250px;">
        <?php //= var_dump($data);?>
    </pre-->
    <h2>La próxima película de Marvel es...</h2>
    <section>
        <img src="<?=$poster_url?>" width="45%" alt="<?=$title?>"
            style="border-radius:16px">
    </section>
    <hgroup>
        <h3>La película <b><?=$title?></b>, <b><?=$until_message?></b></h3>
        <p>Fecha de estreno <b><?=$release_date?></b></p>
        <p>La siguiente es: <?=$following_production['title']?> </p>
    </hgroup>
        
</body>