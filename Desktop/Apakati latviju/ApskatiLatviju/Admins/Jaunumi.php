<?php

session_start();

 if(isset($_SESSION["lietotajvardsAdministrator"])){

    require 'Administrator/header.php';
    
 } 
 
 else if(isset($_SESSION["lietotajvardsModerator"])){

    require 'Moderator/header.php';
     
 } 

?>

<section id="jaunumi">

<div class="container">

    <div class="jaunumipiedavajumi">

        <h3>Jaunakie piedavajumi!</h3>

    </div>

    <div class="pidavajumi">

    <?php  

        require "../PHP/Jaunumi/jaunumi.php";

    ?> 
        
    </div>

</div>


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