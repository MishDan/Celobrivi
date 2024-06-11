<?php

require "assets/connect_db.php";


if(isset($_POST['PievienotMod'])){
    $Lietotajvards = $_POST['ModeLietVar'];
    $Parole = $_POST['ModerPar'];

    $hashed_parole = password_hash($Parole, PASSWORD_DEFAULT);

    $Moder_lietotajvards = mysqli_real_escape_string($savienojums, $Lietotajvards);
    $Moder_parole = mysqli_real_escape_string($savienojums, $hashed_parole);

    if($Moder_lietotajvards!="" && $Moder_parole!=""){ 
        $Moder_pievieno_SQL = "INSERT INTO Moderatori(Lietotajvards,Parole) VALUES('$Moder_lietotajvards','$Moder_parole')";

        if(mysqli_query($savienojums, $Moder_pievieno_SQL)){
            
            header("Location: index.php");
        } else {
            echo "Neizdevās pievienot moderatoru";
        }
    } else {
        echo "Lūdzu, aizpildiet visus laukus!";
    }
}



if(isset($_POST['delmoder'])){
    $moder_id = $_POST['moderator_id']; 

    $dzests_SQL = "DELETE FROM Moderatori WHERE Moderatori_ID = $moder_id";
    $dzests = mysqli_query($savienojums, $dzests_SQL); 

}

$Mod_SQL = "SELECT * FROM Moderatori";
$atlasa_moderatorus = mysqli_query($savienojums, $Mod_SQL); 

$skaits = 1;
?>



<div class="moderatoredit">

<div class="closetagat">

    <i class="fas fa-close" id="moderTableClose"></i>

</div>


<div class="moderedittable">

    <div class="tablenosakums">
        
        <p>Moderatoru pārvalde</p>
    
        <Button class="openmModerAddForm">Pievienot moderatoru</Button>
    
    </div>

    <table class="ModeratorTable">

        <tr>

            <th>Skaits</th>
            <th>Lietotajvārds</th>
            <th>Pievienošanas datums</th>
            <th></th>

        </tr>

        <?php 
            while($moderatori = mysqli_fetch_array($atlasa_moderatorus)) {
                echo "
                <tr>
                    <td>{$skaits}</td>
                    <td>{$moderatori['Lietotajvards']}</td>
                    <td>{$moderatori['Reg_datums']}</td>
                    <td class='tableeditbtn'>
                        <div class='moderform'>
            
                            <form method='POST'> 
                                <i class='fas fa-edit openLietParEdit'></i>
            
                                <input type='hidden' name='moderator_id' value='{$moderatori['Moderatori_ID']}'> 
            
                                <button type='submit' name='delmoder'><i class='fas fa-trash'></i></button>
                            </form>
            
                        </div>
                    </td>
                </tr>
                ";

                $skaits++;
                
            }
        ?>

        </table>

    </div>

</div> 


<div class="moderaddform"> 

    <div class="moderaddnos">

        <div class="closetagat">

            <i class="fas fa-close" id="moderAddfromClose"></i>

        </div>

        <h3>Moderatoru pievienošana</h3>

    </div>

    <div class="modrfromadd">

    <form method="POST">

        <input type="text" placeholder="Lietotajvārds" minlength="4" maxlength="20" name="ModeLietVar" autocomplete="off" require>

        <input type="text" placeholder="Parole" minlength="4" maxlength="20" name="ModerPar" autocomplete="off" require>

        <button type="submit" name="PievienotMod">Pievienot</button>

    </form>
        
    </div>


</div>


<div class="lietvards-pasvord">

    <div class="lietvar-pasvordinfo">

        <div class="closetagat">

            <i class="fas fa-close" id="liet-passClose"></i>

        </div>

        <h3>Moderatoru rediģēšana</h3>

    </div>

    <button class="lietEditOpenBtn">Lietotajvārds</button>

    <button class="passEditOpenBtn">Parole</button>

</div>

<div class="lietvardsedit">

    <div class="lietvar-pasvordinfo">

    <div class="closetagat">

        <i class="fas fa-close" id="liet-Close"></i>

    </div>

    <h3>Jauns lietotajvārds</h3>

    </div>

    <form methode="POST">

        <input type="hidden" name="moder_id_liet" value="<?php echo ($moderatori['Moderatori_ID']);?>">

        <input type="text" placeholder="Jauns lietotajvārds" name="jaunslietvards" autocomplete="off">

        <button type="submit" name="editmoderlietvards">Atjaunot</button>

    </form>

</div>



<div class="passedit">

    <div class="lietvar-pasvordinfo">

    <div class="closetagat">

        <i class="fas fa-close" id="pass-Close"></i>

    </div>

    <h3>Jauna parole</h3>

    </div>

    <form methode="POST" action="../PHP/ModeratorTable/ModerEdit.php">

        <input type="hidden" name="moder_id_pass" value="<?php echo ($moderatori['Moderatori_ID']);?>">

        <input type="text" placeholder="Jauna parole" name="jaunaparole">

        <button type="submit" name="editmoderpass">Atjaunot</button>

    </form>


</div>


