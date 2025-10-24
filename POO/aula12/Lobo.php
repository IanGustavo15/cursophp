<?php 
    namespace aula12;
    require_once "Mamifero.php";
    class Lobo extends Mamifero 
    {
        public function emitirSom(): void
        {
            echo "<p>Uivando</p>";
        }
    }
    
?>