<?php

session_start();

 if(isset($_SESSION["lietotajvardsAdministrator"])){

    require 'Administrator/header.php';
    
 } 
 
 else if(isset($_SESSION["lietotajvardsModerator"])){

    require 'Moderator/header.php';
     
 } 

?>

<section id="autsauksmes">

    <div class="headdesain">

        <div class="des1"></div>

        <h3>Atsaukmes</h3>

    </div>

    <div class="container">

        <div class="atsaksmedtext">

            <p>Šeit Jūs varat dalīties savā pieredzē un viedokļos par mūsu ceļojumiem un sniegtajiem pakalpojumiem. Mēs augstu vērtējam Jūsu atsauksmes, jo tās palīdz mums uzlabot mūsu ceļojumus un piedāvāt vēl labāku ceļojumus klientiem. Mūsu uzņēmums ir gatavs uzklausīt Jūsu viedokli un strādāt pie tā, lai uzlabotu Jūsu pieredzi. Paldies, ka palīdzat mums kļūt labākiem!</p>

        </div>

        <div class="formbuttons">

                <button class="atbtn">Atstāt komentāru<i class="fas fa-plus"></i></button>

            <div class="butonpos">    

                <i class="fas fa-info" id="infobut"></i>

                <div class="atinfo">

                        <div class="atinfotext">

                            <h3>Kāpēc Jūsu Atsauksmes Ir Svarīgas?</h3>
                                <p>1. Kvalitātes uzlabošana: Jūsu komentāri un ieteikumi sniedz mums vērtīgu ieskatu par to, kas darbojas labi un kur vēl ir iespējas uzlabot.<br>
                                2. Klientu apmierinātība: Mēs vēlamies nodrošināt, lai Jūs būtu apmierināti ar mūsu sniegtajiem pakalpojumiem, un Jūsu atsauksmes ir galvenais rādītājs, kas palīdz mums to sasniegt.<br>
                                3. Atklātība un uzticība: Mēs esam atvērti gan pozitīvai, gan konstruktīvai kritikai. Jūsu godīgums palīdz mums kļūt labākiem un stiprina mūsu attiecības ar klientiem.</p>
                            <h3>Kā Iesniegt Atsauksmi?</h3>
                                <p>1. Apmeklējiet atsauksmju veidlapu: Aizpildiet zemāk esošo veidlapu ar savu atsauksmi.<br>
                                2. Būt konkrētam: Norādiet konkrētus aspektus, kas Jums patika vai kur, Jūsuprāt, nepieciešami uzlabojumi.<br>
                                3. Esiet godīgs: Mēs vēlamies dzirdēt patiesību, lai varētu reaģēt un uzlabot mūsu pakalpojumus.</p>

                        </div>

                </div>

            </div>

        </div>

        <div class="atform">

                <div class="closetagat">

                    <i class="fas fa-close" id="atclose"></i>

                </div>

                <div class="atsaforms">

                    <form method="post" id="atform" action="">

                        <input type="text" minlength="4" maxlength="20" placeholder="vārds" name="atvards" autocomplete="off" require>

                        <div class='formstar'><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></div>

                        <textarea class="komentars" name="atkomentars" placeholder="Tavs komentars" require></textarea>

                        <div class="atsubmiit">

                            <button type="submit" name="PievienotAt">Aizsutit</button>

                        </div>

                    </form>

                </div>

        </div>
        
        <div class="border"></div>

        <?php

            require "../PHP/Atsauksmes/atsauksmes.php";

        ?>

</section>

<?php

if(isset($_SESSION["lietotajvardsAdministrator"])){
    
    require 'Administrator/footer.php';
   
} 

else if(isset($_SESSION["lietotajvardsModerator"])){

    require 'Moderator/footer.php';
    
} 

?>