<?php 
    class Persona{
        public $nombre;//propiedad
        private $edad;
        protected $altura;

        public function asignarNombre($nuevoNombre){ //acciones o metodos 
            $this->nombre = $nuevoNombre;
        }

        public function saludar(){
            echo "hola soy $this->nombre";
        }

        public function mostrarEdad(){
            $this->edad = 20;
            return $this->edad;
        }
    }

    class Trabajador extends Persona{
        public $puesto;

        public function presentacion(){
            echo "Hola soy $this->nombre y soy $this->puesto";
        }
    }

    $trabajdor = new Trabajador;
    $trabajdor->asignarNombre('carlos silva');
    $trabajdor->puesto = 'programador';

    $trabajdor->presentacion();
?>