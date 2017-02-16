<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$fileContent = file_get_contents('./stores.json');
$stores = json_decode($fileContent, true);
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
                if (isset($_POST['add'])) {
                    $store = [];
                    $store['id'] = $_POST['id'];
                    $store['name'] = $_POST['name'];

                    $stores[] = $store;
                    $json = json_encode($stores);
                    file_put_contents('./stores.json', $json);

                    echo "<strong>Obchod byl úspěšně přidán. :-)</strong>";
                }
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
                    foreach ($stores as $store) {
                        echo sprintf('<tr><td>%s</td><td>%s</td></tr>', $store['id'], $store['name']);
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
