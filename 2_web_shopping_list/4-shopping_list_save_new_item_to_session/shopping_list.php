<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Vytvoření SESSION mezi prohlízečem a serverem
session_start();
//Kontrola, zda už máme připravený nákupní seznam, a když ne, tak si ho nachystáme.
if (!isset($_SESSION['shopping_list'])) {
    $_SESSION['shopping_list'] = [];
}
?>
<html>
    <head></head>
    <body>
    <h1>Nákupní seznam</h1>
    <div>Toto je můj nákupní seznam z mých oblíbených obchodů.</div>
    <div>
        <div>
            <h2>Přidání nové položky</h2>
            <div>
                <form action="" method="get">
                    <label for="title">Název</label>
                    <input type="text" name="title" id="title" required />
                    <br>
                    <label for="store">Obchod</label>
                    <select name="store" id="store" required>
                        <option value="marks&spencer">Marks & Spencer</option>
                        <option value="c&a">C&A</option>
                        <option value="esprit">Esprit</option>
                    </select>
                    <br>
                    <label for="quantity">Množství</label>
                    <input type="number" name="quantity" id="quantity" required />
                    <br>
                    <label for="price">Cena</label>
                    <input type="number" name="price" id="price" step="0.01" min="0" max="1000000" required /> Kč
                    <br>
                    <input type="submit" name="add" value="Přidat" />
                </form>
            </div>
            <?php
            if (isset($_GET['add'])) {
                $shoppingItem = [];
                $shoppingItem['title'] = $_GET['title'];
                $shoppingItem['store'] = $_GET['store'];
                $shoppingItem['quantity'] = $_GET['quantity'];
                $shoppingItem['price'] = $_GET['price'];

                //$_SESSION['shopping_list'][] = ?
                //echo "";
                //var_dump($_SESSION['shopping_list']);
            }
            ?>
        </div>

        <h2>Seznam položek</h2>
        <div>
            <?php var_dump($_SESSION['shopping_list']); ?>
        </div>
    </div>
    </body>
</html>
