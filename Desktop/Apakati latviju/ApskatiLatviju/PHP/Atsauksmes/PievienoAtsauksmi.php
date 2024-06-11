<?php

require "assets/connect_db.php";

if(isset($_POST['PievienotAt'])){

    $vards = $_POST['atvards'];
    $komentars = $_POST['atkomentars'];


    $Atsauksmes_vards = mysqli_real_escape_string($savienojums, $vards);
    $Atsauksmes_komentars = mysqli_real_escape_string($savienojums, $komentars);

    if($Atsauksmes_vards!="" && $Atsauksmes_komentars!=""){ // Исправлено условие на логический оператор "и", чтобы оба поля были заполнены
        $Atsauksmes_pievieno_SQL = "INSERT INTO Atsauksmes(Vards,Komentars) VALUES('$Atsauksmes_vards','$Atsauksmes_komentars')";

        if(mysqli_query($savienojums, $Atsauksmes_pievieno_SQL)){
            // Перенаправление на другую страницу после успешного добавления модератора
            header("Location: Atsauksem.php");
        } else {
            echo "Neizdevās pievienot moderatoru";
        }
    } else {
        echo "Lūdzu, aizpildiet visus laukus!";
    }
}
?>