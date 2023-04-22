<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="lt">
   <head>
        <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
   </head>
   <body>
        <div class="header">
            <button class="headerBasket headerButton"><img src="https://lh3.googleusercontent.com/L8UqbsKKayiXLOdtIE5GUbcrJap7XeJCZ93LR0PUh6rg6e4fzSYfWbVopYe387jvmu167a0O7QoOR1-etIkmZVmRScCfdK7KHGPija06GSts-9g42T8idDaMryDMwYkQije7E3sRFa_rc4IvGD796l-Eaj2SVESfKEaWWjvs3s4CpFwJDx5WHAUWyQHNk0tgtuUs4emAQMvIa5JFAK53YgB0nVfi4FmIJP6ulzu3eSSarVYbBUdwJTZJZyhDNqVwSW2qBHQFmbziq_OdFNnKZzx96Rtc-6nL4L2ukkt1SidpED4YeMmZn-lst4u4qLSNmLVnxv9qO-1C0YLEXHazkETigojx-YoZWZ8r5Kt_c6usgjJ9hZ4iZ2V8-34BecFqr-XKqVsE4k4tKrnAuwGJC9un9a-KgZTR7FlUwYVdIEDMk48lro4NAKIdBveQUkNRTeJVG2M1y_VAgatyVBj__ltXv5u4YPpVsEFcgQOQHZG0LDZ_WA3sgDJbmtsFFW2ujxdsTReMpPi2B0U5_6Voh5NpHYfAX-V0gvNjKhXfZziue-UbP2ExdutjxejTT8QXeWGj0HTHjOyNKGWYmiMBkmfEUlYEyJSbCXFZlB-LMp7_tIGv7DAWeAjCrYNFD6RE6utBUDbQ5dBN9JcpdRxK_mJ83sM9Lo1BCi-AFj5mxusTuXAUvXPDsxtfbEpiGZaKIvOVdY1msXHB0PAH2lukGlkyr3cH7tB22KC5H3f5ZsRro1nd2KbqynDOEGVbcy3x98yQEPHwegBT3oDOXm6inekIf0HXFCHw9Gh0_-7VRdO74wNWfjiMGooX9GPvpYUCS6WmsQfEyQq27P82cUbJqPnkF63hx-GfOlnw_ugpEo59ckficutx7WIXQEqrsaCXnVVi29RLkEyK0sii2ZwFPM68Bi1lrmlijEomqAoPL9NxP0jT=w40-h36-no?authuser=0" alt="Krepšelis"></button>
            <button onclick="location.href='contacts.html'" class="headerButton">KONTAKTAI</button>
            <button class="headerButton">PRIVATUMO POLITIKA</button>
            <button class="headerButton">KARJERA</button>
            <button onclick="location.href='meniu.php'" class="headerButton">MENIU</button>
            <button onclick="location.href='aboutus.html'" class="headerButton">APIE MUS</button>
            <button onclick="location.href='homepage.php'" class="logoButton"><img class="logo" src="images/Logo.png" alt="Logo"></button>
        </div>

        <div class="search-intro">
            <p class="dark20Text">Paieškos rezultatai:  <em><?php echo $_GET['search']; ?></em></p>
        </div>

        <div class="meniu" id="meniu">
            <?php
                $search = $_GET['search']; 
                $sql="SELECT * FROM gaminys WHERE (`aprasymas` LIKE '%".$search."%') OR (`pavadinimas` LIKE '%".$search."%')";
                $all_products = $connection->query($sql);
                
                $rows = [];
                while($row = mysqli_fetch_assoc($all_products)){
                    $rows[] = $row;

                    $amount = $row['kiekis'];
                    $output = "Į krepšelį";
                    if ($amount == '0'){ $output = "Neturime";}
            ?>
            <div class="meniuItemGrid">
                <button class="secondaryButton ziuretiButton" <?php if ($amount == '0'){ ?> disabled <?php   } ?>>
                    <div>
                        <img class="icon" src="images/basketIcon.png" alt="Į krepšelį">
                        <p><?php echo $output ?></p>
                    </div>
                </button>
                <div class="meniuItem" id="<?php echo $row["pavadinimas"]; ?>">
                    <img src="<?php echo $row["foto_url"]; ?>" alt="<?php echo $row["pavadinimas"]; ?>">                    
                    <div> 
                        <p class="dark25Header" style="margin:0px;"><?php echo $row["pavadinimas"]; ?></p>
                        
                        <div class="star-rating">
                            <ul class="list-inline" style="margin:0px">
                            <?php 
                                if ($row['vertinimo_kiekis'] == '0') {$stars = 0;}
                                else { $stars = round($row['vertinimo_suma']/$row['vertinimo_kiekis']);}
                                for ($star = 0; $star < $stars; $star++) {
                                    ?>
                                        <li class="list-inline-item"><i class="fa fa-star" onclick="dialog()"></i></li>
                                        <?php
                                }
                                for ($star = 0; $star < 5- $stars; $star++) {
                                    ?>
                                        <li class="list-inline-item"><i class="fa fa-star-o" onclick="dialog()"></i></li>
                                        <?php
                                }?>
                                    <li class="list-inline-item dark16Text">(<?php echo $row['vertinimo_kiekis']; ?>)</li>
                                <?php
                            ?>                
                            </ul>
                        </div>

                        <p class="kaina lightBold20Text"><?php echo $row["kaina"]; ?> € / vnt.</p>
                        <p class="descriptionText"><?php echo $row["aprasymas"]; ?></p>
                    </div>
                 </div>
            </div>
            <?php
                }
                    if (count($rows) === 0){
                        ?>
                            <div class="search-empty">
                                <img src="images/no-results.png" alt="Produktų nerasta">
                                <p class="dark25Text">Pageidaujamos prekės kol kas neturime!</p>
                            </div>
                        <?php
                    }
            ?>

        </div>

        <div class="kontaktai">
            <div class="light16Text">
                <p class="lightBold20Text">Susisiekite su mumis:</p>
                <p>kodokepykla@gmail.com</p>
                <p>+37065658564</p>
                <div>
                    <a href="https://www.facebook.com"><img class="socials" src="https://lh3.googleusercontent.com/LevHz4AOP4W_CeqKZvs8bX4hr79W_iYtyn_0D9doN7LmLvbhdUU0eP0iGnbLBT9Pe_I=w2400"></a>
                    <a href="https://www.instagram.com"><img class="socials" src="https://lh4.googleusercontent.com/RIUGBPCHD63KkA8iWPLKbzXgXTH5Y86FBQggGL_ZyJpSWz5IvSahyFw8Wjttsepyr8Q=w2400"></a>
                </div>
                <p>@ Kodo Kepykla 2023</p>
            </div>
            <div class="light16Text">
                <p class="lightBold20Text">Mus rasite:</p>
                <p>Studentų g. 50,</p>
                <p>Kaunas</p>
            </div>
        </div>

        <div id="myModal" class="modal">
            <div class="modal-content">
                <button class="close" onclick="closeDialog()">&times;</button>
                <p class="dark16Text">Šią prekę gali įvertinti tik ją įsigiję klientai.</p>
                <p class="dark16Text">Kviečiame užsisakyti šią prekę dabar!</p>
            </div>
        </div>

        <script type="text/javascript" src="functions.js"></script>
        <script type="text/javascript" src="modalDialog.js"></script>
   </body>
</html>