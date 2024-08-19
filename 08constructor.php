<?php 
    class Persona{
        public $nombre;
        private $edad;
        protected $estatura;

        public function __construct($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        public function asignarNombre($nuevoNombre){
            $this->nombre = $nuevoNombre;
        }

        public function imprimirNombre(){
            echo "Hola soy $this->nombre";
        }

        public function mostrarEdad(){
            $this->edad = 25;
            return $this->edad;
        }
    }

    $obj = new Persona('carlos');
    $obj->imprimirNombre();
?>