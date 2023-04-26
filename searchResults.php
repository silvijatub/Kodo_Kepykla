<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="lt">
    <title>Kodo kepykla</title>
    <link rel="shortcut icon" type="image/png" href="images/Logo.png"/>
    
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
        <?php include 'repeatingElements/header.php'; ?>

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

        <?php include 'repeatingElements/footer.php'; ?>

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