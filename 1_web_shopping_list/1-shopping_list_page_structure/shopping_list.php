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
                    <label for="price">Cena</label>
                    <input type="number" name="price" id="price" step="0.01" min="0" max="1000000" required /> Kč
                    <br>
                    <input type="submit" name="add" value="Přidat" />
                </form>
            </div>
        </div>
    </div>
    </body>
</html>
