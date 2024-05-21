<?php

require 'head-foot/header.php';

?>

<section id="jaunumi">

<div class="container">

    <div class="jaunumipiedavajumi">

        <h3>Jaunakie piedavajumi!</h3>

    </div>

    <div class="pidavajumi">

    <?php  

        require "Box-izvade/jaunumi.php";

    ?> 
        
    </div>

</div>


</section>

<section id="faq">

<div class="uzraksts">

    <h3>Biežak uzdodamie jautajumi!</h3>

</div>

<div class="faqflex">

    <div class="faqbox" id="left">

        <h3>Maršruts un transporta veids</h3>

        <p>Kādi ir pieejamie transporta veidi un maršruti, lai sasniegtu galamērķi? Vai ir iespējams ceļot ar vilcienu, autobusu vai automašīnu?</p>
    
    </div>


    <div class="faqbox" id="center">

        <h3>Brauciena ilgums un laika grafiks</h3>

        <p>Cik ilgs ir ceļojums un kāds ir plānotais laika grafiks? Vai ir paredzētas pastāvīgas vai sezonas izmaiņas?</p>
    
    </div>

    <div class="faqbox" id="rigth">

        <h3>Biļetes un rezervācijas</h3>

        <p>Vai ir nepieciešama biļete vai rezervācija? Vai ir jārezervē vietas iepriekš vai var to izdarīt uz vietas?</p>
    
    </div>


</div>

<div class="container">

    <div class="faqbuttons">

        <a class="prev" onclick="prevFAQ()"><i class="fa fa-angle-left"></i></a>

        <a class="next" onclick="nextFAQ()"><i class="fa fa-angle-right"></i></a>

    </div>

</div>


</section>

<?php

require 'head-foot/footer.php';

?>