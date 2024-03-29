<!DOCTYPE html>
<html lang="lt">
    <title>Kodo kepykla</title>
    <link rel="shortcut icon" type="image/png" href="images/Logo.png"/>

    <style>
        input[type=email], select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: center;
        border: 1px solid #442419;
        border-radius: 4px;
        box-sizing: border-box;
        font-family: 'Inter';
        }

        input[type=text], select {
        width: 60%;
        padding: 12px 20px;
        margin: 8px 0;
        display: center;
        border: 1px solid #442419;
        border-radius: 4px;
        box-sizing: border-box;
        font-family: 'Inter';
        }

        textarea {
            width: 60%;
            padding: 12px 20px;
            margin: 8px 0;
            display: center;
            border: 1px solid #442419;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Inter';
        }
    </style>
    
   <head>
        <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles.css">
        <meta charset="UTF-8">

        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
        </script>
        <script src="contacts.js"></script>
        <script type="text/javascript">
        (function(){
            emailjs.init("6x6bLdxfggGm4_tWo");
        })();
        </script>
   </head>
   <body ng-app="app" ng-controller="controller">
        <?php include 'repeatingElements/header.php'; ?>

        <div class="contactsInfo">
            <div class="contacts dark25Text">
                <img src = "images/phone.png"><p>+37065658565</p>
                <br>
                <img src = "images/mail.png"><p>kodokepykla@gmail.com</p>
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

                <div class="column-susisiekimas">
                    <label for="vardas">Vardas</label>
                    <br>
                    <input type="text" id="vardas" placeholder="Jūsų vardas" required>
                </div>
        
                <div class="column-susisiekimas">
                    <label for="pav">Pavardė</label>
                    <br>
                    <input type="text" id="pavarde" placeholder="Jūsų pavardė" required>
                </div>
                
                <div class="column-susisiekimas">
                    <label for="email">El. paštas</label>
                    <br>
                    <input type="email" id="email" placeholder="Jūsų elektroninis paštas" required>
                    <br>
                    <label for="message">Žinutė</label>
                    <br>
                    <textarea id="message" rows="3" placeholder="Jūsų žinutė"></textarea>
                </div>
    
                <button type="submit" onclick="sendMail()" class="sendButton primaryButton">
                    <div>
                        <p>Siųsti</p>
                    </div>
                </button>

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