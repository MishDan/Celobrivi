<?php

require "assets/connect_db.php";

if(isset($_POST['editmoderlietvards'])){
    $moder_id = $_POST['moder_id_liet']; 

    $new_login = $_POST['jaunslietvards']; 

    $jauns_lietotajvards_SQL = "UPDATE Moderatori SET Lietotajvards = $new_login WHERE Moderatori_ID = $moder_id";
    $jaunslietvards = mysqli_query($savienojums, $jauns_lietotajvards_SQL); 

    if(mysqli_query($savienojums, $jauns_lietotajvards_SQL)){
 
        header("Location:index.php");
        echo "Lietotajvārds atjaunots!";

    } else {

        echo "Neizdevās atjaunot lietotajvardu";

    }

}

?>