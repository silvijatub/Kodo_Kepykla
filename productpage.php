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
        <script src="https://kit.fontawesome.com/40aaa393d4.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
   </head>
   <body>

   <?php include 'repeatingElements/header.php'; ?>

    <div class="productPage">
        
        <div class="dark30Text productDesript">
            <h1 class="productName">PAIN AU CHOCOLAT</h1>
            <p class="productPrice">1,99 eur. / 1 vnt.</p>
            <p class="aboutProduct">Tai tobulas desertas bet kuriam paros metui. Šios bandelės pagamintos iš lengvų ir traškių tešlos sluoksnių, kurie užpildyti kokybišku šokoladu. Šio deserto kvapui ir tirpsmui burnoje neįmanoma atsispirti – tai tikra prancūziškų kepinių magija. Todėl kviečiame kiekvieną iš Jūsų palepinti save šia ypatinga, nepamirštama patirtimi kiekviename kąsnyje!</p>
            
        
            <form>
                <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
                <input type="number" id="number" value="1" />
                <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
              </form>

    <button class="secondaryButton ziuretiButton2">
        <div>
            <img src="https://lh4.googleusercontent.com/2l13WuPo34t9inUjJk9ofzE0DBNpDNg8c83JtlzHEFyyA0yJ8LLV4dpt0N87OoFAPtA=w2400" alt="Į krepšelį">
            <p>Į krepšelį</p>
        </div>
    </button>
        </div>

   

        <div class="stickyImage">
            <img class="productImage" src="https://i.ibb.co/QJ81289/pain-au-chocolate-2.png" alt="Kruasanai">
        </div>
       
    </div>

    <div class="productInfo">
        <div class="dark30Header">
            <p>PAPILDOMA INFORMACIJA</p>
        </div>       
        <div class="dark30Text papildInfo">
            <p>Tai tobulas desertas bet kuriam paros metui. Šios bandelės pagamintos iš lengvų ir traškių tešlos sluoksnių, kurie užpildyti kokybišku šokoladu. </p>
        </div>
    </div>
    <div class="productInfo">
        <div class="dark30Header">
            <p>KEPINIO SUDĖTIS</p>
        </div>       
        <div class="dark30Text papildInfo2">
            <p>Tai tobulas desertas bet kuriam paros metui. Šios bandelės pagamintos iš lengvų ir traškių tešlos sluoksnių, kurie užpildyti kokybišku šokoladu. </p>
        </div>
    </div>

       
    <?php include 'repeatingElements/footer.php'; ?>
       
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.js"></script>
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
    <script>
        function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 2 ? value = 2 : '';
  value--;
  document.getElementById('number').value = value;
}
        </script>
   </body>
</html>
