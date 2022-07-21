<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 uzduotis</title>
    
    <?php 
        $spalva = "white";

        //uzfiksuoju mygtuko paspaudima

        if(isset($_POST["patvirtinti"])) {
            //red tada kada i input parasyta raudona
            //blue tada kada i input parasyta melyna
            // black tada kada i input parasyta juoda
            $input_spalva = $_POST["spalva"];
            if($input_spalva == "raudona") {
                $spalva = "red";
            } else if($input_spalva == "melyna") {
                $spalva = "blue";
            } else if($input_spalva == "juoda") {
                $spalva = "black";
            } else {
                $spalva = "white";
            }

        }
    ?>
    
    <style>
    
    body {
        background-color:<?php echo $spalva; ?>;
    }

    </style>
</head>
<body>
    
<!-- 5. Sukurkite programą, kurioje perdavus kintamuosius per POST "juoda", "raudona", "melyna", 
puslapis nusidažo atitinkama spalva. -->
<form method="POST" action="5uzduotis.php">
    <input name="spalva" />
    <button type="submit" name="patvirtinti">Nudažyk</button> 

</form>

<!-- nemaisykite Javascript ir PHP kodo -->

</body>
</html>