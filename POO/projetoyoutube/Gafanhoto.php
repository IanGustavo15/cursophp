<?php 
    namespace projetoyoutube;
    require_once "Pessoa.php";
    class Gafanhoto extends Pessoa
    {
        private $login;
        private $totAssistido;

        public function viuMaisUm(): void
        {
            $this->totAssistido ++;
        }

        public function __construct($nome, $idade, $sexo, $login)
        {
            parent::__construct($nome, $idade, $sexo);
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->login = $login;
        }
        /**
         * Get the value of login
         */ 
        public function getLogin()
        {
                return $this->login;
        }
        /**
         * Set the value of login
         *
         * @return  self
         */ 
        public function setLogin($login)
        {
                $this->login = $login;

                return $this;
        }

        /**
         * Get the value of totAssistido
         */ 
        public function getTotAssistido()
        {
                return $this->totAssistido;
        }
        /**
         * Set the value of totAssistido
         *
         * @return  self
         */ 
        public function setTotAssistido($totAssistido)
        {
                $this->totAssistido = $totAssistido;

                return $this;
        }
    }
    
?>