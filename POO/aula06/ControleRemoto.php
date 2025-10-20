<?php 
    class ControleRemoto
    { // Atributos
        private $volume;
        private $ligado;
        private $tocando;

        // Métodos Especiais
        public function __construct()
        {
            $volume = 50;
            $ligado = false;
            $tocando = false;
        }
        

        public function getVolume()
        {
                return $this->volume;
        }
        public function setVolume($volume)
        {
                $this->volume = $volume;
                return $this;
        }



        public function getLigado()
        {
                return $this->ligado;
        }
        public function setLigado($ligado)
        {
                $this->ligado = $ligado;
                return $this;
        }



        public function getTocando()
        {
                return $this->tocando;
        }
        public function setTocando($tocando)
        {
                $this->tocando = $tocando;
                return $this;
        }
    }
?>