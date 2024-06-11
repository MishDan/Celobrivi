<?php

session_start();

 if(isset($_SESSION["lietotajvardsAdministrator"])){

    require 'Administrator/header.php';
    
 } 
 
 else if(isset($_SESSION["lietotajvardsModerator"])){

    require 'Moderator/header.php';
     
 } 

?>

<section id="apraksts">

    <div class="container">

        <h3>Skaistākās un Interesantākās Vietas ar Mums!</h3>

        <p>Mūsu tūrisma aģentūra piedāvā aizraujošus ceļojumus pa Latvijas skaistākajām un interesantākajām vietām, kas piepildīs Jūsu dienas ar neaizmirstamiem piedzīvojumiem un atmiņām. Neatkarīgi no tā, vai Jūs esat dabas mīļotājs, vēstures entuziasts vai adrenalīna meklētājs, mūsu piedāvājumi ir piemēroti visām gaumēm.<br><br> Izziniet Latvijas dzīvnieku pasauli, atklājiet Latvijas rūpniecības brīnumus, ieskatieties Latvijas vēsturē un kultūrā un baudiet aktīvu atpūtu un izklaidi.
    </div>

</section>

<section id="celojumi">

        <div class="container">

            <div class="filtracija">

                <div class="filt-alf">

                    <button name="filtazizvele" >Filtret no A lidz B</button>

                    <div class="filt-alf-menu">

                        <button name="a-lidz-z" id="sort-button">No A lidz Z</button>

                        <button name="z-lidz-a">No Z lidz A</button>

                        <button name="cenaaug">Cana augstak</button>

                        <button name="cenazem">Cena zemāk</button>

                    </div>

                </div>

                <div class="scrollvariants">

                    <div class="kvadrat"></div>
                    <div class="kvadrat"></div> 

                </div>


                <div class="filter-spec">

                    <button><i class='fas fa-filter'></i></button>


                </div>

            </div>

            <div class="filtracija-select">

                <div class="close_filter">

                    <i class="fas fa-close"></i>

                </div>

                    
            </div>


            <div class="celojumuflex">

                <?php
                    
                    require '../PHP/Celojumi/celojumi.php';
                    
                ?>

            </div>
            
        </div>

</section>
 

<section id="faq">

<div class="container">

    <div class="uzraksts">

        <h3>Biežak uzdodamie jautajumi!</h3>

    </div>

    <div class="faqflex">

        <div class="faqbox">

            <i class="fas fa-info"></i>

            <h3>Maršruts un transporta veids</h3>
        
        </div>


        <div class="faqbox">

            <i class="fas fa-info"></i>

            <h3>Brauciena ilgums un laika grafiks</h3>
        
        </div>

        <div class="faqbox">

            <i class="fas fa-info"></i>

            <h3>Biļetes un rezervācijas</h3>
        
        </div>

        <div class="faqbox">

            <i class="fas fa-info"></i>

            <h3>Biļetes un rezervācijas</h3>

        </div>

        <div class="faqbox">

            <i class="fas fa-info"></i>

            <h3>Biļetes un rezervācijas</h3>

        </div>

        <div class="faqbox">

            <i class="fas fa-info"></i>

            <h3>Biļetes un rezervācijas</h3>

        </div>


    </div>

</div>

</section>


<?php

if(isset($_SESSION["lietotajvardsAdministrator"])){
    
    require 'Administrator/footer.php';
   
} 

else if(isset($_SESSION["lietotajvardsModerator"])){

    require 'Moderator/footer.php';
    
} 

?>