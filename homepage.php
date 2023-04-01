<?php
require_once 'connection.php';

$sql="SELECT * FROM gaminys ORDER BY vertinimo_suma / vertinimo_kiekis DESC";
$all_products = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="lt">
    <title>Home Page</title>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
     </head>

     <body ng-app="app" ng-controller="controller">
        <div class="header">
            <button class="headerBasket headerButton"><img src="https://lh3.googleusercontent.com/L8UqbsKKayiXLOdtIE5GUbcrJap7XeJCZ93LR0PUh6rg6e4fzSYfWbVopYe387jvmu167a0O7QoOR1-etIkmZVmRScCfdK7KHGPija06GSts-9g42T8idDaMryDMwYkQije7E3sRFa_rc4IvGD796l-Eaj2SVESfKEaWWjvs3s4CpFwJDx5WHAUWyQHNk0tgtuUs4emAQMvIa5JFAK53YgB0nVfi4FmIJP6ulzu3eSSarVYbBUdwJTZJZyhDNqVwSW2qBHQFmbziq_OdFNnKZzx96Rtc-6nL4L2ukkt1SidpED4YeMmZn-lst4u4qLSNmLVnxv9qO-1C0YLEXHazkETigojx-YoZWZ8r5Kt_c6usgjJ9hZ4iZ2V8-34BecFqr-XKqVsE4k4tKrnAuwGJC9un9a-KgZTR7FlUwYVdIEDMk48lro4NAKIdBveQUkNRTeJVG2M1y_VAgatyVBj__ltXv5u4YPpVsEFcgQOQHZG0LDZ_WA3sgDJbmtsFFW2ujxdsTReMpPi2B0U5_6Voh5NpHYfAX-V0gvNjKhXfZziue-UbP2ExdutjxejTT8QXeWGj0HTHjOyNKGWYmiMBkmfEUlYEyJSbCXFZlB-LMp7_tIGv7DAWeAjCrYNFD6RE6utBUDbQ5dBN9JcpdRxK_mJ83sM9Lo1BCi-AFj5mxusTuXAUvXPDsxtfbEpiGZaKIvOVdY1msXHB0PAH2lukGlkyr3cH7tB22KC5H3f5ZsRro1nd2KbqynDOEGVbcy3x98yQEPHwegBT3oDOXm6inekIf0HXFCHw9Gh0_-7VRdO74wNWfjiMGooX9GPvpYUCS6WmsQfEyQq27P82cUbJqPnkF63hx-GfOlnw_ugpEo59ckficutx7WIXQEqrsaCXnVVi29RLkEyK0sii2ZwFPM68Bi1lrmlijEomqAoPL9NxP0jT=w40-h36-no?authuser=0" alt="Krepšelis"></button>
            <button onclick="location.href='contacts.html'" class="headerButton">KONTAKTAI</button>
            <button class="headerButton">PRIVATUMO POLITIKA</button>
            <button class="headerButton">KARJERA</button>
            <button onclick="location.href='meniu.php'" class="headerButton">MENIU</button>
            <button onclick="location.href='aboutus.html'" class="headerButton">APIE MUS</button>
            <button onclick="location.href=''" class="logoButton"><img class="logo" src="https://lh3.googleusercontent.com/8sperpVU0RndjYvu9XUULVmaswL-Gkw0RN_BADTMxpOayFjsFgVj0B2kQnbvXaAFZDw=w2400" alt="Logo"></button>
        </div>

        <div class="apie">
            <div class="apiePaveiksl">
                <img src="https://lh6.googleusercontent.com/AaZFBoksxyG9LpjqMzaG-doyXpabcmvyBDe4wyQBst5KkZ57q_5LmQx08QRVEoA0heU=w2400" alt="bandelės">
                <div></div>
            </div>
            <div class="apieAprasymas">
                <h1>KODO KEPYKLA</h1>
                <p class="dark30Text">Esame kepykla jau nuo 2023 metų pradžios ir mūsų kepykloje „Kodo kepykla“ ne tik atgyja konditerijos menas, bet ir įgyja kitas, naujas spalvas – prancūziškąsias.</p>
                <button class="primaryButton">DAUGIAU APIE MUS</button>
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
                    <p class="light30Text">dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet </p>
                </div>
                <img src="https://lh3.googleusercontent.com/4-if2dwav6dandec3J8y3SNpCGsSg78sZqR-udURvoKTL1aYO_F4kfX1T1c_4kIDGn8=w2400" alt="Aprašymo nuotrauka">
            </div>
            <div class="zaliasAprasymas">
                <img src="https://lh6.googleusercontent.com/vye5XF4AFPWqthCaBpyvr9lKhUoqbE2QZW_RXuwrd_ftcuP0NirMWQoA0irkm_1-Y6k=w2400" alt="Aprašymo nuotrauka">
                <div>
                    <h2>Lorem Ipsum</h2>
                    <p class="light30Text">dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet </p>
                </div>
            </div>
            <div class="oranzinisAprasymas">
                <div>
                    <h2>Lorem Ipsum</h2>
                    <p class="light30Text">dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet dolor sit amet </p>
                </div>
                <img src="https://lh5.googleusercontent.com/WhWxT-AVjZfqSfsnNN7u0fhD0WKwhbth5HThsfPOHGYzsiJ3Hq0eRBuiut4nq7DV7zo=w2400" alt="Aprašymo nuotrauka">
            </div>
        </div>

        <div class="laukiameJusu">
            <p class="light30Header">LAUKIAME JŪSŲ</p>
            <div class="kepyklosInfo">
                <div class="light25Text">
                    <p class="pav">Kodo Kepykla</p>
                    <p>Studentų g. 50,</p>
                    <p>Kaunas</p>
                    <p class="darboLaikas">Darbo laikas:</p>
                    <p>I-V | 09:00 - 18:00</p>
                    <p>VI-VII | 10:00 - 16:00</p>
                </div>
                <div class="zemelapis">
                    <img src="https://lh3.googleusercontent.com/w7rZALBmnXecPbEx7JVWT33gck1QuxluC4XdV9kl57XGHkicbUThwGQ5nA1O8bI3cQ7UN8A91kUxgRbQjzs4W9Zc1yvRDu1Lz1RdrJ-d2lxsNSVGrmUyM2Qtm8wyeTZld_TMszZW0GgReguELIeDsCH-n7oTEGbtOqca0W5CoOdTajcGLk69tvLmvdPX45xkZqc0sa7OYRimqUhNzk72cv6RZrKGpTQRpWyhPGTa3sVLjPzOeFcmo3A3gNIUrbxxIJ7PjlEDYD0mAXEbaSkEgRQDuQaLSJj9Fb_m4JRNQjwy_x6bzAL3QHjeKWSlO8Oq_L-El3BC7j9qk8oADg7fLOsjxkddjo7vvceQ73sRIXXnaJRr_zAq4QlmBw8Vpo4_L1oblhRpvWawaYP-3R8JsXimPZQ69HQg-Hm-nhj8j4B02AO2gugGZqNZoq5wlHTIUlj9tuGgTFchTqWIrktZMGvM9pn3IDFZtPNZSj7AnwbuZ8l5q_jm5tbA85LTxFcJeYmcm_kQbHuagQmJYhHZs2hNbWaVROelDaAVHrtG9J5mm1Cg4qZkdnz-FUmN94EnBAKbkORquSjIFQEcw0JLEbLBJSIhAGBnsEWBTVB5zeZgLqxixZZwCuymVc5F8ivyYVkyDEucvY05b2HpKYOxF7SY3C0jHYMfFB-xfSjoP-21fOMl-cp0PnByswi5XVYfdzqIm-xd4Hxx3lGJg3QRckASGdd6VXIKt4IgTY-Icw5icKlA5_ONqjjAkvbGl9FdgPY4y_lz-C7pP-_poLork_ZDrdbNR3NpBNjTnrrzeLXK-VzMQT_RGN9rtbRBgUA-HxJ7X9jhsB_Tin_b0GoUqrdMIO2sJ8F_OAEE61XmpG2fnVm07rKFgp62HEanMg82C0t3VcNFtg2pZFSMO9SDv1GAsI5klz7dhtoIhmAByukEFkaY=w647-h439-no?authuser=0" alt="Žemėlapis">
                </div>
            </div>
        </div>

        <div class="kontaktai">
            <div class="light20Text">
                <p class="kontaktuTarpas">Susisiekite su mumis:</p>
                <p>kodokepykla@gmail.com</p>
                <p>+37065658564</p>
                <div>
                    <button>fb</button>
                    <button>ig</button>
                </div>
                <p>@ Kodo Kepykla 2023</p>
            </div>
            <div class="light20Text">
                <p class="kontaktuTarpas">Mus rasite:</p>
                <p>Studentų g. 50,</p>
                <p>Kaunas</p>
            </div>
        </div>
     </body>
</html>


