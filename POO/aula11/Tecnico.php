<?php 
    namespace aula11;
    require_once "Pessoa.php";
    final class Tecnico extends Pessoa
    {
        private $registroProfissional;
        public function praticar(): void
        {
            
        }

        /**
         * Get the value of registroProfissional
         */ 
        public function getRegistroProfissional()
        {
                return $this->registroProfissional;
        }
        /**
         * Set the value of registroProfissional
         *
         * @return  self
         */ 
        public function setRegistroProfissional($registroProfissional)
        {
                $this->registroProfissional = $registroProfissional;

                return $this;
        }
    }
    
?>