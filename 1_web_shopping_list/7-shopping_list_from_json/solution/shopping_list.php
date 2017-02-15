<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
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
                        <select name="store" id="store">
                            <?php
                            $fileContent = file_get_contents('./stores.json');
                            $stores = json_decode($fileContent, true);
                            foreach ($stores as $store) {
                                echo sprintf(
                                    '<option value="%s">%s</option>',
                                    $store['id'],
                                    $store['name']
                                );
                            }
                            ?>
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
                    $_SESSION['shopping_list'][] = $shoppingItem;

                    echo "<strong>Položka byla úspěšně přidána. :-)</strong>";
                }
                ?>
            </div>
            <h2>Seznam položek</h2>
            <div>
                <table>
                    <thead>
                    <tr>
                        <th>Název</th>
                        <th>Obchod</th>
                        <th>Množství</th>
                        <th>Cena</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $totalPrice = 0.00;
                    foreach ($_SESSION['shopping_list'] as $shoppingItem) {
                        $totalPrice = $totalPrice + $shoppingItem['price'];
                        echo sprintf(
                            '<tr><td>%s</td><td>%s</td><td>%s</td><td>%s Kč</td></tr>',
                            $shoppingItem['title'],
                            $shoppingItem['store'],
                            $shoppingItem['quantity'],
                            $shoppingItem['price']
                        );
                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="3">Celková cena položek</th>
                            <th>
                                <?php echo $totalPrice; ?> Kč
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </body>
</html>
