<?php     
        require "assets/connect_db.php";


        $piadavajumiSQL = "SELECT * from Jpiedavajumi";
        $atlasaPiedavajumus = mysqli_query($savienojums, $piadavajumiSQL);


        if(mysqli_num_rows($atlasaPiedavajumus) > 0){

            while($piedavajumi = mysqli_fetch_assoc($atlasaPiedavajumus)){

                echo "

                    <div class='piedavajumubox'>

                        <img src='{$piedavajumi{'Foto_URL'}}'>
    
                        <i class='fa fa-search'></i>
    
                        <div class='piedavajumunosakums'>
    
                            <p>{$piedavajumi['Nosaukums']}</p>
    
                        </div>
    
                    </div>
                        
                    ";

                }

            }else{

            echo "Nav nevienas aktualu ceļojumu!";

        }

?> 