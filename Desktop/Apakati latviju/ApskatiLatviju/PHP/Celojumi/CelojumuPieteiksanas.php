<?php 

require "assets/connect_db.php";

if(isset($_POST['pietcelojumam'])){

    $vards = $_POST['celvards'];
    $uzvards = $_POST['celuzvards'];
    $telefons = $_POST['celtelefons'];
    $epasts = $_POST['celepasts'];
    $celojumid = $_POST['celojum_id'];

    $cel_vards = mysqli_real_escape_string($savienojums, $vards);
    $cel_uzvards = mysqli_real_escape_string($savienojums, $uzvards);
    $cel_telefons = mysqli_real_escape_string($savienojums, $telefons);
    $cel_epasts = mysqli_real_escape_string($savienojums, $epasts);
    $cel_id = mysqli_real_escape_string($savienojums, $celojumid);


    if($cel_vards!="" && $cel_uzvards!="" && $cel_telefons!="" && $cel_epasts!="" && $cel_id!=""){ 
        $Moder_pievieno_SQL = "INSERT INTO Pieteikumi(Vards,Uzvards,Telefons,Epasts,Celojums) VALUES('$cel_vards','$cel_uzvards','$cel_telefons','$cel_epasts','$cel_id')";

        if(mysqli_query($savienojums, $Moder_pievieno_SQL)){

            header("Location: Celojumi.php");
        } else {
            echo "Neizdevās pievienot moderatoru";
        }
    } else {
        echo "Lūdzu, aizpildiet visus laukus!";
    }
}


?>