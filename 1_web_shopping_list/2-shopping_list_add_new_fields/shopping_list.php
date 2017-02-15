<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html>
    <head></head>
    <body>
    <h1>Nákupní seznam</h1>
    <div>
        <div>
            <h2>Přidání nové položky</h2>
            <div>
                <form action="" method="get">
                    <label for="title">Název</label>
                    <input type="text" name="title" id="title" required />
                    <br>
                    <label for="price">Cena</label>
                    <input type="number" name="price" step="0.01" min="0" max="1000000" required /> Kč
                    <br>
                    <input type="submit" name="add" value="Přidat" />
                </form>
            </div>
            <?php
            //$submitButton = $_GET['add'];
            //$title = $_GET['title'];
            //$store = $_GET['store'];
            //echo "<strong>Toto je naše nově přidaná položka. :-)</strong><br>";
            ?>
        </div>
    </div>
    </body>
</html>
