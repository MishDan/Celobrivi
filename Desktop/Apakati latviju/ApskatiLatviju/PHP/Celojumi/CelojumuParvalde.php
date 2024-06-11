<div class="celparvalde">
    <div class="closetagat">

        <i class="fas fa-close" id="redCelParClose"></i>

    </div>

    <div class="funkbuttonflex">

        <div class="funkbuttoncel">

            <button class="PieCelFormOpen green">Pievienot celojumu</button>
            <button class="redNos yellowbtn">Mainit nosakumus</button>
            <button class="redApr yellowbtn">Mainit aprakstu</button>
            <button class="RedBil yellowbtn">Mainit bildi</button>
            <button class="RedCenu yellowbtn">Mainit Cenu</button>
            <button class="PiecAck yellowbtn">Pievienot akcijas cenu</button>
            <button class="DesCel red">Dzest celojumu</button>

        </div>

    </div>

    <div class="scrolcel">

        <?php
            require "assets/connect_db.php";

            $celojumiSQL = "SELECT * FROM Celojumi";
            $atlasaCelojumus = mysqli_query($savienojums, $celojumiSQL);

            $izvadAkcijascenu = '';

            if (mysqli_num_rows($atlasaCelojumus) > 0) {
                while ($celojumi = mysqli_fetch_assoc($atlasaCelojumus)) {

                    if ($celojumi['Akcijas_cena'] == 0) {
                        $izvadAkcijascenu = 'Nav';
                    } else {
                        $izvadAkcijascenu = $celojumi['Akcijas_cena'];
                    }

                    echo "
                    <div class='celojumiParvaldeBoxi'>

                        <div class='celparfoto'>
                            <img src='{$celojumi['Foto_URL']}'>
                        </div>

                        <div class='celparinfo'>
                            <h3>{$celojumi['Nosaukums']}</h3>
                            <p>{$celojumi['Aprsksts']}</p>
                        </div>

                        <table class='celParTable'>
                            <tr>
                                <td class='colon1'>Celojumu ID:</td>
                                <td class='colon2'>{$celojumi['Celojumu_ID']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Cena:</td>
                                <td class='colon2'>{$celojumi['Cena']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Akcijas Cena:</td>
                                <td class='colon2'>$izvadAkcijascenu</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Popularitāte:</td>
                                <td class='colon2'>{$celojumi['Popularitate']}</td>
                            </tr>
                            <tr>
                                <td class='colon1'>Pievienošanas datums</td>
                                <td class='colon2'>{$celojumi['Reg_datums']}</td>
                            </tr>
                        </table>

                         <div class='editcel'>

                            <form method='post'>

                                <button type='submit' class='' name='atsauksemsId'><i class='fas fa-edit'></i></button>

                            </form>

                        </div>

                         <div class='deletcel'>

                            <form method='post'>

                                <button type='submit' class='' name='atsauksemsId'><i class='fas fa-trash red'></i></button>

                            </form>

                        </div>
            
                        <div class='overlayCp'></div>
                    </div>
                    ";
                }
            } else {
                echo "Nav nevienas aktuālu ceļojumu!";
            }
        ?>
    </div>
</div>


<div class="celPievienoForm">

    <div class="CelPievFormInfo">

        <div class="closetagat">

            <i class="fas fa-close" id="PievFormClose"></i>

        </div>

        <h3>Celojumi Pievienošana</h3>

    </div>

    <form methode="POST">

        <input type="text" placeholder="Nosakums" name="jaunaparole">

        <input type="text" placeholder="Cena" name="jaunaparole">

        <input type="text" placeholder="Foto url" name="jaunaparole">
        
        <textarea class="celApraksts" name="atkomentars" placeholder="Apraksts" require></textarea>

        <button type="submit" name="editmoderpass">Pievienot</button>

    </form>


</div>


