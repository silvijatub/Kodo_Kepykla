<?php
require_once 'connection.php';

$sql="SELECT * FROM krepselis";
$all_products = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="lt">
    <title>Kodo kepykla</title>
    <link rel="shortcut icon" type="image/png" href="images/Logo.png"/>

    <head>
        <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
     </head>
     <body>
        <?php include 'repeatingElements/header.php'; ?>

        <div class="krepselis">
            <h1>PREKIŲ KREPŠELIS</h1>
            <hr class="line"></hr>
            <div class="krepselioAntrastes">
                <div class="prek">Prekė</div>
                <div class="kiek">Kiekis</div>
                <div class="viso">Viso</div>
            </div>
            <hr style="margin-bottom:20px;" class="line"></hr>
            <div class="prekes"></div>
        </div>

        <div>
            <?php
                while($row = mysqli_fetch_assoc($all_products)){
            ?>
            <div >
                <div class="cart_item">
                    <img style="height:100px; margin: 10px 20px;" src="images/<?php echo $row["Pavadinimas"]; ?>.png" alt="<?php echo $row["Pavadinimas"]; ?>">   
                    <div style="width:300px;">
                        <p class="dark20Text"><?php echo $row["Pavadinimas"]; ?></p>
                        <p class="lightBold20Text"><?php echo $row["Kaina"]; ?> € / vnt.</p>
                    </div>
                    <p style="width:300px; margin-left: 270px;" class="lightBold20Text"><?php echo $row["Kiekis"]; ?> vnt. </p>
                    <p style="width:100px; margin-left: 220px;" class="lightBold20Text"><?php echo $row["Kaina"]*$row["Kiekis"]; ?> € </p>
                    <img onclick="deleteRow(<?php echo $row['Pavadinimas']; ?>)" style="height:24px;  margin-left: auto; margin-right: 20px; " src="<?php echo 'images/trash.png'; ?>" alt="<?php echo $row["Pavadinimas"]; ?>"> 
                    <script>
                        function deleteRow(pavadinimas) {
                                    console.log(pavadinimas);
                            const xhr = new XMLHttpRequest();
                            xhr.open('POST', 'delete_row.php');
                            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                            xhr.onload = function() {
                                if (xhr.status === 200) {
                                    console.log('Row deleted successfully');
                                    location.reload();
                                } else {
                                    console.error('Error deleting row');
                                }
                            };
                            xhr.send('pavadinimas=' + encodeURIComponent(pavadinimas));
                        }
                    </script>
                </div>
            </div>
            <?php
                }
            ?>

        </div>
        
        <button style="margin-left: 20px; margin-bottom: 40px;" class="primaryButton">UŽSAKYTI</button>

        <?php include 'repeatingElements/footer.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
        <script type="text/javascript" src="items.js"></script>
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
