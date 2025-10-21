<?php 
require_once "Controlador.php";
    class ControleRemoto implements Controlador
    {   // Atributos
        private $volume;
        private $ligado;
        private $tocando;

        // Métodos 
        public function ligar(){
                $this->setLigado(true);
        }
        public function desligar(){
                $this->setLigado(false);
        }
        public function abrirMenu(){
                echo "<p>------ Menu ------</p>";
                echo "<br>Está ligado? ". ( ($this->getLigado()) ? "SIM": "NÃO");
                echo "<br>Está tocando? " . ( ($this->getTocando()) ? "SIM" : "NÃO");
                echo "<br>Volume: " . $this->getVolume();
                for ($i = 0; $i <= $this->getVolume(); $i += 10) {
                        echo "|"; 
                }
                echo "<br>";
        }
        public function fecharMenu(){
                echo "<br>Fechando Menu...";
        }
        public function maisVolume(){
                if ($this->getLigado()) {
                        $this->setVolume($this->getVolume() + 10);
                } else {
                        echo "<p>Erro, não posso aumentar o volume.</p>";
                }
        }
        public function menosVolume(){
                if ($this->getLigado()) {
                        $this->setVolume($this->getVolume() - 10);
                } else {
                        echo "<p>Erro, não posso diminuir o volume.</p>";
                }
        }
        public function ligarMudo(){
                if ($this->getLigado() && $this->getVolume() > 0) {
                        $this->setVolume(0);
                } else {
                        echo "<p>Erro, não posso ligar o mudo.</p>";
                }
        }
        public function desligarMudo(){
                if ($this->getLigado() && $this->getVolume() == 0) {
                        $this->setVolume(50);
                } else {
                        echo "<p>Erro, não posso desligar o mudo.</p>";
                }
        }
        public function play(){
                if ($this->getLigado() and $this->getTocando(false)) {
                        $this->setTocando(true);
                }
        }
        public function pause(){
                if ($this->getLigado() and $this->getTocando()) {
                        $this->setTocando(false);
                }
        }

        // Métodos Especiais
        public function __construct()
        {
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }
        

        private function getVolume()
        {
                return $this->volume;
        }
        private function setVolume($volume)
        {
                $this->volume = $volume;
                return $this;
        }


        private function getLigado()
        {
                return $this->ligado;
        }
        private function setLigado($ligado)
        {
                $this->ligado = $ligado;
                return $this;
        }



        private function getTocando()
        {
                return $this->tocando;
        }
        private function setTocando($tocando)
        {
                $this->tocando = $tocando;
                return $this;
        }
    }
?>