<?php
require_once 'connection.php';

$sql="SELECT * FROM gaminys ORDER BY vertinimo_suma / vertinimo_kiekis DESC";
$all_products = $connection->query($sql);
?>

<!DOCTYPE html>
<html lang="lt">
    <title>Home Page</title>
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

        <div class="apie">
            <div class="apiePaveiksl">
                <img src="https://lh6.googleusercontent.com/AaZFBoksxyG9LpjqMzaG-doyXpabcmvyBDe4wyQBst5KkZ57q_5LmQx08QRVEoA0heU=w2400" alt="bandelės">
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
            <div class="mylimiausiuNuotraukos">
            <?php
                $count = 0;
                while($row = mysqli_fetch_assoc($all_products)){
                    if ($count < 5){
                        $count++;
                        $pavadinimas=$row["pavadinimas"];
            ?>
                <button>
                    <img src="<?php echo $row["foto_url"]; ?>" alt="<?php echo $row["pavadinimas"]; ?>" onclick="location.href='meniu.php#<?php echo $row['pavadinimas']; ?>'">
                </button>
            <?php
                    }}
            ?>
            </div>
            <button onclick="location.href='meniu.php'" class="primaryButton">ŽIŪRĖTI VISUS PRODUKTUS</button>
        </div>

        <div class="aprasymai">
        <div class="oranzinisAprasymas">
                <div>
                    <h2>Lorem Ipsum</h2>
                    <p class="light20Text">dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet </p>
                </div>
                <img class="aprasymoimg" src="https://lh3.googleusercontent.com/4-if2dwav6dandec3J8y3SNpCGsSg78sZqR-udURvoKTL1aYO_F4kfX1T1c_4kIDGn8=w2400" alt="Aprašymo nuotrauka">
            </div>
            <div class="zaliasAprasymas">
                <img class="aprasymoimg" src="https://lh6.googleusercontent.com/vye5XF4AFPWqthCaBpyvr9lKhUoqbE2QZW_RXuwrd_ftcuP0NirMWQoA0irkm_1-Y6k=w2400" alt="Aprašymo nuotrauka">
                <div>
                    <h2>Lorem Ipsum</h2>
                    <p class="light20Text">dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet </p>
                </div>
            </div>
            <div class="oranzinisAprasymas">
                <div>
                    <h2>Lorem Ipsum</h2>
                    <p class="light20Text">dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet </p>
                </div>
                <img class="aprasymoimg" src="https://lh5.googleusercontent.com/WhWxT-AVjZfqSfsnNN7u0fhD0WKwhbth5HThsfPOHGYzsiJ3Hq0eRBuiut4nq7DV7zo=w2400" alt="Aprašymo nuotrauka">
            </div>
        </div>

        <div class="laukiameJusu">
            <p class="light30Header">LAUKIAME JŪSŲ</p>
            <div class="kepyklosInfo">
                <div class="light20Text">
                    <p class="pav">Kodo Kepykla</p>
                    <p>Studentų g. 50,</p>
                    <p>Kaunas</p>
                    <p class="darboLaikas">Darbo laikas:</p>
                    <p>I-V | 09:00 - 18:00</p>
                    <p>VI-VII | 10:00 - 16:00</p>
                </div>
                <div class="zemelapis">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Studentų g. 50, Kaunas&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://2yu.co">2yu</a>
                            <br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>
                            <a href="https://embedgooglemap.2yu.co/">html embed google map</a>
                            <style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
                        </div>
                    </div>
                </div>
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


