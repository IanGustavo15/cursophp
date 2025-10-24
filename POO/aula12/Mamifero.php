<?php 
    namespace aula12;
    require_once "Animal.php";
    class Mamifero extends Animal
    {
        protected $corPelo;
        
        public function locomover(): void
        {
           echo "<p>Correndo</p>";
        }

        public function alimentar(): void
        {
            echo "<p>Mamando</p>";
        }

        public function emitirSom(): void
        {
            echo "<p>Som de mamífero</p>";
        }

        /**
         * Get the value of corPelo
         */ 
        public function getCorPelo()
        {
                return $this->corPelo;
        }
        /**
         * Set the value of corPelo
         *
         * @return  self
         */ 
        public function setCorPelo($corPelo)
        {
                $this->corPelo = $corPelo;

                return $this;
        }
    }
    
?>