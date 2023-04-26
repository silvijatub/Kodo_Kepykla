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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">
   </head>
   <body>
        <?php include 'repeatingElements/header.php'; ?>

        <div class="privacy_policy">
            <div class="tekstas black20Text">
                <p class="dark30Header" style="text-align: center;margin: 0px auto 40px;">PRIVATUMO POLITIKA</p>
                <p>UAB „Kodo kepykla“ saugo, vertina ir gerbia įmonės tinklapio lankytojų bei klientų privatumą ir užtikrina Asmens duomenų, kurie pateikiami naudojantis tinklapio priemonėmis, saugumą ir konfidencialumą pagal sąlygas, išdėstytas Privatumo politikoje.	</p>
                <p>Privatumo politikos tikslas yra informuoti kaip yra renkami ir tvarkomi lankytojų ir klientų duomenys, kiek laiko jie yra saugomi, kam teikiami ir panaudojami bei apsaugoti lankytojų bei klientų asmeninę informaciją nuo neteisėto jos panaudojimo. Interneto svetainės lankytojų ir klientų duomenys yra tvarkomi vadovaujantis galiojančiais teisės aktais. UAB „Kodo kepykla“ tretiesiems asmenims nesuteikia prieigos prie svetainės lankytojų ir klientų Asmeninės informacijos, taip pat be atskiro sutikimo neperduoda jokios informacijos jokiems tretiesiems asmenims.</p>                    
                <p>Visos intelektinės nuosavybės teisės į įmonės elektorinę svetainę ir visą jos turinį priklauso elektroninės svetainės savininkui – įmonei. Elektroninės svetaines naudotojas įsipareigoja nenaudoti elektroninės svetainės ir (ar) bet kokio jos turinio konkuruojančiai veiklai vykdyti bei plėtoti.</p>
                <p>Norėdami informuoti mus apie Privatumo politikos pažeidimą, turėdami klausimų, pretenzijų ar jei Jums reikalinga mūsų pagalba dėl Privatumo politikos aiškinimo ar jos taikymo, prašome kreiptis elektroniniu paštu <strong><u>kodokepykla@gmail.com</u></strong> arba mobiliuoju telefonu <strong><u>+37065658564</u></strong>. Į Jūsų užklausas, gautas raštu, atsakysime per 14 (keturiolika) kalendorinių dienų nuo paklausimo gavimo dienos.</p>
            </div>
            
        </div>

        <?php include 'repeatingElements/footer.php'; ?>

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