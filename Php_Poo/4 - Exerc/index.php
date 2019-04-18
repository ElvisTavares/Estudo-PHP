<html>
    <body>
        <pre>
        <?php

            include_once "Conta.php";

            $conta1 = new Conta();
            $conta2 = new Conta();

            $conta1->abrirConta("CC");
            $conta1->setDono("Luke");

            $conta2->abrirConta("CP");
            $conta2->setDono("Leia");

            $conta1->sacar(10);
            
            print_r($conta1);
            print_r($conta2);


        ?>

        </pre>
    </body>
</html>