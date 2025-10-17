<?php 
    class Caneta{
        var $modelo;
        var $cor;
        var $ponta;
        var $carga;
        var $tampada;

        function Rabiscar(){
        if ($this->tampada == true){
            echo "<p>Erro, não é possível rabiscar.</p>";
        }
        else{
            echo "<p>Estou rabiscando.</p>";
        }
        }
        function Tampar(){
            $this->tampada == true;
        }
        function Destampar(){
            $this->tampada == false;
        }
    }

?>