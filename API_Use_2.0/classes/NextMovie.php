<?php
 declare(strict_types=1);

 class NextMovie{
    public function __construct( //NextMovie constructor
        private int $days_until,
        private string $title,
        private array $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview
    ){}

    //Metodos de la clase
        public function get_until_message():string{
            $days = $this->days_until;

            return match(true){
                $days == 0   => "¡Hoy se estrena! 🥳",
                $days == 1   => "Mañana se estrena 😜",
                $days < 7    => "Se estrena está semana 😦",
                $days < 30   => "Estamos en el mes de estreno 📅",
                default     => "$days días hasta el estreno",
            };        
        }
        public function get_data(){
            return get_object_vars($this);
        }

    //STATIC Functións, NO CREQUIEREN contructor
        public static function fetch_and_create_movie(string $api_url):NextMovie{
            $result = file_get_contents($api_url);
            $data = json_decode($result, true);

            return new self(
                $data['days_until'],
                $data['title'],
                $data['following_production'] ?? 'Desconocido',
                $data['release_date'],
                $data['poster_url'],
                $data['overview'],
            );

            //return $data;
        }
        //Para no depender de la "funciones.php"
        public static function render_template(string $template, array $data=[])
        { //Aqui se realizará una validación de las plantillas a renderizar
            extract($data);
            require_once "templates/$template.php";
        }
    
 }



?>