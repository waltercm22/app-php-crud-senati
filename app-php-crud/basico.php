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
    </section>
    <hr>
    <section>
        <h2>Control de flujo</h2>
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
    </section>
</body>
</html>