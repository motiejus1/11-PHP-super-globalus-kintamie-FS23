<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1uzduotis</title>
</head>
<body>
    <form method="GET" action="1uzduotis.php">
        <input name="skaicius1">
        <input name="aritmetika">
        <input name = "skaicius2">
        <button name="patvirtinti" type="submit">Skaiciuoti</button>
    </form>


    <?php 
        if(isset($_GET["patvirtinti"])) {
            $skaicius1 = $_GET["skaicius1"];
            $skaicius2 = $_GET["skaicius2"];
            $aritmetika = $_GET["aritmetika"];
            $rezultatas = 0;
            // + - / % *

            if($aritmetika == "+") {
                $rezultatas = $skaicius1 + $skaicius2;
            } else if($aritmetika == "-") {
                $rezultatas = $skaicius1 - $skaicius2;
            } else if($aritmetika == "/") {
                $rezultatas = $skaicius1 / $skaicius2;
            } else if($aritmetika == "%") {
                $rezultatas = $skaicius1 % $skaicius2;
            } else if($aritmetika == "*") {
                $rezultatas = $skaicius1 * $skaicius2;
            }


            echo "<div>".$rezultatas."</div>";
        }
    
    ?>
</body>
</html>