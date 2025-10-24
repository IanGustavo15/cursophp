<?php 
    namespace aula12;
    require_once "Reptil.php";
    class Tartaruga extends Reptil 
    {
        public function locomover(): void
        {
            echo "<p>Andando devagar</p>";
        }
    }
    
?>