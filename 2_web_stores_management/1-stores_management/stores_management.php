<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Získej obsah souboru "stores.json"
//Převeď obsah souboru z JSON na asociativní pole v PHP
//Ulož si převedený obsah souboru (seznam obchodů) do proměnné
?>
<html>
    <head></head>
    <body>
        <h1>Seznam obchodů</h1>
        <div>Tato stránka slouží pro přidávání obchodů do seznamu.
        </div>
        <div>
            <div>
                <h2>Přidání nového obchodu</h2>
                <div>
                    <form action="" method="post">
                        <label for="id">Identifkátor</label>
                        <input type="text" name="id" id="id" required />
                        <br>
                        <label for="name">Název</label>
                        <input type="name" name="name" id="name" required />
                        <br>
                        <input type="submit" name="add" value="Přidat" />
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
            <h2>Seznam obchodů</h2>
            <div>
                <table>
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
    </body>
</html>
