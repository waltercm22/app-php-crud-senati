<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Básico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>PHP Básico</h1>
    <hr>
    <section>
        <h2>Variables</h2>
        <?php
            $nombre = "Walter Molina 😼 <br>"; //PHP
            // String nombre "Walter Molina"; //JAVA
            // nombre = 'Walter Molina' //Python
            echo "Nombre: ".$nombre;

            $edad = 22;
            echo "Edad: ".$edad."<br>";

            $profesor = true;
            echo "Es profesor?: ".$profesor."<br>";

            $talla = 1.83;
            echo "Talla: ".$talla."<br>";
        ?>

        <h2>Constantes</h2>
        <?php
            define( "PI",3.141516);
            echo "Valor de PI: ".PI."<br>";
        ?>
        <h1>TAREA</h1>
        <hr>
        <h2>OPERADORES:</h2>
        <h2>Operadores Logicos</h2>
        <?php
        $edad = 15;
        $tieneDNI = true;

        if ($edad >= 18 && $tieneDNI) {
        echo "Puedes ingresar al evento.<br>";
        } else {
        echo "No puedes ingresar.<br>";
        }
        ?>
        <hr>
        <h2>Operadores de asignacion</h2>
        <?php
        $numero = 10;
        $numero += 25;
        echo "Resultado de += : " . $numero . "<br>";
        ?>
        <hr>
        <h2>Operadores Aritmeticos</h2>
        <?php
        $a = 25;
        $b = 10;

        $suma = $a + $b;
        $resta = $a - $b;

        echo "Suma: " . $suma . "<br>";
        echo "Resta: " . $resta . "<br>";
        ?>
        <hr>
        <h2>Operadores de incremento y decremento</h2>
        <h3>Incremento</h3>
        <?php
        $contador = 15;
        $contador++; 
        echo "Valor después del incremento: " . $contador . "<br>";
        ?>
        <hr>
        <h3>Decremento</h3>
        <?php
        $vidas = 23;
        $vidas--; 
        echo "Valor después del decremento: " . $vidas . "<br>";
        ?>
        </section>
        <hr>
        <section>
        <h2>CONTROL DE FLUJO</h2>
        <h2>If - else</h2>
        <?php
        date_default_timezone_set("America/Lima");
        $hora_actual = date('H:i');
        $hora_limite = "10:15";
        if($hora_actual > $hora_limite){
            echo "Salida...." . "<br>";
        }else{
            echo "En clases...." . "<br>";
        }
        ?>
        <hr>
        <h2>if-elseif-else</h2>
        <?php
        $nota = 10;

        if ($nota >= 18) {
        echo "Calificación: Excelente<br>";
        } elseif ($nota >= 14) {
        echo "Calificación: Aprobado<br>";
        } else {
         echo "Calificación: Desaprobado<br>";
        }
        ?>
        <hr>
        <h2>Switch</h2>
        <?php
        $rol = "editor";

        switch ($rol) {
         case "admin":
        echo "Acceso total al sistema<br>";
        break;
        case "editor":
        echo "Acceso para modificar contenido<br>";
        break;
        case "visitante":
        echo "Acceso solo de lectura<br>";
        break;
        default:
        echo "Rol no reconocido<br>";
}
        ?>

        <hr>
        <h2>BUCLES</h2>
        <h2>For</h2>
        <?php
        for ($i = 1; $i <= 20; $i++) {
         echo "Número: " . $i . "<br>";
        }
        ?>
        <hr>
        <h2>While</h2>
        <?php
        $numero = 5;

        while ($numero <= 20) {
        echo "Contando: " . $numero . "<br>";
        $numero++; 
        }
        ?>
        <hr>
        <h2>For - Each</h2>
        <?php
        $usuario = [
        "nombre" => "Kaiser",
        "edad" => 22,
        "pais" => "Perú"
        ];

        foreach ($usuario as $clave => $valor) {
        echo $clave . ": " . $valor . "<br>";
        }
        ?>
        <hr>
        <h2>FUNCIONES</h2>
        <h2>Funciones con parametros</h2>
        <?php
        function saludar($nombre) {
        echo "Hola, " . $nombre . "! Bienvenido/a.<br>";
        }
        saludar("Kaiser");
        saludar("Angela");
        ?>
        <hr>
        <h2>Funciones con retorno</h2>
        <?php
        function convertirAMetros($kilometros) {
        return $kilometros * 1000;
        }

        echo "5 km son: " . convertirAMetros(5) . " metros<br>";
        echo "1.2 km son: " . convertirAMetros(1.2) . " metros<br>";
        ?>
        <hr>
        <h2>ARREGLOS</h2>
        <h2>Arreglo Indexado</h2>
        <?php
        $colores = ["Rojo", "Verde", "Azul", "Amarillo"];

        echo "Primer color: " . $colores[0] . "<br>";
        echo "Segundo color: " . $colores[1] . "<br>";
        echo "Tercer color: " . $colores[2] . "<br>";
        echo "Cuarto color: " . $colores[3] . "<br>";
        ?>
        <hr>
        <h2>Arreglo Asociativo</h2>
        <?php
        $producto = array(
       "nombre" => "Laptop",
       "precio" => 3500,
       "stock" => 12
        );

        echo "Producto: " . $producto["nombre"] . "<br>";
        echo "Precio: S/ " . $producto["precio"] . "<br>";
        echo "Stock disponible: " . $producto["stock"] . "<br>";
        ?>
    </section>
</body>
</html>