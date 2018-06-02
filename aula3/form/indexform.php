<?php

if (isset($_GET['numero1']) && isset($_GET['numero2']) && isset($_GET['operator'])) {
    $operador_utilizado = $_GET['operator'];
    $valor1 = $_GET['numero1'];
    $valor2 = $_GET['numero2'] ;

    if ($operador_utilizado == "+") {

        $resultado = ($valor1 + $valor2);
    } elseif ($operador_utilizado == "-") {

        $resultado = ($valor1 - $valor2);

    } elseif ($operador_utilizado == "*") {

        $resultado = ($valor1 * $valor2);

    } elseif ($operador_utilizado == "/") {
        $resultado = ($valor1 / $valor2);

    }
}

?>


</form>





</body>
</html>






