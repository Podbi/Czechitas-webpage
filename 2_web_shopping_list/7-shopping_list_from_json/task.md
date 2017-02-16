Načtení seznamu oblíbených obchodů z JSON souboru
=================================================

1. Prohlédni si soubor "stores.json" v této složce.
2. Soubor je ve formátu JSON, což je textový formát pro ukládání a přenos dat používaný nejen na webu. Viz https://www.w3schools.com/js/js_json_intro.asp.
3. V tomto souboru naleznete "pole" (seznam), ve kterém jsou položky se dvěma vlastnostmi "id" a "name", které reprezentují jednotlivé obchody. Každý obchod má tedy identifkátor a název.
4. Uprav svoji webovou stránku tak, abys načetla seznam obchodů ze souboru.
  - Nezapomeň si soubor zkopírovat do svého editoru hned vedle "shopping_list.php" a ostatních skriptů, abys s ním mohla pracovat.
  - Můžeš použít vestavěnou php funkci file_get_contents($fileName) (http://php.net/manual/en/function.file-get-contents.php) pro načtení obsahu souboru.
  - Jelikož je soubor uložený ve formátu JSON, je potřeba tento formát převést do podoby, ve které s ním můžeš pracovat v PHP, k tomou slouží funkce json_decode($json, true) (http://php.net/manual/en/function.json-decode.php).
5. Až budeš mít načtené všechny oblíbené obchody, uprav svou webovou stránku tak, abys místo výpisu HTML značek <option> staticky vypsala oblíbené obchody získané ze souboru.
  - Budeš k tomu potřebovat použít nějaký cyklus a funkci pro výpis a práci s proměnnou typu pole.
6. Ve výsledku bys pak měla na webové stránce mít možnost vybrat nějaký z těchto obchodů pro přidání nové položky nákupního seznamu místo těch, které jsme do stránky napsali dříve.
