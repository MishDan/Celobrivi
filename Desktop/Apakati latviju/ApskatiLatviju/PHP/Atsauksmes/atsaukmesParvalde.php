<div class="comentparvalde">

    <div class="closetagat">

        <i class="fas fa-close" id="AtsauksmeEditClose"></i>

    </div>

    <div class="funkbuttonflex">

        <div class="funkbutton">

            <button class="delAtsBtn">Izdzest komentāru</button>

        </div>

        <div class="scrolcoment">

        <?php

        require "assets/connect_db.php";

            if (!function_exists('renderStars')) {
                function renderStars($rating) {
                
                    $rating = max(1, min(5, (int)$rating));

                    $stars = '';
                    for ($i = 1; $i <= 5; $i++) {
                        if ($i <= $rating) {
                            $stars .= "<i class='fa fa-star yellow'></i>";
                        } else {
                            $stars .= "<i class='fa fa-star'></i>";
                        }
                    }

                    return $stars;
                }
            }

            $komentariSQL = "SELECT * FROM Atsauksmes WHERE Dzests = 0 ORDER BY Datums DESC";
            $atlasaKomentarus = mysqli_query($savienojums, $komentariSQL);

            if (mysqli_num_rows($atlasaKomentarus) > 0) {
                while ($komentari = mysqli_fetch_assoc($atlasaKomentarus)) {

                    $show_img1 = $show_img2 = $show_img3 = '';

                    if (!empty($komentari['Foto_1'])) {
                        $show_img1 = "<img class='comment-image' id='img1-{$komentari['Id']}' src='data:image/jpeg;base64," . base64_encode($komentari['Foto_1']) . "'>";
                    }

                    if (!empty($komentari['Foto_2'])) {
                        $show_img2 = "<img class='comment-image' id='img2-{$komentari['Id']}' src='data:image/jpeg;base64," . base64_encode($komentari['Foto_2']) . "'>";
                    }

                    if (!empty($komentari['Foto_3'])) {
                        $show_img3 = "<img class='comment-image' id='img3-{$komentari['Id']}' src='data:image/jpeg;base64," . base64_encode($komentari['Foto_3']) . "'>";
                    }

                    $rating = $komentari['Reitings'];

                    echo "
                    <div class='atsauksemsParvalde'>

                        <div class='kominfoParvalde'> 

                        <i class='fas fa-user-alt'></i>

                        <h3>{$komentari['Vards']}</h3>

                            <div class='starParvalde'>
                                " . renderStars($rating) . "
                            </div>

                        </div>

                        <p>{$komentari['Komentars']}</p>

                        <div class='atsaukmes_image_parvalde'>
                            $show_img1
                            $show_img2
                            $show_img3
                        </div>

                        <div class='deletcoment'>

                            <div id='overlayAt'></div>

                            <form method='post' >

                                <button type='submit' class='dzestFAtsauksmi' name='atsauksemsId' value='{$komentari['Id']}'><i class='fas fa-trash'></i></button>

                            </form>
                        </div>
                    </div>"
                    ;
                }
            } else {
                echo "Nav nevienas aktuālas atsauksmes!";
            }
            ?>

        </div>

    </div>




</div>