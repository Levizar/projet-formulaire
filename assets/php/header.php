<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/favicon.ico" type="image/png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b534382f55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Hackers poulette - <?php switch ($page) {
    case 'accueil':
        echo 'Accueil';
        break;
    case 'products':
        echo 'Produits';
        break;
    case 'contact':
        echo 'Contact';
        break;
    default:
        break;
}?></title>
    <meta name="description" content="<?php switch ($page) {
    case 'accueil':
        echo "Page d'accueil de la société Hackers Poulette";
        break;
    case 'products':
        echo 'Liste des produits rapsberry et accessoire vendu';
        break;
    case 'contact':
        echo 'Formulaire de contact';
        break;
    default:
        break;
}?>">
</head>


<body id="<?php echo "$page" ?>">
    <nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-color mb-2">
        <a class="navbar-brand text-center d-sm-none font-weight-bolder" href="index.php">Hackers Poulette</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav col-12 d-flex justify-content-around">
                <li class="nav-item col-2 <?php if ($page == "accueil") {
    echo " active";
}
?>">
                    <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item col-2 <?php if ($page == "products") {
    echo " active";
}
?>">
                    <a class="nav-link" href="products.php">Produits</a>
                </li>
                <li class="navbar-brand col-4 text-center d-none d-sm-inline-block">
                    <a class="font-weight-bolder" href="index.php">Hackers Poulette</a>
                </li>
                <li class="nav-item col-4 <?php if ($page == "contact") {
    echo " active";
}
?>">
                    <a class="nav-link text-sm-right" href="contact.php">Contactez-nous</a>
                </li>
            </ul>
        </div>
    </nav>