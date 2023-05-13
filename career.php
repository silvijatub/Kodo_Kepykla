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

        <div class="career">
            <div class="careerAprasymas">
                <div>
                    <h1>KVIEČIAME PRISIJUNGTI PRIE MŪSŲ KOMANDOS!</h1>
                    <p>Mūsų įmonė nuolat susilaukia vis daugiau ir daugiau populiarumo ir ne tik valstybinio, bet ir tarptautinio pripažinimo, todėl ieškome žmonių, kurie galėtų prisijungti prie mūsų šeimos – kolektyvo. Tad kviečiame visus išbandyti savo jėgas mūsų kepykloje!</p>
                </div>
            </div>
            <div class="kepyklaImage">
                <img src="https://lh3.googleusercontent.com/drive-viewer/AFGJ81rlQ0hwWuFco7WpqFOFvdYHT4YHvfR-8pDJmwDC90rXt9K7ZA_dN773WjJ4Q_FCUXufbIFvIA9bYfHFFQrjl8P-2vG3ww=s2560" alt="kepykla">
                <div></div>
            </div>
        </div>

        <div class="ko">
            <p class="light30Header">KO MES IEŠKOME?</p>
            <div class="koIeskome">
                Mūsų komanda ieško ne tik maistą, bet ir jo gaminimą mylinčių žmonių, kurie yra pasirengę įdėti daug darbo tam, kad ne tik įsilietų į mūsų darnią, draugišką bei energingą šeimą, tačiau ir taptų neatsiejama jos dalimi. Darbas kepykloje apima ne tik gaminimą, bet ir bendravimą su klientais, tvarkymą ir kitus kepyklos reikalus, todėl mes ieškome darbuotojų, turinčių aukštą atsakomybės jausmą ir gebančių efektyviai bendrauti su kitais kolegomis. Taip pat mes ieškome tokių darbuotojų, kurie turi patirties ir žinių apie konditerijos gamybą, yra itin kūrybingi ir pasiruošę siūlyti naujus ir įdomius kepinius, energingi ir itin motyvuoti. Tad, jei mes kalbame apie Jus, kviečiame prisijungti prie mūsų kolektyvo!
            </div>
        </div>

        <div class="aprasymai">
            <div class="zaliasAprasymas">
                <img class="aprasymoimg" src="https://lh3.googleusercontent.com/drive-viewer/AFGJ81qeGhQkXLWtDpIJ6gWFVR6shMffru4sZLiYINVR19bGfmhqy_dkpxJohUM2CwsME-TYEJ1MK0cezszs383S3TRAtUaRhw=s2560" alt="Aprašymo nuotrauka">
                <div>
                    <h2 style="font-family: 'Inter';">SIŪLOMOS PAREIGOS</h2>
                    <p class="light20Text">Ieškome tokių pareigų, kaip: gamybos linijos operatoriaus, gaminių formuotojų rankomis, kepimo procesą prižiūrinčių darbuotojų bei formuotojų ir gaminių pakavimo procesu besirūpinančių darbuotojų. Dėl kitų pareigų taip pat galite kreiptis, tačiau negalime pažadėti, jog laisva vieta bus.</p>
                </div>
            </div>
            <div class="oranzinisAprasymas">
                <div>
                    <h2 style="font-family: 'Inter';">SIŪLOMOS DARBO SĄLYGOS</h2>
                    <p class="light20Text">Mūsų siūlomos darbo sąlygos yra: 8 valandų trukmės darbo diena 5 dienas per savaitę (norint, galima susitarti ir dėl 0.5 etato), uždarbis yra maždaug 1200-1500 € į rankas, darbas patalpoje, tačiau gražiu oru ir tinkamu metų laiku, gali tekti dirbti ir lauke.</p>
                </div>
                <img class="aprasymoimg" src="https://i.ibb.co/93bvmk4/Ultimate-Boston-City-Guide-Top-16-Things-to-See-Do-1.png">
            </div>
        </div>

        <div class="career-details">
            <p class="light30Header">DĖL DETALESNĖS INFORMACIJOS KREIPKITĖS</p>
            <div class="career-images">
                <div class="">
                    <img src = "https://lh3.googleusercontent.com/GfP79BBYcuCPcuuTrjKCmdVdGG8ui3w9KQUAZDC6GZIk0VAY__OarrcExne8vyEUOR0=w2400">
                    <p class="light20Text">+37065658565</p>
                </div>
                <div class="">
                    <img src = "https://lh4.googleusercontent.com/ucYCcFzA5EdWYpCYng8KyOMSI_8vf_gO7MDwkoQIHWDY_4ZXDCPR0qH3WtXq61BAOk0=w2400">
                    <p class="light20Text">kodokepykla@gmail.com</p>
                </div>
            </div>
        </div>

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