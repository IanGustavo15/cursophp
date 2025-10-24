<?php 
    namespace aula12;
    require_once "Animal.php";
    class Reptil extends Animal
    {
        private $corEscama;

        public function locomover(): void
        {
            echo "<p>Rastejando</p>";
        }

        public function alimentar(): void
        {
            echo "<p>Comendo vegetais</p>";
        }

        public function emitirSom(): void
        {
            echo "<p>Som de réptil</p>";
        }

        /**
         * Get the value of corEscama
         */ 
        public function getCorEscama()
        {
                return $this->corEscama;
        }
        /**
         * Set the value of corEscama
         *
         * @return  self
         */ 
        public function setCorEscama($corEscama)
        {
                $this->corEscama = $corEscama;

                return $this;
        }
    }
    
?>