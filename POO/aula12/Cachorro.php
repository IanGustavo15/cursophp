<?php 
    namespace aula12;
    require_once "Mamifero.php";
    class Cachorro extends Mamifero
    {
        public function emitirSom(): void
        {
            echo "<p>Latindo</p>";
        }
    }
    
?>