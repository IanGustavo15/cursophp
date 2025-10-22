<?php 
        require_once 'Lutador.php';
    class Luta
    {
        // Atributos
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;

        // Métodos
        public function marcarLuta($l1, $l2): void
        {
                if ($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2) {
                        $this->aprovada = true;
                        $this->desafiado = $l1;
                        $this->desafiante = $l2;
                }  else {
                        $this->aprovada = false;
                        $this->desafiado = null;
                        $this->desafiante = null;
                }
        }
        public function lutar(): void
        {
                if ($this->aprovada == true) {
                        $this->desafiado->apresentar();
                        $this->desafiante->apresentar();
                        $vencedor = rand(0, 2);
                        switch ($vencedor) {
                                case 0: // Empate
                                        echo "Empate";
                                        $this->desafiado->empatarLuta();
                                        $this->desafiante->empatarLuta();
                                        break;
                                case 1: // Desafiado vence
                                        echo "<p>". $this->desafiado->getNome()." venceu ". $this->desafiante->getNome()."</p>";
                                        $this->desafiado->ganharLuta();
                                        $this->desafiante->perderLuta();
                                        break;
                                case 2: // Desafiante vence
                                        echo "<p>". $this->desafiante->getNome()." venceu ". $this->desafiado->getNome()."</p>";
                                        $this->desafiante->ganharLuta();
                                        $this->desafiado->perderLuta();
                                        break;
                                
                                
                        }
                } else{
                        echo "<p>A luta não pode acontecer.</p>";
                }
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