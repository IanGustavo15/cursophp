<?php 
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function Rabiscar(){
        if ($this->tampada == true){
            echo "<p>Erro, não é possível rabiscar.</p>";
        }
        else{
            echo "<p>Estou rabiscando.</p>";
        }
        }
        public function Tampar(){
            $this->tampada == true;
        }
        private function Destampar(){
            $this->tampada == false;
        }
    }

?>