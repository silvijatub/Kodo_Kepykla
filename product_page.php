<?php
require_once 'connection.php';
$stylesheet_url = "style.css";
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
        <?php include 'header.php'; ?>
            <?php
               $product = $_GET['product']; 
               $sql = "SELECT * FROM gaminys WHERE (`pavadinimas` LIKE '$product')";
               $result = $connection->query($sql);
               
               if (mysqli_num_rows($result) > 0) {
                 // output data of each row
                 while($row = mysqli_fetch_assoc($result)) {
                   ?>
                     <div class="productPage" id="<?php echo $row["pavadinimas"]; ?>">
        
        <div class="dark30Text productDesript" >
            <h1 class="productName"><?php echo $row["pavadinimas"]; ?></h1>
            <p class="productPrice"><?php echo $row["kaina"]; ?> eur. / 1 vnt.</p>
            <p class="aboutProduct"><?php echo $row["aprasymas"]; ?></p>
            
        
            <form class="form1">
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                <input type="number" id="number" value="1" />
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
              </form>

    <button class="secondaryButton ziuretiButton2">
        <div>
            <img src="https://lh4.googleusercontent.com/2l13WuPo34t9inUjJk9ofzE0DBNpDNg8c83JtlzHEFyyA0yJ8LLV4dpt0N87OoFAPtA=w2400" alt="Į krepšelį">
            <p>Į krepšelį</p>
        </div>
    </button>
        </div>


        <div class="stickyImage">
        <img class="productImage" src="<?php echo $row["foto_url"]; ?>" alt="<?php echo $row["pavadinimas"]; ?>"> 
        </div>   
    </div>
                   <?php
                 }
               } else {
                   echo "0 results";
               }
        ?>


    <div class="productInfo">
        <div class="dark30Header">
            <p>PAPILDOMA INFORMACIJA</p>
        </div>       
        <div class="dark30Text papildInfo">
            <p>Tai tobulas desertas bet kuriam paros metui. Šios bandelės pagamintos iš lengvų ir traškių tešlos sluoksnių, kurie užpildyti kokybišku šokoladu. </p>
        </div>
    </div>
    <div class="productInfo">
        <div class="dark30Header">
            <p>KEPINIO SUDĖTIS</p>
        </div>       
        <div class="dark30Text papildInfo2">
            <p>Tai tobulas desertas bet kuriam paros metui. Šios bandelės pagamintos iš lengvų ir traškių tešlos sluoksnių, kurie užpildyti kokybišku šokoladu. </p>
        </div>
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
       
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
        <script type="text/javascript" src="functions.js"></script>
        <script type="text/javascript" src="items.js"></script>

   
    
    <script>
            function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 2 ? value = 2 : '';
  value--;
  document.getElementById('number').value = value;
}
 </script>
   </body>
</html>
