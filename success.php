
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой сайт</title>
    <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">

    <header>
        <div class="logo">
            <a href="index.html"><span id="logo1">Мой мобильный мир</span>
                <br>
                <span id="logo2">&nbsp &nbsp не забудь купить у нас<span id="logo22">:)</span></span></a>
        </div>
        <div id="tel">
            +375(29)755-25-25
            <br>
            +375(29)625-25-75
        </div>
        <div class="socSet">
            <span class="soc4">Давай, вливайся к нам!</span>
            <br>
            &nbsp<a href="http://vk.com"><img src="images/vk.png" alt="Вконтакте" class="soc1"></a>
            <a href="https://www.youtube.com"><img src="images/youtube.png" alt="Ютуб" class="soc2"></a>
            <a href="https://plus.google.com"><img src="images/google.png" alt="Гугл" class="soc3"></a>
        </div>
    </header>

    <nav>
        <ul class="menu">
            <li>
                <a href="index.html" class="menuS">Домой</a>
            </li>
            <li>
                <a href="mobils.html" class="menuS">Телефоны</a>
            </li>
            <li>
                <a href="tablets.html" class="menuS">Планшеты</a>
            </li>
            <li>
                <a href="dostavka.html" class="menuS">Доставка</a>
            </li>
            <li>
                <a href="oplata.html" class="menuS">Оплата</a>
            </li>
            <li>
                <a href="info.html" class="menuS">О нас</a>
            </li>
            <li>
                <a href="mail.php" class="menuS">Обратная связь</a>
            </li>
        </ul>
    </nav>

    <aside>
        <div id="bocMenuTop">
            Выбор товаров
        </div>
        <div class="bocMenuTel">
            <p>
                Мобильные телефоны
            </p>
            <a href="mobils.html"><img src="images/telephone.png" alt="Телефон" id="telBoc"></a>
            <hr id="lineBocMenu">
        </div>
        <br>
        <br>
        <div class="bocMenuTel2">
            <p>
                Планшеты
            </p>
            <a href="tablets.html"><img src="images/tablet.png" alt="Планшеты" id="telBoc2"></a>
        </div>

    </aside>

    <div id="RabOblTop">
        <h1>Обратная связь</h1>
    </div>

    <article>

        <div class="info">
            <?php
            if ($_GET['send'] == 1){
                echo '<p id="mail1">Ваше письмо удачно отправлено администратору на email!</p>';
            }
            ?>
        </div>
    </article>

    <footer>
        <div class="logoFooter">
            <a href="index.html"><span id="logo1Footer">&nbsp &nbsp &nbsp Мой
						<br>
						&nbsp мобильный
						<br>
						&nbsp &nbsp &nbsp мир</span></a>
        </div>
        <div id="blockMenuFooter">
            <a href="index.html" class="menuSFooter">Домой</a> &nbsp &nbsp <a href="mobils.html" class="menuSFooter">Телефоны</a> &nbsp <a href="tablets.html" class="menuSFooter">Планшеты</a> &nbsp <a href="dostavka.html" class="menuSFooter">Доставка</a>
            <br>
            &nbsp &nbsp <a href="oplata.html" class="menuSFooter">Оплата</a>&nbsp &nbsp &nbsp &nbsp &nbsp <a href="info.html" class="menuSFooter">О нас</a>&nbsp &nbsp &nbsp &nbsp &nbsp <a href="mail.php" class="menuSFooter">Обратная &nbsp связь</a>
        </div>
        <div id="telFooter">
            +375(29)755-25-25
            <br>
            +375(29)625-25-75
        </div>
        <div class="socSetFooter">
            <span class="soc4">Давай, вливайся к нам!</span>
            <br>
            &nbsp<a href="http://vk.com"><img src="images/vk.png" alt="Вконтакте" class="soc1"></a>
            <a href="https://www.youtube.com"><img src="images/youtube.png" alt="Ютуб" class="soc2"></a>
            <a href="https://plus.google.com"><img src="images/google.png" alt="Гугл" class="soc3"></a>
        </div>
    </footer>
</div>
</body>
</html>