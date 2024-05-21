<?php
    require "assets/connect_db.php";


                $celojumiSQL = "SELECT * from Celojumi";
                $atlasaCelojumus = mysqli_query($savienojums, $celojumiSQL);


                if(mysqli_num_rows($atlasaCelojumus) > 0){

                    while($celojumi = mysqli_fetch_assoc($atlasaCelojumus)){

                        echo "

                            <div class='celojumiboxi'>

                                <div class='celojumimage'>

                                <img src='{$celojumi{'Foto_URL'}}'>

                                </div>

                                <h3>{$celojumi['Nosaukums']}</h3>

                                <p id='cena'>{$celojumi['Cena']}€<p>
        
                                </div>
        
                            </div>

                            </div>
                        
                        ";

                    }

                }else{

                    echo "Nav nevienas aktualu ceļojumu!";

                }

?>