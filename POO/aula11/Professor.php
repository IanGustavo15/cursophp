<?php 
    namespace aula11;
    require_once "Pessoa.php";
    class Professor extends Pessoa
    {
        private $especialidade;
        private $salario;

        public function receberAumento($aumento): void
        {
            $this->setSalario($this->getSalario() + $aumento);
            echo "<p>Com o aumento de R$ ". number_format($aumento, 2, ",", ".") . " seu novo salário é de R$ ". number_format($this->getSalario(), 2, ",", "."). "</p>";
        }


        public function __construct($nome, $idade, $sexo, $especialidade, $salario)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->especialidade = $especialidade;
            $this->salario = $salario;
        }


        /**
         * Get the value of especialidade
         */ 
        public function getEspecialidade()
        {
                return $this->especialidade;
        }
        /**
         * Set the value of especialidade
         *
         * @return  self
         */ 
        public function setEspecialidade($especialidade)
        {
                $this->especialidade = $especialidade;

                return $this;
        }

        /**
         * Get the value of salario
         */ 
        public function getSalario()
        {
                return $this->salario;
        }
        /**
         * Set the value of salario
         *
         * @return  self
         */ 
        public function setSalario($salario)
        {
                $this->salario = $salario;

                return $this;
        }
    }
    
?>