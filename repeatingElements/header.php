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
                <button class="headerButton">KARJERA</button>
            </li>
            <li class = nav-item>
                <button onclick="location.href='privacy_policy.php'" class="headerButton <?php if (basename($_SERVER['PHP_SELF']) == 'privacy_policy.php') echo 'active'; ?>">PRIVATUMO POLITIKA</button>
            </li>
            <li class = nav-item>
                <button onclick="location.href='contacts.php'" class="headerButton <?php if (basename($_SERVER['PHP_SELF']) == 'contacts.php') echo 'active'; ?>">KONTAKTAI</button>
            </li>
            <li class = nav-item>
                <button class="headerBasket headerButton"><img src="https://lh3.googleusercontent.com/L8UqbsKKayiXLOdtIE5GUbcrJap7XeJCZ93LR0PUh6rg6e4fzSYfWbVopYe387jvmu167a0O7QoOR1-etIkmZVmRScCfdK7KHGPija06GSts-9g42T8idDaMryDMwYkQije7E3sRFa_rc4IvGD796l-Eaj2SVESfKEaWWjvs3s4CpFwJDx5WHAUWyQHNk0tgtuUs4emAQMvIa5JFAK53YgB0nVfi4FmIJP6ulzu3eSSarVYbBUdwJTZJZyhDNqVwSW2qBHQFmbziq_OdFNnKZzx96Rtc-6nL4L2ukkt1SidpED4YeMmZn-lst4u4qLSNmLVnxv9qO-1C0YLEXHazkETigojx-YoZWZ8r5Kt_c6usgjJ9hZ4iZ2V8-34BecFqr-XKqVsE4k4tKrnAuwGJC9un9a-KgZTR7FlUwYVdIEDMk48lro4NAKIdBveQUkNRTeJVG2M1y_VAgatyVBj__ltXv5u4YPpVsEFcgQOQHZG0LDZ_WA3sgDJbmtsFFW2ujxdsTReMpPi2B0U5_6Voh5NpHYfAX-V0gvNjKhXfZziue-UbP2ExdutjxejTT8QXeWGj0HTHjOyNKGWYmiMBkmfEUlYEyJSbCXFZlB-LMp7_tIGv7DAWeAjCrYNFD6RE6utBUDbQ5dBN9JcpdRxK_mJ83sM9Lo1BCi-AFj5mxusTuXAUvXPDsxtfbEpiGZaKIvOVdY1msXHB0PAH2lukGlkyr3cH7tB22KC5H3f5ZsRro1nd2KbqynDOEGVbcy3x98yQEPHwegBT3oDOXm6inekIf0HXFCHw9Gh0_-7VRdO74wNWfjiMGooX9GPvpYUCS6WmsQfEyQq27P82cUbJqPnkF63hx-GfOlnw_ugpEo59ckficutx7WIXQEqrsaCXnVVi29RLkEyK0sii2ZwFPM68Bi1lrmlijEomqAoPL9NxP0jT=w40-h36-no?authuser=0" alt="Krepšelis"></button>
            </li>
        </ul>

        <div class="menu-bar">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
</header>