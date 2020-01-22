<?php

require("database/products.php"); // Contient la variable $products

?>
<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Tech No Fils</title>
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- See https://fontawesome.com/v4.7.0/icons/ for more informations -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="css/master.css">
</head>

<body>

<div class="container-fluid">
    <div id="header" class="d-flex align-content-between">
        <h1 class="col-10 display-1 text-center">Tech No Fils</h1>
        <div class="col-2">
            <div class="position-absolute" style="bottom: 5px;">
                <a class="text-dark text-decoration-none" href="#">
                    <i class="fa fa-3x fa-shopping-cart"></i>
                    <span class="badge badge-dark">0</span>
                </a>
            </div>
        </div>
    </div>

    <hr>

    <div id="main">
        <h4>Nos produits</h4>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Réf.</th>
                <th>Produit</th>
                <th class="text-center"><i class="fa fa-shopping-cart"></i></th>
            </tr>
            </thead>
            <tbody>
            <!-- Une suggestion de présentation... -->
            <tr>
                <td>
                    <a href="#"><i class="fa fa-star"></i></a>
                    <span>0000</span>
                </td>
                <td>Exemple de produit</td>
                <td class="text-center">
                    <a class="btn btn-sm btn-success" href="#"><i class="fa fa-cart-plus"></i></a>
                    <span class="badge badge-dark">0</span>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#"><i class="fa fa-star fav"></i></a>
                    <span>0001</span>
                </td>
                <td>Exemple de produit 2</td>
                <td class="text-center">
                    <a class="btn btn-sm btn-success" href="#"><i class="fa fa-cart-plus"></i></a>
                    <span class="badge badge-dark">0</span>
                    <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                </td>
            </tr>
            <!-- Fin de suggestion de présentation -->
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>