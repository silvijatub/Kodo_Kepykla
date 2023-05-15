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
            <hr class="line"></hr>
            <div class="prekes"></div>
            <div class="suma">Mokėtina suma: </div>
            <button class="primaryButton">UŽSAKYTI</button>
        </div>

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
