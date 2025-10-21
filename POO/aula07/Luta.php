<?php 
    class Luta
    {
        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos
        public function marcarLuta(): void
        {
            
        }
        public function lutar(): void
        {
            
        }
        

        // Métodos Especiais
        
        /**
         * Get the value of desafiado
         */ 
        public function getDesafiado()
        {
                return $this->desafiado;
        }

        /**
         * Set the value of desafiado
         *
         * @return  self
         */ 
        public function setDesafiado($desafiado)
        {
                $this->desafiado = $desafiado;

                return $this;
        }

        /**
         * Get the value of desafiante
         */ 
        public function getDesafiante()
        {
                return $this->desafiante;
        }

        /**
         * Set the value of desafiante
         *
         * @return  self
         */ 
        public function setDesafiante($desafiante)
        {
                $this->desafiante = $desafiante;

                return $this;
        }

        /**
         * Get the value of rounds
         */ 
        public function getRounds()
        {
                return $this->rounds;
        }

        /**
         * Set the value of rounds
         *
         * @return  self
         */ 
        public function setRounds($rounds)
        {
                $this->rounds = $rounds;

                return $this;
        }

        /**
         * Get the value of aprovada
         */ 
        public function getAprovada()
        {
                return $this->aprovada;
        }

        /**
         * Set the value of aprovada
         *
         * @return  self
         */ 
        public function setAprovada($aprovada)
        {
                $this->aprovada = $aprovada;

                return $this;
        }
    }
?>