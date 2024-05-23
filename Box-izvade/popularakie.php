<?php
require "assets/connect_db.php";

$PopularakosSQL = "SELECT * FROM Celojumi LIMIT 9;";
$atlasaPopularakos = mysqli_query($savienojums, $PopularakosSQL);

if (mysqli_num_rows($atlasaPopularakos) > 0) {

    while ($Popularakie = mysqli_fetch_assoc($atlasaPopularakos)) {
        
        echo "

                <div class='popularakie'>

                <img src='{$Popularakie{'Foto_URL'}}'>

                <a href='Celojumi.php'><i class='fa fa-search'></i></a>

                <div class='popularakienos'>

                    <p>{$Popularakie['Nosaukums']}</p>

                </div>

            </div>
        
    ";
    }

} else {

    echo "Nav nevienas aktualu ceļojumu!";

}
?>