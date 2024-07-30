<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Para Manipular Cadenas</title>
</head>
<body>
    <h1>Funciones Para Manipular Cadenas</h1>
    <?php
        // substr
        $string = "Hola Mundo";
        $substring = substr($string, 0, 4); // Devuelve "Hola"
        echo $substring;

        
        // ord
        $char = 'A';
        $asciiValue = ord($char); // Devuelve 65
        echo $asciiValue;


        // printf
        $number = 10;
        $text = "manzanas";
        printf("Tengo %d %s.", $number, $text); // Imprime "Tengo 10 manzanas."


        //sprintf
        $number = 10;
        $text = "manzanas";
        $formattedString = sprintf("Tengo %d %s.", $number, $text);
        echo $formattedString; // Imprime "Tengo 10 manzanas."


        // strtolower
        $string = "Hola Mundo";
        $lowercaseString = strtolower($string); // Devuelve "hola mundo"
        echo $lowercaseString;


        // strtoupper
        $string = "Hola Mundo";
        $uppercaseString = strtoupper($string); // Devuelve "HOLA MUNDO"
        echo $uppercaseString;


        // ereg
        $pattern = "^[a-zA-Z]+$";
        $string = "Hola";
        if (ereg($pattern, $string)) {
            echo "La cadena contiene solo letras.";
        } else {
            echo "La cadena contiene caracteres no permitidos.";
        }


        // eregi
        $pattern = "^[a-z]+$";
        $string = "hola";
        if (eregi($pattern, $string)) {
            echo "La cadena contiene solo letras minúsculas.";
        } else {
            echo "La cadena contiene caracteres no permitidos.";
        }

    ?>
</body>
</html>