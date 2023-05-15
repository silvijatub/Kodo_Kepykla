<?php
require_once 'connection.php';
?>
>

<!DOCTYPE html>
<html lang="lt">
    
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <?php
               $product = $_GET['product']; 
               $sql = "SELECT * FROM gaminys WHERE (`pavadinimas` LIKE '$product')";
               $result = $connection->query($sql);
               
               if (mysqli_num_rows($result) > 0) {
                 // output data of each row
                 while($row = mysqli_fetch_assoc($result)) {
                    $amount = $row['kiekis'];
                    $output = "Į krepšelį";
                    if ($amount == '0'){ $output = "Neturime";}
                   ?>
                     <div class="productPage" id="<?php echo $row["pavadinimas"]; ?>">

        <div id="responsiveProd">
        
        <div class="dark30Text productDesript" id="productInf">
            
        <div id = "prodMainInfo">
              <h1 class="productName" style="margin-bottom:0px" ><?php echo $row["pavadinimas"]; ?></h1>

             <div class="star-rating" style="margin-bottom:20px">
                            <ul class="list-inline" style="margin:0px">
                            <?php 
                                if ($row['vertinimo_kiekis'] == '0') {$stars = 0;}
                                else { $stars = round($row['vertinimo_suma']/$row['vertinimo_kiekis']);}
                                for ($star = 0; $star < $stars; $star++) {
                                    ?>
                                        <li class="list-inline-item"><i class="fa fa-star" onclick="dialog()" style="cursor:pointer"></i></li>
                                        <?php
                                }
                                for ($star = 0; $star < 5- $stars; $star++) {
                                    ?>
                                        <li class="list-inline-item"><i class="fa fa-star-o" onclick="dialog()" style="cursor:pointer"></i></li>
                                        <?php
                                }?>
                                    <li class="list-inline-item dark16Text">(<?php echo $row['vertinimo_kiekis']; ?>)</li>
                                <?php
                            ?>                
                            </ul>
                        </div>
            <p class="productPrice"><?php echo $row["kaina"]; ?> eur. / 1 vnt.</p>
                            </div>

            <div id="prodAprasymas"> <p class="aboutProduct" style="font-size: 20px"><?php echo $row["aprasymas"]; ?></p></div>
            
           
           <div id="prodKreps">
            <form class="form1">
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value" >-</div>
                <input type="number" id="number" value="0"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
              </form>

              <button class="secondaryButton ziuretiButton" disabled style="margin-top: 50px">
                    <div>
                        <img class="icon" src="images/basketIcon.png" alt="Į krepšelį">
                        <p><?php echo $output ?></p>
                    </div>
                </button>
        </div>
        
                            </div>

                            <div id="prodImage">
        <img class="productImage" src="<?php echo $row["foto_url"]; ?>" alt="<?php echo $row["pavadinimas"]; ?>"> 
        </div>
    </div>
                            
</div>
       
    <div class="productInfo">
        <!--<div class="dark30Header">
            <p class="font-size: 30px">KEPINIO SUDĖTIS</p>
        </div>       
        <div class="dark30Text papildInfo2">
            <p><?php echo $row["sudetis"]; ?></p>
        </div>-->
    </div>

    <script>
            function increaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
 
                kiek = <?php echo $row["kiekis"]; ?>;
                   
            if (value > kiek) {
                value = kiek; // Set the maximum value to 100
            } 
            document.getElementById('number').value = value;
            }

            function decreaseValue() {
            var value = parseInt(document.getElementById('number').value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? value = 1 : '';
            value--;
            document.getElementById('number').value = value;
            }
            </script>
                   <?php
                 }
               } else {
                   echo "0 results";
               }
        ?>

 <?php include 'repeatingElements/footer.php'; ?>

    <div id="myModal" class="modal">
            <div class="modal-content">
                <button class="close" onclick="closeDialog()">&times;</button>
                <p class="dark16Text">Šią prekę gali įvertinti tik ją įsigiję klientai.</p>
                <p class="dark16Text">Kviečiame užsisakyti šią prekę dabar!</p>
            </div>
        </div>
        
        <script src="cart.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
        <script type="text/javascript" src="functions.js"></script>
        <script type="text/javascript" src="items.js"></script>
        <script type="text/javascript" src="modalDialog.js"></script>

        <script type="text/javascript" src="functions.js"></script>
        <script>
            const menubar = document.querySelector(".menu-bar");
            const navMenu = document.querySelector(".nav-menu");

            menubar.addEventListener("click", () => {
                menubar.classList.toggle("active");
                navMenu.classList.toggle("active");
            })
        </script>
   
   </body>
</html>
