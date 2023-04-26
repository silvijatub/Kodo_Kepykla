<!DOCTYPE html>
<html lang="lt">

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
   <body ng-app="app" ng-controller="controller">
        <?php include 'repeatingElements/header.php'; ?>

        <div class="contactsInfo">
            <div class="contacts dark25Text">
                <img src = "https://lh3.googleusercontent.com/GfP79BBYcuCPcuuTrjKCmdVdGG8ui3w9KQUAZDC6GZIk0VAY__OarrcExne8vyEUOR0=w2400"><p>+37065658565</p>
                <br>
                <img src = "https://lh4.googleusercontent.com/ucYCcFzA5EdWYpCYng8KyOMSI_8vf_gO7MDwkoQIHWDY_4ZXDCPR0qH3WtXq61BAOk0=w2400"><p>kodokepykla.darbas@gmail.com</p>
            </div>
        </div>

        <div class="where">
            <p class="dark30Header" style="margin-bottom:40px">APLANKYKITE MUS</p>
        </div>

        <div class="laukiameJusu" style="background-color: #F9EFE4;">
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

        <div class="susisiekimas black20Text">
            <form action="mailto:kodokepykla@gmail.com" method="GET">
                <div class="column-susisiekimas">
                    <label for="vardas">Vardas</label>
                    <br>
                    <input type="text" id="vardas" required>
                </div>
        
                <div class="column-susisiekimas">
                    <label for="pav">Pavardė</label>
                    <br>
                    <input type="text" id="pavardė" required>
                </div>
                
                <div class="column-susisiekimas">
                    <label for="mail">El. paštas</label>
                    <br>
                    <input type="text" id="mail" required>
                    <br>
                    <label for="message">Žinutė</label>
                    <br>
                    <input class="message" type="text" id="message" required>
                </div>
    
                <button type="submit" onclick="myscroll(meniu.id)" class="sendButton primaryButton">
                    <div>
                        <p>Siųsti</p>
                    </div>
                </button>
           </form>
        </div>
        <?php include 'repeatingElements/footer.php'; ?>

        <script type="text/javascript" src="functions.js"></script>
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