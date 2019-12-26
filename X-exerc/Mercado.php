<?php

class Mercado{
    var $produto;
    var $nProd;
    var $tot;
    function comprar($produto, $nProd){
        $this->produto = $produto;
        $this->nProd = $nProd;

        echo $this->produto;
        echo $this->nProd;
    }

   
}