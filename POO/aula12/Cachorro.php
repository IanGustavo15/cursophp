<?php 
    namespace aula12;
    require_once "Lobo.php";
    class Cachorro extends Lobo
    {

        // public function __construct($peso, $idade)
        // {
        //     $this->peso = $peso;
        //     $this->idade = $idade;
        // }
        
        public function emitirSom(): void
        {
            echo "<p>Latindo</p>";
        }

        public function reagirFrase($frase): void
        {
            if ($frase == "Toma Comida" || $frase == "Olá") {
                echo "<p>Abanar e Latir</p>";
            } else {
                echo "<p>Rosnar</p>";
            }
        }

        public function reagirHora($hora, $min): void
        {
            if ($hora <= 12) {
                echo "<p>Abanar</p>";
            } elseif ($hora >= 18) {
                echo "<p>Ignorar</p>";
            } else {
                echo "<p>Abanar e latir</p>";
            }
        }

        public function reagirDono($dono): void
        {
            if ($dono) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Rosnar e latir</p>";
            }
        }

        public function reagirIdadePeso($idade, $peso): void
        {
            if ($idade <= 5) {
                if ($peso <= 10) {
                    echo "<p>Abanar</p>";
                } else {
                    echo "<p>Latir</p>";
                }
            } else {
                if ($peso <= 10) {
                    echo "<p>Rosnar</p>";
                } else {
                echo "<p>Ignorar</p>";
            }
            } 
        }
    }
    
?>