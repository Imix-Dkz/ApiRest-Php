<?php
    require_once 'consts.php';
    require_once 'functions.php'; //<- Funciones estrictas AQUI

    $data = get_data(API_URL);
    $untilMessage = get_until_message($data['days_until']);
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    require_once 'sections/head.php'; //<- Aqui tambien se usan los estilos 
    require_once 'sections/main.php';
?>
</html>