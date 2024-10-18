<?php declare(strict_types=1);
    function tripleCheck(array $array){
        $contador = 0;
        $triple = false;
        $comodin = "";

        foreach ($array as $numero) {
            if ($numero == $comodin) $contador++;
            else $contador = 0;

            if ($contador == 2) {
                $triple = true;
                break;
            }
            $comodin = $numero;
        }
        return $triple;
    }

    function countryCapital(array $array){
        foreach ($array as $key => $value) {
            echo "The capital of $key is $value<br>";
        }
    }
?>
<html>
    <head>
        <title>Factorial</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <?php
            echo "<h2>Ejercicio uno tripleCheck</h2>";
            $caso1 = array( 1, 1, 2, 2, 1 );
            $caso2 = array( 1, 1, 2, 1, 2, 3 );
            $caso3 = array( 1, 1, 1, 2, 2, 2, 1 );
            echo var_dump(tripleCheck($caso1));
            echo "<br>";
            echo var_dump(tripleCheck($caso2));
            echo "<br>";
            echo var_dump(tripleCheck($caso3));

            echo "<h2>Ejercicio dos paises y capital</h2>";
            $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

            countryCapital($ceu);
            ?>
        </div>
    </body>
</html>