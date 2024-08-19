<?php 
    class UnaClase{

        //función es un tipo especial al que se puede acceder y llamar sin crear una instancia de un objeto de la clase en la que está definida. Esto significa que la función está directamente asociada con la clase en sí, en lugar de con objetos individuales creados a partir de la clase.
        public static function unMetodo(){
            echo "Hola soy un metodo estatico";
        }
    }

    //Esta línea llama al unMetodo()método directamente en la UnaClaseclase utilizando el nombre de la clase seguido del operador de dos puntos (::) y el nombre del método. Como es un método estático, no se requiere la creación de instancias de objetos.
    UnaClase::unMetodo();
?>