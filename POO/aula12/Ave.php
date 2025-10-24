<?php 
    namespace aula12;
    require_once "Animal.php";
    class Ave extends Animal 
    {
        private $corPena;

        public function __construct($peso, $idade, $membros, $corPena)
        {
            $this->peso = $peso;
            $this->idade = $idade;
            $this->membros = $membros;
            $this->corPena = $corPena;
        }

        public function fazerNinho(): void
        {
            echo "<p>Construiu um ninho</p>";
        }

        public function locomover(): void
        {
            echo "<p>Voando</p>";
        }

        public function alimentar(): void
        {
            echo "<p>Comendo frutas</p>";
        }

        public function emitirSom(): void
        {
            echo "<p>Som de ave</p>";
        }


        /**
         * Get the value of corPena
         */ 
        public function getCorPena()
        {
                return $this->corPena;
        }
        /**
         * Set the value of corPena
         *
         * @return  self
         */ 
        public function setCorPena($corPena)
        {
                $this->corPena = $corPena;

                return $this;
        }
    }
    
?>