 <?php
 
 session_start();


 if(isset($_SESSION["lietotajvardsAdministrator"])){

    require 'Administrator/header.php';
    
 } 
 
 else if(isset($_SESSION["lietotajvardsModerator"])){

    require 'Moderator/header.php';
     
 } 

 else {
  
     header("location:../index.php");
     exit;
 }

?>


    <section id="sakums">

        <div class="sak-celojumi">

        <div class="back-video">

            <iframe 
                src="https://www.youtube.com/embed/DHUgTMVheZk?autoplay=1&controls=0&loop=1&playlist=DHUgTMVheZk&modestbranding=1&showinfo=0&iv_load_policy=3&muted=1" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>

        </div>

            <h2>CEĻO BRĪVI!</h2>

            <a href="#sveicens" smooth >Atrast ceļojumu</a>

        </div>

        <div class="wave"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>


    </section>

    <section id="sveicens">

        <div class="worldimg">

            <img src="../image/world-map-bgg.png">

        </div>

        <div class="container">

            <h1>Sveiki!</h1>

            <p>Laipni lūgti uz "Apskati Latviju" - ceļojumu aģentūru, kas ir veltīta piedāvāt unikālus un aizraujošus ceļojumus pa skaisto Latviju! Mūsu misija ir iepazīstināt jūs ar Latvijas burvību un bagātību, sniedzot neaizmirstamas piedzīvojumu iespējas.</P>
            
            <P>Mūsu piedāvājumā ir dažādas tūrisma iespējas, sākot no grupas ceļojumiem līdz individualizētām ceļošanas programmām, kas atbilst jūsu vēlmēm un interešu sfērai. Ļaujiet mums būt jūsu gidiem pa Latvijas ceļiem un atklāt šīs valsts brīnumaino dārgumu!</P>

            <P>Sagaidīsim jūs, lai kopā izbaudītu Latvijas skaistumu un daudzveidību!</P>
           

        </div>

        <div class="trainanimation">

            <img src="../image/france-metro.png" alt="">

         </div>

    </section>


    <section id="popularakiecel">

        <div class="container">

            <div class="uzrakstaanimcija">

                <div class="celuzraksts" id="center">

                    <h3>Populārakie ceļojumi!</h3>

                </div>

                <div class="celuzraksts secend" id="buuttom">

                    <h3>Populārakie ceļojumi!</h3>

                </div>

            </div>

 

            <div class="popularakiepidavajumi">

                <?php

                    require "../PHP/Popularakie/popularakie.php";

                ?>

            </div>

        </div>   

            
    </section>


    <section id="reklama">

        <div class="container">

            <div class="raklamasbaneris">

                <h3>Meklē darbu?</h3>

                <p>Vai meklējat jaunas karjeras iespējas? IT-SPEKS ir vieta, kur varat atrast visdažādākos darbus!<br><br>Nezaudējiet iespēju – sāciet savu jauno karjeru jau šodien! Apmeklējiet mūsu vietni un atrodiet darbu, kas atbilst jūsu prasmēm un interesēm.</p>

                <div class="reklamasbaneris_img">

                    <a href=""><img src="../image/Reklama.jpg" alt=""></a>

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