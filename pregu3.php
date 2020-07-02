<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="nro1" value="<?=(isset($_POST["nro1"]))?$_POST["nro1"]:''?>" placeholder="Ingrese numero 1">
    <input type="text" name="nro2" value="<?=(isset($_POST["nro2"]))?$_POST["nro2"]:''?>" placeholder="Ingrese numero 2">
    <input type="submit" name="operacion" value="Sumar">
    <input type="submit" name="operacion" value="Restar">
    <input type="submit" name="operacion" value="Multiplicar">
    <input type="submit" name="operacion" value="Dividir">
</form>  

<?php
if (isset($_POST["operacion"])) {

    $nro1 = (int) $_POST["nro1"];
    $nro2 = $_POST["nro2"];

    switch ($_POST["operacion"]){
        case "Sumar": Operaciones::suma($nro1, $nro2);
            break;
        case "Restar": Operaciones::resta($nro1, $nro2);
            break;
        case "Multiplicar": Operaciones::multiplicacion($nro1, $nro2);
            break;
        case "Dividir": Operaciones::division($nro1, $nro2);
            break;
    }
}

class Operaciones{
    public static function suma($nro1, $nro2): void{
        $resultado = $nro1 + $nro2;
        echo "el resultado de la suma es: ".$resultado;
    }

    public static function resta($nro1, $nro2): void{
        $resultado = $nro1 - $nro2;
        echo "el resultado de la resta es: ".$resultado;
    }

    public static function multiplicacion($nro1, $nro2): void{
        $resultado = $nro1 * $nro2;
        echo "el resultado de la multiplicacion es: ".$resultado;
    }

    public static function division($nro1, $nro2): void{
        $resultado = $nro1 / $nro2;
        echo "el resultado de la division es: ".$resultado;
    }
}
?>