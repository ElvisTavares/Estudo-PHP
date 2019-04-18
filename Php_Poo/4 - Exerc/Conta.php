<?php
/**
 * Created by PhpStorm.
 * User: Elvis
 * Date: 17/03/2019
 * Time: 12:26
 */

class Conta
{


    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        

    }

    



    public function abrirConta($t){
       $this->setTipo($t);
       $this->setStatus(true);

       if ($t = "CC"){
           $this->setSaldo(50);
       }else if($t = "CP"){
           $this->setSaldo(150);
       }


    }

    public function fecharConta($s){
        if ($s > 0){
            echo "Conta com dinheiro";

        }else if ($s < 0){
            echo "Conta em debido";
        }else{
            setStatus(false);
        }

}

    public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);

        }else{
            echo "Impossivel depositar";
        }
    }

    public function sacar($v){
        if (getStatus()){
            if (getSaldo()){
                setSaldo(getSaldo()-v);
            }else{
                echo "Sem Saldo";
            }
        }else{
            echo "Conta nao existe";
        }

    }

    public function pagarMensal(){
        $vl = 0;
        if (getTipo("CC")){
            $vl = 12;
        }else if(getTipo("CP")){
            $vl = 20;
        }

        if (getStatus()){
            if (getSaldo() > 0){
                setSaldo(getSaldo()-$vl);
            }else{
                echo "Saldo insuficiente";
            }
        }else{
            echo "Impossivel sacar";
        }
    }


    public function getNumConta(){
        return $this->numConta;
    }

    public function setNumConta($nC){
        $this->numConta = $nC;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo();
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status();
    }

    public function setStatus($st){
        $this->status = $st;
    }

}