<?php
require_once 'connection.php';

$sql="SELECT * FROM gaminys ORDER BY vertinimo_suma / vertinimo_kiekis DESC";
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
     </head>

     <body>
        <?php include 'repeatingElements/header.php'; ?>

        <div class="apie">
            <div class="apiePaveiksl">
                <img src="images/Homepage_illustration.png" alt="bandelės">
                <div></div>
            </div>
            <div class="apieAprasymas">
                <h1>KODO KEPYKLA</h1>
                <p class="dark30Text">Esame kepykla jau nuo 2023 metų pradžios ir mūsų kepykloje „Kodo kepykla“ ne tik atgyja konditerijos menas, bet ir įgyja kitas, naujas spalvas – prancūziškąsias.</p>
                <button onclick="location.href='aboutus.php'" class="primaryButton">DAUGIAU APIE MUS</button>
            </div>
        </div>

        <div class="mylimiausi">
            <p class="light30Header">PIRKĖJŲ MYLIMIAUSI</p>
            <div>
            <div class="mylimiausiuNuotraukos">
            <?php
                $count = 0;
                while($row = mysqli_fetch_assoc($all_products)){
                    if ($count < 5){
                        $count++;
                        $pavadinimas=$row["pavadinimas"];
            ?>
                <button>
                    <img src="<?php echo $row["foto_url"]; ?>" alt="<?php echo $row["pavadinimas"]; ?>" onclick="location.href='product_page.php?product=<?php echo urlencode($row['pavadinimas']); ?>'">
                </button>
            <?php
                    }}
            ?>
            </div>
            <button onclick="location.href='meniu.php'" class="primaryButton">ŽIŪRĖTI VISUS PRODUKTUS</button>
            <br>
            <br>
            </div>
        </div>

        <div class="aprasymai">
            <div class="oranzinisAprasymas">
                <div class="oranzDiv">
                    <h2 style="margin-top:20px" style="font-family: 'Inter'">KĄ SIŪLOME?</h2>
                    <p class="light20Text">Kiekvienam iš savo klientų siūlome nepamirštamą patirtį neapsakomoje prancūziškų skonių jūroje.</p>
                </div>
                <img class="aprasymoimg" src="images/KouignAmann.png" alt="Kouign Amann">
            </div>
            <div class="zaliasAprasymas">
                <img class="aprasymoimg" src="images/Macaron.png" alt="Macarons">
                <div class="zalDiv">
                    <h2 style="margin-top:20px" style="font-family: 'Inter'">KODĖL VERTA RINKTIS MUS?</h2>
                    <p class="light20Text">Kodo kepykloje dirba patys profesionaliausi, kruopščiausi ir nuoširdžiausi žmonės visoje Lietuvoje, kurie kuo puikiausiai išmano prancūziškos konditerijos subtilybes.</p>
                </div>
            </div>
            <div class="oranzinisAprasymas">
                <div class="oranzDiv">
                    <h2 style="margin-top:20px" style="font-family: 'Inter'">KO REIKĖTŲ TIKĖTIS?</h2>
                    <p class="light20Text">Su šia kepykla nuolatos galima tikėtis šilto ir svetingo aptarnavimo, nepaprastai skanių desertų, gamintų su daug meilės.</p>
                </div>
                <img class="aprasymoimg" src="images/Madeline.png" alt="Madeline">
            </div>
        </div>

        <?php include 'repeatingElements/map.php'; ?>

        <?php include 'repeatingElements/footer.php'; ?>

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


