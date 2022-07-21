<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobalūs kintamieji</title>
</head>
<body>
    <!-- Kintamaji a didinti vienetu kiekviena karta persikrovus puslapiui. 
    Svetaines lankomumo skaitiklis -->
    <!-- Masyvo pildymo -->
    <?php 
    //php kodas pradeda veikti is naujo perkrovus/uzejus i puslapi

        //sausainio vardas, reiksme, laikas kiek galioja / svetaine kurioje galioja sausaunukas
        
        //time() - grazina dabartini laika sekundemis
        //86400 - para 24*60*60
        //30 paru

        // setcookie("skaitiklis", "labas", time() + (86400*30), "/" );


        //sausainukas gali egzistuoti ir gali buti dar nesukurtas

        $a = 0;

        if(isset($_COOKIE["lankomumas"])) {
            $a = $_COOKIE["lankomumas"];
        }
        $a++;
        setcookie("lankomumas", $a, time() + 86400, "/");
        //$a = 1;
        echo $_COOKIE["lankomumas"];
        

        //sausainiuko trynimas
      //  setcookie("lankomumas", "", time() - 86400, "/")

    ?>
</body>
</html>