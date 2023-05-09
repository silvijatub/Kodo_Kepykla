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
        
        <div class="dark30Text productDesript" >
            <h1 class="productName"><?php echo $row["pavadinimas"]; ?></h1>
            <p class="productPrice"><?php echo $row["kaina"]; ?> eur. / 1 vnt.</p>
            <p class="aboutProduct"><?php echo $row["aprasymas"]; ?></p>
            
           
           
            <form class="form1" style="margin-left: 0px">
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value" style="height:60px">-</div>
                <input type="number" id="number" value="0"/>
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"style="height:60px">+</div>
              </form>

              <button class="secondaryButton ziuretiButton" <?php if ($amount == '0'){ ?> disabled <?php   } ?> style="margin-top: 50px">
                    <div>
                        <img class="icon" src="images/basketIcon.png" alt="Į krepšelį">
                        <p><?php echo $output ?></p>
                    </div>
                </button>

 
        </div>
        

        <div class="stickyImage">
        <img class="productImage" src="<?php echo $row["foto_url"]; ?>" alt="<?php echo $row["pavadinimas"]; ?>"> 
        </div>   
    </div>

    <div class="productInfo">
        <div class="dark30Header">
            <p>KEPINIO SUDĖTIS</p>
        </div>       
        <div class="dark30Text papildInfo2">
            <p><?php echo $row["sudetis"]; ?></p>
        </div>
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
       
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
        <script type="text/javascript" src="functions.js"></script>
        <script type="text/javascript" src="items.js"></script>

   
   </body>
</html>
