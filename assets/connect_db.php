<?php

    $servers = "localhost";
    $lietotajs = "grobina1_viktorovs";
    $parole = "yB630ycy@";
    $db_nosaukums = "grobina1_viktorovs";
    $uznemsana_tabula = "uznemsana_specialitates"; 

    $savienojums = mysqli_connect($servers, $lietotajs, $parole, $db_nosaukums);


    if(!$savienojums){

       #die("Kļuda ar datubazi!eror 404".mysqli_connect_errno());

    }else{

       #echo "Savienojums veiksmigs!";

    }


    #Autorizacija:

    if(isset($_POST["autorizacija"])){
        session_start(); #liek domat par sesiju, bet to neuzsak


       # $lietotjavards = $_POST["lietotajs"]; - nav drosakais variants sadi atstat

        $lietotjavards = mysqli_real_escape_string($savienojums, $_POST["lietotajs"]);
        $parole = mysqli_real_escape_string($savienojums, $_POST["parole"]);
        $sql = "SELECT * FROM uznemsana_lietotaji WHERE Lietotajvards =
        '$lietotjavards'";
        $rezultats = mysqli_query($savienojums, $sql);


        if(mysqli_num_rows($rezultats) == 1){

            while($user = mysqli_fetch_array($rezultats)){

                if(password_verify($parole, $user["Parole"])){

                    $_SESSION["lietotajvardsGGWP"] = $user["Lietotajvards"];
                    header("location:index.php");

                }else{

                    echo "Neparaizs lietotājvards vai parole!";

                }

            }

        }else{

            echo "Neparaizs lietotājvards vai parole!";

        }

    }

?>
