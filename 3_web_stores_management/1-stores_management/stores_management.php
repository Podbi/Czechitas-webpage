<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'functions.php';

//Získej obsah souboru "stores.json"
//Převeď obsah souboru z JSON na asociativní pole v PHP
//Ulož si převedený obsah souboru (seznam obchodů) do proměnné
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'head.html' ?>

<body>

<?php include_once 'menu.php' ?>

<header class="intro-header" style="background-image: url('img/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?=getWebTitle()?></h1>
                    <hr class="small">
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1>Seznam obchodů</h1>
            <div>Tato stránka slouží pro přidávání obchodů do seznamu.
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Přidání nového obchodu</h2>
                <div>
                    <form name="store" action="" method="post">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="id">Identifkátor</label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="Identifkátor" required />
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">Název</label>
                                <input type="name" name="name" id="name" class="form-control" placeholder="Název" required />
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <input type="submit" name="add" class="btn btn-default" value="Přidat" />
                            </div>
                        </div>
                    </form>
                </div>
                <?php
                //Zpracuj formulář pomocí metody POST
                //Zkontroluj, zda byl odeslán pomocí podmínky
                //Získej hodnoty formuláře, které Tě zajímají - "id" a "name"
                //Přidej nový obchod do proměnné pro obchody, kterou sis vytvořiola výše
                //Převeď obsah proměnné s obchody na JSON. To jsme ještě nezkoušeli, používá se funkce json_encode.
                //Ulož si převedený JSON do souboru "./stores.json". Tento krok je taky novinka. K zápisu do souboru se Ti bude hodit file_put_contents($fileName, $fileContent)
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <h2>Seznam obchodů</h2>
                <div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Identifikátor</th>
                            <th>Název</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //Budeme chtít vypsat všechny obchody
                        //Použíj cyklus foreach a projdi proměnnou s obchody
                        //V těle cyklu vypiš obsah proměnné jako řádek tabulky. Obchod má dvě informace "id" a "name"
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
