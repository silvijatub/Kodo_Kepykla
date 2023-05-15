<?php
require_once 'connection.php';

$sql="SELECT COUNT(pavadinimas) FROM krepselis";
$result = $connection->query($sql);
if ($result) {
    $row = $result->fetch_row();
    $count = $row[0];
} else {
    $count = 0;
}
?>
<header>
    <button onclick="location.href='homepage.php'" class="logoButton"><img class="logo" src="images/Logo.png" alt="Logo"></button>
    <div class="search-container">
        <form class="search-form" action="searchResults.php" method="GET">
            <input class="search-input" type="text" placeholder="Ieškoti..." name="search">
            <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <nav class="navigationbar">
        <ul class="nav-menu">
            <li class = nav-item>
                <button onclick="location.href='aboutus.php'" class="headerButton <?php if (basename($_SERVER['PHP_SELF']) == 'aboutus.php') echo 'active'; ?>">APIE MUS</button>
            </li>
            <li class = nav-item>
                <button onclick="location.href='meniu.php'" class="headerButton <?php if (basename($_SERVER['PHP_SELF']) == 'meniu.php') echo 'active'; ?>">MENIU</button>
            </li>
            <li class = nav-item>
                <button onclick="location.href='career.php'" class="headerButton <?php if (basename($_SERVER['PHP_SELF']) == 'career.php') echo 'active'; ?>"> KARJERA</button>
            </li>
            <li class = nav-item>
                <button onclick="location.href='privacy_policy.php'" class="headerButton <?php if (basename($_SERVER['PHP_SELF']) == 'privacy_policy.php') echo 'active'; ?>">PRIVATUMO POLITIKA</button>
            </li>
            <li class = nav-item>
                <button onclick="location.href='contacts.php'" class="headerButton <?php if (basename($_SERVER['PHP_SELF']) == 'contacts.php') echo 'active'; ?>">KONTAKTAI</button>
            </li>
            <li class = nav-item>
                <div class="shoppingCartGrid" onclick="location.href='shoppingcart.php'" >
                    <button class="headerBasket headerButton layer2"><img src="images/shopping_cart.png" alt="Krepšelis" style="height: 24px"></button>
                    <span class="dot layer1"><?php echo $count ?></span>
                </div>
            </li>
        </ul>

        <div class="menu-bar">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>