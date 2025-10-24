<?php 
    namespace aula12;
    require_once "Animal.php";
    class Peixe extends Animal
    {
        private $corEscama;


        public function soltarBolha(): void
        {
            echo "<p>Soltou uma bolha</p>";
        }

        public function locomover(): void
        {
            echo "<p>Nadando</p>";
        }
        public function alimentar(): void
        {
            echo "<p>Comendo substâncias</p>";
        }

        public function emitirSom(): void
        {
            echo "<p>Peixe não faz som</p>";
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