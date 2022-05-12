<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <?php echo "<title>Ejercicio1 PHP</title>" ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?= "<h1>Ejercicio1 PHP</h1>" ?>
    <?= "<p>Página de pruebas PHP</p>" ?>
    <?php
    //  EJ4
    $num1 = 5;
    $num2 = 3;
    $suma = $num1 + $num2;

    //EJ5
    $p1 = 3;
    $p2 = $p1 * 3;
    $p3 = ($p1 + $p2) / 4;


    //EJ6
    if ($p2 > 5) {
        $p3 = ($p1 + $p2) / 4;
    } elseif ($p2 == 5) {
        $p3 = $p1 + $p2;
    }

    echo "<p> $num1 + $num2 = $suma <br>p3 = $p3</p>";

    switch ($p2) {
        case 5:
            $p3 = $p1 + $p2;
        default:
            $p3 = ($p1 + $p2) / 4;
    }

    $echoMult = "";
    for ($i = 0; $i <= 9; $i++) {
        $mult = $p1 * $i;
        $echoMult .= "<p>$p1 * $i = $mult</p>";
    }
    echo $echoMult;

    echo "<br>";
    $tabla2 = "";
    $contador = 0;
    while ($contador <= 9) {
        $contador++;
        $mult = 7 * $contador;
        $tabla2 .= "<p>2 * $contador = $mult";
    }

    echo $tabla2;

    ?>
</body>

</html>