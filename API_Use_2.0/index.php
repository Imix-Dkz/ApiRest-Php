<?php
    require_once 'consts.php';
    require_once 'functions.php'; //<- Funciones estrictas AQUI
    require_once 'classes/NextMovie.php';

    $next_movie = NextMovie::fetch_and_create_movie(API_URL);
    $next_movie_data = $next_movie->get_data();
    
    //Sección de plantillas
    render_template('head', ['title'=>$next_movie_data['title']]); //<= Aqui como sólo se ocupa el title
    //Antes de mandar el $next_movie_data, hay que mandar tambien el $untilMessage
    render_template('main', array_merge( $next_movie_data,
        ['until_message' => $next_movie->get_until_message()]
    ));
    render_template('styles');
?>
</html>