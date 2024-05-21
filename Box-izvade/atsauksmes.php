<?php     
            require "assets/connect_db.php";


            $komentariSQL = "SELECT * from Atsauksmes";
            $atlasaKomentarus = mysqli_query($savienojums, $komentariSQL);


            if(mysqli_num_rows($atlasaKomentarus) > 0){

                while($komentari = mysqli_fetch_assoc($atlasaKomentarus)){

                     echo "


                        <div class='atsauksems'>

                        <h3><i class='fas fa-user-alt'></i>$komentari[Vards]</h3>
        
                        <div class='star'>
        
                            <i class='fa fa-star-o'></i>
                            <i class='fa fa-star-o'></i>
                            <i class='fa fa-star-o'></i>
                            <i class='fa fa-star-o'></i>
                            <i class='fa fa-star-o'></i>
        
                        </div>
        
                        <p>$komentari[Komentars]</p>
        
                        <img>
        
                    </div>
                        
                        ";

                    }

                }else{

                    echo "Nav nevienas aktualu komentaru!";

                }

            ?> 