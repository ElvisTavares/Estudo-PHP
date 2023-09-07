<?php

   /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = []; //inicilaiza uma pilha

        //define um mapeamento de caracteres de abertura para fechamento
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];
      
        //percorre cada caractere na string
        for ($i=0; $i < strlen($s) ; $i++) { 
            # code...
            $char = $s[$i];

            //se o caractere e um caractere de abertura, empilhe na pilha
            if(array_key_exists($char, $map)) {

                //se a pilha estiver vazia ou o topo da pilha nao corresponder ao caractere de abertura atual, a string nao e valida
                if(empty($stack) || array_pop($stack) !== $map[$char]){
                    return false;
                }
            }else {
                //se o caractere é de fechamento, empilhe na pilha
                $stack[] = $char;
            }
        }

        //a sting é valida se a pilha estiver vazia no final.
        return empty($stack);
    }

    echo isValid("{}");
