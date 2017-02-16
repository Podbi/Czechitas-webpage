Správa obchodů pro nákupní seznam
=================================

1. Tentokrát si zkusíš úkol trochu samostatněji. Půjde nám o to mít možnost přidávat nové "obchody", které můžeme použít ve stránce pro "nákupní seznam."
2. Vedle tohoto úkolu nalezeneš soubor "stores_management.php", který obsahuje základní HTML kostru a několik PHP bloků, ve kterých jsou zatím pouze komentáře s instrukcemi, co bys v daném bloku mohla přidat.
 - Na začátku souboru je jediný vyplněný PHP blok, ve kterém nalezneš nastavení pro zobrazování případných chyb.
3. Budeme pracovat s JSON souborem "stores.json", se kterým jsi se seznámila už dříve.
 - Kdybys ho nemohla najít, ve složce s tímto úkolem ho máš připravený.
4. Z tohoto souboru bude potřeba získat jeho obsah a převést ho z JSON formátu na pole v PHP. To už jsme si vyzoušeli.
5. Dalším krokem bude zpracování formuláře pomocí metody POST.
6. V rámci zpracování formuláře budeme chtít vzít všechny obchody i s naším novým obchodem a převést je do JSON formátu, a pak uložit.
 - K těmto krokům jsme se zatím nedostali, proto malá rada:
 - Pole z PHP převedeme na JSON pomocí funkce json_encode($variable).
 - A uložení do souboru zvládneme analogicky jako jsme ze souboru získávali hodnoty skrze file_put_contents($fileName, $fileContent).
7. Na závěr už zbývá jen doplnit tabulku o výpis všech obchodů, které máme pomocí cyklu a zformátovaného výpisu.
 - Hodit by se mohla buď funkce sprintf() či spojování řetězce pomocí ".".
8. A je to! :-)
