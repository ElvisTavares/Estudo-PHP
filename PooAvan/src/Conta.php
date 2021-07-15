
<?php 

class Conta{
    public $cpfTitular;
    public $nomeTitular;
    public $saldo = 0;

public function sacar($valorSacar)
{
    if($valorSacar > $this->saldo){
        echo "Saldo indisponivel";
    }else{
        $this->saldo -= $valorSacar;
    }
}

public function depositar($valorADepositar): void
{
    if($valorADepositar < 0){
        echo "Valor precisa ser positivo";
    }else{
        $this->saldo += $valorADepositar;
    }
}

public function transferir($valorATransferir, Conta $contaDestino)
{
    if($valorATransferir > $this->saldo){
        echo "Saldo indisponível";
    }else {
        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }
}

}

