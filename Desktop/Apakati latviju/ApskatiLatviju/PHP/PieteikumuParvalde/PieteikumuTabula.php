<div class="Pieteikumi">
<?php
require "assets/connect_db.php";


if(isset($_POST['delpiet'])){
    $piet_id = $_POST['pieteikum_id']; 

    $dzests_SQL = "UPDATE Pieteikumi SET Dzests = 1 WHERE Pieteikumu_ID = $piet_id";
    $dzests = mysqli_query($savienojums, $dzests_SQL); 

}

$Piet_SQL = "SELECT * FROM Pieteikumi WHERE Dzests = 0";
$atlasa_pieteikumus = mysqli_query($savienojums, $Piet_SQL); 

$skaits = 1;

?>

<div class="Pieteikumuparvalde">

    <div class="closetagat">

        <i class="fas fa-close" id="PieteikumuTableClose"></i>

    </div>


    <div class="piettable">

        <div class="tablenosakums">
            
            <p>Pieteikumu pārvalde</p>
        
        </div>

        <table class="PieteikumuTable">

            <tr>

                <th>Skaits</th>
                <th>Vārds</th>
                <th>Uzvārds</th>
                <th>Telefons</th>
                <th>E-pasts</th>
                <th>Celojums</th>
                <th>Statuss</th>
                <th>Pieteikuma datums</th>
                <th></th>


            </tr>
            <?php
                while($pieteikumi = mysqli_fetch_array($atlasa_pieteikumus)){
                $celojumi_id = $pieteikumi['Celojums'];

                $celojumi_SQL = "SELECT * FROM Celojumi WHERE Celojumu_ID = $celojumi_id";
                $celojums_atlasa = mysqli_query($savienojums, $celojumi_SQL);

                $statuss_id = $pieteikumi['Statuss'];

                $statuss_SQL = "SELECT * FROM Piet_status WHERE Statuss_id = $statuss_id";
                $atlasa_statusu = mysqli_query($savienojums, $statuss_SQL);
                
                if ($celojums = mysqli_fetch_assoc($celojums_atlasa)) {
                    if ($statuss = mysqli_fetch_assoc($atlasa_statusu)) {
                        echo "
                        <tr>
                            <td>{$skaits}</td>
                            <td>{$pieteikumi['Vards']}</td>
                            <td>{$pieteikumi['Uzvards']}</td>
                            <td>{$pieteikumi['Telefons']}</td>
                            <td>{$pieteikumi['Epasts']}</td>
                            <td>{$celojums['Nosaukums']}</td>
                            <td>{$statuss['Satus_nos']}</td>
                            <td>{$pieteikumi['Reg_datums']}</td>
                            <td class='tableeditbtn'>
                                <div class='moderform'>

                                    <form method='POST'> 
                                        <i class='fas fa-edit EditPieteikumus'></i>

                                        <input type='hidden' name='pieteikum_id' value='{$pieteikumi['Pieteikumu_ID']}'> 

                                        <button type='submit' name='delpiet'><i class='fas fa-trash'></i></button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                        ";

                    $skaits++;

                  }
                 }
                }

            ?>

        </table>

    </div>
</div>

    <?php

    $Piet_parskate_SQL = "SELECT * FROM Pieteikumi";    
    $atlasa_pieteikumus_parskates = mysqli_query($savienojums, $Piet_parskate_SQL);

    while ($pieteikumi_parskate = mysqli_fetch_assoc($atlasa_pieteikumus_parskates)) {

    $celojumi_parskate_id = $pieteikumi_parskate['Celojums'];


    $celojumi_Parskate_SQL = "SELECT * FROM Celojumi WHERE Celojumu_ID = $celojumi_parskate_id";
    $celojums__parskate_atlasa = mysqli_query($savienojums, $celojumi_Parskate_SQL);

    $statuss_parskate_id = $pieteikumi_parskate['Statuss'];

    $statuss_parskate_SQL = "SELECT * FROM Piet_status WHERE Statuss_id = $statuss_parskate_id";
    $atlasa_parskate_statusu = mysqli_query($savienojums, $statuss_parskate_SQL);

    if ($celojums_parskate = mysqli_fetch_assoc($celojums__parskate_atlasa)) {
        if ($statuss_parskate = mysqli_fetch_assoc($atlasa_parskate_statusu)) {
            echo "

            <div class='Pieteikumu_parskate'>

                <div class='piet_img'>

                    <img src='{$celojums_parskate['Foto_URL']}'>

                </div>

                <div class='piet_info'>

                    <div class='closetagat'>

                        <i class='fas fa-close cilvekInfoClose'></i>

                    </div>

                    <h3>{$celojums_parskate['Nosaukums']}</h3>

                    <div class='piet_apraksts'>

                        <p>{$celojums_parskate['Aprsksts']}</p>

                        <div class='piet_cena'>

                            <p>{$celojums_parskate['Cena']}€</p>

                        </div>

                    </div>

                    <div class='cilvek_info'>

                        <table class='cilveTable'>

                            <tr>
                                <td class='colon1'>Pieteikuma ID:</td>
                                <td class='colon2'>{$pieteikumi_parskate['Pieteikumu_ID']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Vārds:</td>
                                <td class='colon2'>{$pieteikumi_parskate['Vards']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Uzvārds:</td>
                                <td class='colon2'>{$pieteikumi_parskate['Uzvards']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Telefons:</td>
                                <td class='colon2'>{$pieteikumi_parskate['Telefons']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>E-pasts:</td>
                                <td class='colon2'>{$pieteikumi_parskate['Epasts']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Statuss:</td>
                                <td class='colon2'>{$statuss_parskate['Satus_nos']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Pieteikuma datums:</td>
                                <td class='colon2'>{$pieteikumi_parskate['Reg_datums']}</td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>";
          }
         }
        }
?>

</div>