<body>
    <!--pre style="font-size: 8px; overflow: scroll; height:250px;">
        <?php //= var_dump($data);?>
    </pre-->
    <h2>La próxima película de Marvel es...</h2>
    <section>
        <img src="<?= $data['poster_url']; ?>" width="45%" alt="<?= $data['title']; ?>"
            style="border-radius:16px">
    </section>
    <hgroup>
        <h3>La película <b><?=$data['title'];?></b>, <b><?= $untilMessage; ?></b> días</h3>
        <p>Fecha de estreno <b><?= $data['release_date']; ?></b></p>
        <p>La siguiente es: <?= $data['following_production']['title'] ;?> </p>
    </hgroup>
        
</body>