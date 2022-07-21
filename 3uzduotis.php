
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 uzduotis - 4 uzduotis</title>
</head>
<body>
    <!-- . Sukurkite du input laukelius. 
    Vienas -  vardas, kitas - slaptažodis. 
    Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
slaptažodis - "123456". 
Jei sugalvota kombinacija sutampa su tuo, kas įvesta į input laukelius, 
išvedamas pranešimas - "prisijungėte sėkmingai", kitu atveju - "Įvesti duomenys neteisingi". -->

<?php if( isset($_SESSION["arprisijunges"]) && $_SESSION["arprisijunges"] == "prsijunges") { ?>
    <form method="POST" action="3uzduotis.php">
        <button type="submit" name="atsijungti"> Atsijungti </button>
    </form>
<?php } else { ?>
    <form method="POST" action="3uzduotis.php">
        <input name="vardas" />
        <input name="slaptazodis" type="password" />
        <button name="patvirtinti" type="submit">Prisijungti</button>
    </form>
<?php } ?>
<?php 


    //narsykle atsimintu kad mes esame prisijunge
    $vardas = "admin";
    $slaptazodis = "123456";

    if(isset($_POST["patvirtinti"])) {
        $input_vardas = $_POST["vardas"];
        $input_slaptazodis = $_POST["slaptazodis"];

        if($input_vardas == $vardas && $input_slaptazodis == $slaptazodis ) {
            //echo "prisijungėte sėkmingai";
            $_SESSION["arprisijunges"] = "prsijunges";
            //header("Location: manopaskyra.php");
            // nukreipimas i manopaskyra.php
        } else {
            //echo "Įvesti duomenys neteisingi";
            header("Location: 404.php");
            // nukreipimas i 404.php
        }

    }

    if(isset($_POST["atsijungti"])) {
        session_destroy();
        header("Location: 3uzduotis.php");
    }

?>    

<?php  //echo $_SESSION["arprisijunges"]; ?>
</body>
</html>