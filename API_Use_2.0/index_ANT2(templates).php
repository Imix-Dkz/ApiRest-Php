<?php
    require_once 'consts.php';
    require_once 'functions.php'; //<- Funciones estrictas AQUI

    $data = get_data(API_URL);
    $untilMessage = get_until_message($data['days_until']);
    
    //Sección de plantillas
    render_template('head', ['title'=>$data['title']]); //<= Aqui como sólo se ocupa el title
    //Antes de mandar el $data, hay que mandar tambien el $untilMessage
    render_template('main', array_merge($data, ["until_message"=> $untilMessage]) );
    render_template('styles');
?>
</html>