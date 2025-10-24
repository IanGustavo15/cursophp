<?php 
    namespace aula11;
    require_once "Aluno.php";
    class Bolsista extends Aluno
    {
        private $bolsa;

        public function renovarBolsa(): void
        {
            echo "<p>Bolsa renovada.</p>";
        }
        public function pagarMensalidade(): void
        {
            echo "<p>" . $this->getNome() . " é bolsista, então paga com desconto!</p>";   
        }

        /**
         * Get the value of bolsa
         */ 
        public function getBolsa()
        {
                return $this->bolsa;
        }
        /**
         * Set the value of bolsa
         *
         * @return  self
         */ 
        public function setBolsa($bolsa)
        {
                $this->bolsa = $bolsa;

                return $this;
        }
    }
    
?>