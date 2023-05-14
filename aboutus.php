<!DOCTYPE html>
<html lang="lt">
    <title>Kodo kepykla</title>
    <link rel="shortcut icon" type="image/png" href="images/Logo.png"/>

    <style>
        input[type=text], select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: center;
        border: 1px solid #442419;
        border-radius: 4px;
        box-sizing: border-box;
        }
    </style>
    
    <head>
        <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
   </head>

   <body>
        <?php include 'repeatingElements/header.php'; ?>

        <div class="meniuIntro">
            <img class="aboutUsImage" src="images/bakery_aboutus.png" alt="Kepykla">
            <div class="dark30Text">
                <h1 class="aboutUsKK">KODO KEPYKLA</h1>
                <p class="aboutUsDescription">Esame Kaune įsikūrusi prancūziškų kepinių įmonė, veikianti nuo 2023 m.</p>
            </div>
        </div>

        <div class="aboutUsInfo">
            <p class="light30Header kasMes">KODO KEPYKLA - KAS MES?</p>

                <div class="light20Text kasMes">
                    <p>Esame kepykla jau nuo 2023 metų pradžios ir mūsų kepykloje „Kodo kepykla“ ne tik atgyja konditerijos menas, bet ir įgyja kitas, naujas spalvas – prancūziškąsias. Mūsų išskirtiniai pyragaičiai, sausainiai ir kiti kepinai kepami tradiciškais būdais pagal karta iš kartos siųstus, kauptus, puoselėtus receptus bei, žinoma, iš pačių kokybiškiausių ingredientų tik tam, kad pajustumėte tikrą, autentišką Prancūzijos skonį. Kiekvienas kepinys – nuo sviestinių kruasanų iki eklerų – yra pagaminti kruopščiai ir su daug meilės. Kviečiame pasimėgauti subtiliais kepinių skoniais ir patirti prancūziškosios konditerijos magiją.</p>
                </div>

                 <div class="container  dark30Text">
                  
                    <div class="changingImages fade">   
                        <img class="changingImage" src="images/Chouquette.png" alt="ChangingIm">
                        <div class="changingImText">
                            <p>Kepdami gaminius laikomes prancūziškų tradicijų</p>
                        </div>  
                    </div>   
        
                    <div class="changingImages fade">   
                        <img class="changingImage" src="images/Religieuse.png" alt="ChangingIm2">
                        <div class="changingImText">
                            <p>Naudojame tik pačios aukščiosios kokybės ingridientus</p>
                        </div>  
                    </div>  

                    <div class="changingImages fade">   
                        <img class="changingImage" src="images/PainAuChocolate.png" alt="ChangingIm3">
                        <div class="changingImText">
                            <p>Kepame kasdien, todėl mūsų gaminiai visada švieži</p>
                        </div>  
                    </div>  
                </div> 
        </div>

        <?php include 'repeatingElements/footer.php'; ?>

        <script type="text/javascript" src="functions.js"></script>
               
        <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("changingImages");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    

              slides[slideIndex-1].style.display = "flex";  

              setTimeout(showSlides, 3000); // Change image every 3 seconds
            }
        </script>
        
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
