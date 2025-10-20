<?php 

class ContaBanco
{
    
    // Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    // Métodos
    public function abrirConta($t): void
    {
       $this->setTipo($t);
       $this->setStatus(True);
       if ($t == "CC"){
        $this->setSaldo(50); // É a mesma coisa que $this->saldo = 50;
        
    } elseif ($t == "CP") {
        $this->setSaldo(150);
    }
    }   
    public function fecharConta(): void
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro e não pode ser fechada.</p>";
        }
        elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito, impossível encerrar.</p>";
        }
        else {
            $this->setStatus(false);
            echo "<p>Conta de ". $this->getDono() ." fechada com sucesso.</p>";
        }
    }
    public function depositar($v): void
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Depósito de R\$ $v na conta de ". $this->getDono(). ".</p>";
        }
        else {
            echo "<p>Conta fechada, não consigo depositar</p>";
        }
    }
    public function sacar($v): void
    {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R\$ $v autorizado na conta de ". $this->getDono(). ".</p>";
            } else {
                echo "<p>Saldo Insuficiente.</p>";
            }
        } else {
            echo "<p>Impossível sacar.</p>";
        } 
    }
    
    public function pagarMensal(): void
    {
        if ($this->getTipo() == "CC") {
            $v = 12;
        } elseif ($this->getTipo() == "CP") {
            $v = 20;
        } else{
            echo "<p>Erro.</p>";
        }
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "Mensalidade de $v debitada da conta de ". $this->getDono().".";
            } else {
                echo "<p>Saldo insuficiente.</p>";
            }
        } else {
            echo "<p>Impossível pagar.</p>";
        }
    }

    // Métodos Especiais
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
    }


    public function getNumConta()
    {
        return $this->numConta;
    }
    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;
        return $this;
    }


    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }


    public function getDono()
    {
        return $this->dono;
    }
    public function setDono($dono)
    {
        $this->dono = $dono;
        return $this;
    }


    public function getSaldo()
    {
        return $this->saldo;
    }
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
        return $this;
    }

    
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }
}

?>