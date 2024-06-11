<?php     
require "assets/connect_db.php";


$piadavajumiSQL = "SELECT * FROM Celojumi ORDER BY Celojumu_ID DESC LIMIT 6";
$atlasaPiedavajumus = mysqli_query($savienojums, $piadavajumiSQL);


if(mysqli_num_rows($atlasaPiedavajumus) > 0){

    while($piedavajumi = mysqli_fetch_assoc($atlasaPiedavajumus)){

        echo "

        <div class='celojumiboxi'>

            <img src='{$piedavajumi{'Foto_URL'}}'>

            <i class='fa fa-search'></i>

                <div class='celojumuinfo'>

                    <div class='nosflex'>

                        <h3>{$piedavajumi['Nosaukums']}</h3>

                        <p>{$piedavajumi['Cena']}€</p>

                    </div>

                </div>

        </div>
        
        <div class='celojumi_Form'>

            <div class='form_img'>

                <img src='{$piedavajumi['Foto_URL']}'>

            </div>

            <div class='form_info'>

                <div class='closetagat'>

                    <i class='fas fa-close JauFormClose'></i>

                </div>

                <h3>{$piedavajumi['Nosaukums']}</h3>

                <div class='form_apraksts'>

                    <p>{$piedavajumi['Aprsksts']}</p>

                </div>

                <div class='cel_input'>

                    <input type='text' placeholder='Vārds' name='vards' required>
                    <input type='text' placeholder='Uzvārds' name='uzvards' required>
                    <input type='tel' placeholder='Telefons' name='telefons' required>
                    <input type='email' placeholder='Epasts' name='epasts' required>

                </div>

                <p id='form_cena'>{$piedavajumi['Cena']}€</p>

                <button>Pieteikties ceļojumam</button>

                <?php 
                
                    }
                
                
                ?>

            </div>
        </div>";

        }

    }else{

    echo "Nav nevienas aktualu ceļojumu!";

}

?> 