
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/framework/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/home.css">
    <!-- <link rel="stylesheet" href="/assets/css/home_section.css"> -->
    <title>Home</title>

</head>

<body>
    <!-- header de la page -->
    <header>
        <nav id="navbar">
            <div id="nav-image">
                <img src="#" alt="LOGO">
            </div>
            <div id="nav-list">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="/login/admin">CRUD</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Section de la page -->
    <section>
        <?php include($page.'.php'); ?>
    </section>

    <!-- Footer de la page -->
    <footer>
        <div id="footbar">
            <div id="adresse">
                <h3>ADRESSE</h3>
                <ul>
                    <li>47 rue des Couronnes</li>
                    <li>78020 rue d Antananarivo</li>
                </ul>
            </div>
            <div id="contact">
                <h3>CONTACT</h3>
                <ul>
                    <li>032 15 648 95</li>
                    <li>033 89 841 25</li>
                    <li>038 14 645 35</li>
                </ul>
            </div>
            <div id="lien">
                <h3>LIEN</h3>
                <ul>
                    <li>Facebook: <a href="#">Poyziol_bus</a> </li>
                    <li>Instagram: <a href="#">Insta@chad</a> </li>
                    <li>X: <a href="#">Cuicuit</a> </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>