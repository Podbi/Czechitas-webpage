Vytvoření webové stránky pro nákupní seznam
===========================================

1. Ahoj. :) Máme za sebou přípravu webové stránky "o mně" a teď si společně vyzkoušíme náš web rozšířit. Naším úkolem bude vytvořit si druhou stránku pro "Nákupní seznam", kde budeme přidávat a prohlížet položky k nákupu.
2. Na následujících úkolech si vyzkoušíme některé konstrukce PHP, o kterých jsme si říkali dopoledne, jako jsou proměnné, podmínky, cykly atp., a také se podíváme na další aspekty PHP, zejména na zpracování formuláře.
3. V souboru "shopping_list.php" hned vedle tohoto zadání najdeš základní strukturu pro webovou stránku, kterou si zkopíruj do svého editoru.
- Webová stránka obsahuje pouze HTML značky a připojené CSS, aby nějak vypadala.
- I když ve stránce zatím žádné PHP není, stránka má koncovku ".php", aby náš webový server věděl, že zde PHP bude.
4. Hned si něco z PHP přidáme.
5. Abychom viděli případné chybové výpisy, které se nám mohou během vývoje hodit, potřebujeme do stránky na první řádky uvést několik příkazů. Konkrétně tyto:
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 - Jedná se o zavolání funkce "ini_set()", pomocí které přepeneme nastavení na "display_errors" na hodnotu "1", což znamená, že chceme zobrazovat chyby.
 - Obdobně zavoláme "display_startup_errors".
 - A na závěr funkce "error_reporting()", což je další funkce, kterou PHP řekneme, že chceme vidět všechny chyby, které by se případně mohly stát.
 - Pro vývoj jsou tato nastavení velmi šikovná, kdybychom ale naši stránku chtěli posléze ukázat ostatním návštěvníkům, je bezpečnější chyby nezobrazovat.
6. Tvůj úkol bude přidat na úvod webové stránky v souboru "shopping_list.php" výše uvedené tři řádky pro PHP.
