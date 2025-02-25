<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavny nadpis</h1>
    <?php
        echo'<h2>nadpis 2 </h2>';  #vypis
        
        $x = 10;  #premenna
        echo $x;
        echo '<br>';

        $meno = 'Peter';
        echo $meno;
        echo '<br>';
        var_dump($meno);   #vracia datovy typ a dlzku retazca
        echo '<br>';


        /*polia*/
        $farby = array("cervena","modra","biela");
        echo $farby[0];
        echo '<br>';

        /*cyklus*/
        foreach($farby as $farba){
            echo "Farba: ". $farba."<br>";
        }

        /*dictionary*/
        $data = array("Peter" => 25,
                "Jana" =>20,
                "Marek" =>24
        );
        foreach($data as $name =>$age){
            echo"$name ma $age rokov <br>";
        }

    ?>

</body>
</html>