<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 uzduotis</title>
</head>
<body>
    
<form method="GET" action="2uzduotis.php">
    <input name="sveikojidalis1"/>
    <input name="skaitiklis1"/>
    <input name="vardiklis1"/>

    <input name="sveikojidalis2"/>
    <input name="skaitiklis2"/>
    <input name="vardiklis2"/>

    <button name="patvirtinti" type="submit">Skaiciuoti</button>
</form>


<?php 

    if(isset($_GET["patvirtinti"])) {

        $tikrinimas = true;

        $sveikojidalis1 = $_GET["sveikojidalis1"];
        $skaitiklis1 = $_GET["skaitiklis1"];
        $vardiklis1 = $_GET["vardiklis1"];
        $sveikojidalis2 = $_GET["sveikojidalis2"];
        $skaitiklis2 = $_GET["skaitiklis2"];
        $vardiklis2 = $_GET["vardiklis2"];

        $skaiciu_tikrinimas = [$sveikojidalis1, $skaitiklis1, $vardiklis1, $sveikojidalis2, $skaitiklis2, $vardiklis2];

        //length
        for ($i = 0; $i<count($skaiciu_tikrinimas);$i++) {
            if(is_int($skaiciu_tikrinimas[$i])) {
                $tikrinimas = false;
            }
        }


        if($tikrinimas == true) {
            // trupmenu aritmetika

            // sveikosios dalies panaikinimas

            $skaitiklis1 = $sveikojidalis1 * $vardiklis1 + $skaitiklis1;
            $skaitiklis2 = $sveikojidalis2 * $vardiklis2 + $skaitiklis2;

            // 1 trupmena

            $skaitiklis1 = $skaitiklis1 * $vardiklis2;
            $vardiklis1 = $vardiklis1 * $vardiklis2;

            $skaitiklis2 = $skaitiklis2 * $vardiklis1;
            $vardiklis2 = $vardiklis1;

            $rez_skaitiklis = 0;
            $rez_vardiklis = 0;
            $rez_sveikoji_dalis = 0;

            $rez_skaitiklis = $skaitiklis1 + $skaitiklis2;
            $rez_vardiklis = $vardiklis2;
            
            
            //iskiriame sveikaja dali

            $rez_sveikoji_dalis = intval($rez_skaitiklis/$rez_vardiklis);
            $rez_skaitiklis = $rez_skaitiklis -$rez_sveikoji_dalis * $vardiklis;
        }


    }

?>

<div class="rezultatas">
    <?php 

    echo  $rez_sveikoji_dalis;
    echo  "<br>";
    echo  $rez_skaitiklis;
    echo  "<br>";
    echo  $rez_vardiklis;
    echo  "<br>";
    ?>
</div>
</body>
</html>