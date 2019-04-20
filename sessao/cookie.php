<?php

setcookie("teste", "Goku", time()+3600);

echo "Cookie setado com sucesso".$_COOKIE["meuteste"];