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

    $obj = new Persona();               //instancia o creacion de un obj
    $obj->asignarNombre('carlos');      //llamando un metodo
    echo $obj->mostrarEdad();
    echo $obj->nombre.PHP_EOL;          //imprimir una propiedad

    $obj1 = new Persona();
    $obj1->asignarNombre('camila');
    $obj1->saludar();
?>