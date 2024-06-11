<?php
require "assets/connect_db.php";

$celojumiSQL = "SELECT * FROM Celojumi WHERE Celojumu_ID <= (SELECT MIN(Celojumu_ID) FROM (SELECT Celojumu_ID FROM Celojumi ORDER BY Celojumu_ID DESC LIMIT 7 ) AS subquery)";
$atlasaCelojumus = mysqli_query($savienojums, $celojumiSQL);

if (mysqli_num_rows($atlasaCelojumus) > 0) {
    while ($celojumi = mysqli_fetch_assoc($atlasaCelojumus)) {

        echo "
            <div class='celojumiboxi'>

                <img src='{$celojumi['Foto_URL']}'>

                <i class='fa fa-search'></i>

                <div class='celojumuinfo'>

                    <div class='nosflex'>

                        <h3>{$celojumi['Nosaukums']}</h3>

                        <p>{$celojumi['Cena']}€</p>

                    </div>

                </div>
            </div>


            <div class='celojumi_Form'>

                <div class='form_img'>

                    <img src='{$celojumi['Foto_URL']}'>

                </div>

                <div class='form_info'>

                    <div class='closetagat'>

                        <i class='fas fa-close CelFormClose'></i>

                    </div>

                    <h3>{$celojumi['Nosaukums']}</h3>

                    <div class='form_apraksts'>

                        <p>{$celojumi['Aprsksts']}</p>

                    </div>

                    <div class='cel_input'>

                    <form method='POST'>

                            <input type='text' placeholder='Vārds' name='celvards' minlength='4' maxlength='20' autocomplete='off' required>
                            <input type='text' placeholder='Uzvārds' name='celuzvards' minlength='4' maxlength='20' autocomplete='off' required>
                            <input type='tel' placeholder='Telefons' name='celtelefons' minlength='4' maxlength='20' autocomplete='off' required>
                            <input type='email' placeholder='Epasts' name='celepasts' minlength='4' maxlength='20' autocomplete='off' required>
                            <input type='hidden' name='celojum_id' value='{$celojumi['Celojumu_ID']}'>


                        </div>

                        <p id='form_cena'>{$celojumi['Cena']}€</p>

                        <button type='submit' name='pietcelojumam'>Pieteikties ceļojumam</button>

                    </form>

                </div>
            </div>

        ";
    }
} else {

    echo "Nav nevienas aktuālu ceļojumu!";

}
?>
