<?php 
require_once "Pessoaa.php";
    class Aluno extends Pessoaa
    {
        private $matricula;
        private $curso;

        public function cancelarMatricula(): void
        {
            echo "<p>Matrícula será cancelada.</p>";
        }

        /**
         * Get the value of matricula
         */ 
        public function getMatricula()
        {
                return $this->matricula;
        }
        /**
         * Set the value of matricula
         *
         * @return  self
         */ 
        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

                return $this;
        }

        /**
         * Get the value of curso
         */ 
        public function getCurso()
        {
                return $this->curso;
        }
        /**
         * Set the value of curso
         *
         * @return  self
         */ 
        public function setCurso($curso)
        {
                $this->curso = $curso;

                return $this;
        }
    }
    
?>