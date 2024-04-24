<?php
    /*  //Clases de PHP usando "Promoted Propertyes" = "PP"
        [NOTA]: Esto es exclusivo de PHP8
            * En versiones previas de PHP, no se puede hacer esto
            * En las clases se puede acceder a los tipos dependiendo de si la información es publica o privada
            * Tambien en que se se puede indicar que el uso y manipulación de ellas, se puede hacer con tipos estrictos
            * Se añadirá un metodo STATIC, un metodo estatico es aquel que NO REQUERIE de que el objeto de la clase instanseada este inicializado para poder ser invocado, siempre y cuando no use atributos o metodos de la misma
    */
    declare(strict_types=1);

    class SuperHero{
        /* //Se comenatan para dar paso al uso de PP
            public $name;
            public $powers;
            public  $planet;
        */
        /* //Constructor de clase NORMAL, PHP7<
            public function __construct($name, $powers, $planet)
            { //Constructor de clase normal
                $this->name = $name;
                $this->powers = $powers;
                $this->planet = $planet;
            }
        */
        //Constructor de clase con PP, PHP8>
        public function __construct(
            public string $name,
            public array $powers,
            public string $planet
        ){ //Los valores son automaticamente asignados a las variables en cuestion
        }
        
        //Sección de metodos de clase
        public function attack(){
            return "¡$this->name ataca con su poder de $this->powers!";
        }
        public function show_all(){
            return get_object_vars($this);
        }
        public function description(){
            $powers = implode(", ", $this->powers);

            return "$this->name es un superhéroe que viene del planeta $this->planet y tiene los siguientes poderes: $powers";
        }

        //Se grea un generador de super heroes, aleatorios
        public static function random(){
            $namesArr = ['Thor', 'Spiderman', 'Wolverine', 'Ironman', 'Hulk', 'Wasp', 'Dr.Strange', 'Black Panter', 'Valkiria', 'Iron-Heart', 'Black-Widow'];
            $powersArr = [
                ['Superfuerza', 'Volar', 'Rashios Laser'],
                ['Mediafuerza', 'Super Agilida', 'Telaraña'],
                ['Fuerza sobre humana', 'Regenaración rápida', 'Sentidos Mejorados'],
                ['Super Intelecto', 'Mucho Dinerp', 'Armaduras MUY técnologicas'],
                ['Super Rage Fuerza', 'Regeneración rápida', 'Radiación'],
                ['Fuerza Mejorada', 'Super Intelecto', 'Puede cambiar de tamaño'],
                ['Poderes Misticos', 'Conocimientos misticos', 'Lee mucho'],
                ['Superfuerza', 'Muuucha experiencia en combate', 'Alta longevidada'],
                ['Mediafuerza', 'Super Agilida', 'Espia experto']
            ];
            $planetsArr = ['Tierra', 'Krpton', 'Sakar', 'Asgard', '616', 'Nowhere'];

            $name = $namesArr[array_rand($namesArr)];
            $power = $powersArr[array_rand($powersArr)];
            $planet = $planetsArr[array_rand($planetsArr)];

            //echo "El superhéroe elegido es $name, que viene de $planet, y tiene los siguientes poderes: ".implode(", ", $power);

            return new self($name, $power, $planet);
        }
    }

    /* //Inicialización de la clase superheroe con un personaje
        $hero = new SuperHero();
        $hero->name = "Batman";
        $hero->powers = "inteligencia, habilidad y tecnología";
        $hero->planet = "tierra, Gotham";
    */
    //Ahora usando el constructor
    $sHero = new SuperHero("Superman", ["Superfuerza", "super calzones rojos", "rashios laser"], "Kypton");

    //Uso de metodos de clase
        //echo $sHero->description()."\n";
        //echo "\n";
        //var_dump($sHero->show_all());
    
    //Uso de method static
        //SuperHero::random();
        //Se puede usar un metodo estatico para crear/INSTANCEAR un objeto de la propía clase
        $randomHero = SuperHero::random();
        echo $randomHero->description();

?>