<form>
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="ok">

</form>

<?php
/**
 * Created by PhpStorm.
 * User: elvis
 * Date: 10/11/18
 * Time: 16:36
 */

if (isset($_GET)){
    foreach($_GET as $key => $value){

        echo "Nome do campo: ". $key."<br>";

        echo"Valor do campo: ". $value."<br>";
    }
}

