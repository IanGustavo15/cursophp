<?php 
    namespace aula12;
    require_once "Mamifero.php";
    class Canguru extends Mamifero
    {
        public function locomover(): void
        {
           echo "<p>Saltitando</p>";
        }
    }
    
?>