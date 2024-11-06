# Iskolai Projekt Megoldások

Ez a repozitórium három iskolai projekt PHP-alapú megoldásait tartalmazza. Az alábbiakban részletesen ismertetem a három projektet, amelyek webes űrlapokat és alap PHP logikát valósítanak meg.

---

## **1. Projekt: Kapcsolati Űrlap**

### Leírás:
Ez a projekt egy egyszerű kapcsolati űrlap, amely PHP-ban készült. A felhasználó neve, e-mail címe és üzenete kerül begyűjtésre, a beérkező adatokat a szerveren validáljuk, és az érvényesítés eredményét hibákkal vagy sikerüzenettel jelenítjük meg.

### Funkciók:
- **Név mező**: Kötelező, nem lehet üres.
- **E-mail mező**: Kötelező, érvényes e-mail cím formátumot vár.
- **Üzenet mező**: Opcionális, ha kitöltik, akkor legalább 5 karakter hosszú kell legyen.
- Hibák esetén hibaüzenetek jelennek meg, sikeres küldéskor pedig egy visszaigazoló üzenet.

### Fájlok:
- `1feladat.php`: A fő fájl, amely az űrlap megjelenítését és az adatok validálását kezeli.

### Hogyan működik:
1. A felhasználó kitölti az űrlapot.
2. A PHP szkript feldolgozza az adatokat és validálja:
   - **Név**: Kötelező és nem lehet üres.
   - **E-mail**: Érvényes e-mail címnek kell lennie.
   - **Üzenet**: Ha kitöltésre kerül, legalább 5 karakter hosszúnak kell lennie.
3. Ha nincsenek hibák, akkor egy sikerüzenet jelenik meg, amely tartalmazza a beküldött adatokat.
4. Hibák esetén azokat az űrlapon belül megjelenítjük.

### Példa Használat:
1. Töltsd ki az űrlapot.
2. Küldd el, és nézd meg, hogy a validálás eredményeként hibák vagy sikerüzenet jelenik meg.

---

## **2. Projekt: Kalkulátor**

### Leírás:
Ez a projekt egy egyszerű kalkulátor, amely négy alapműveletet tud elvégezni: összeadás, kivonás, szorzás és osztás. A hibakezelés biztosítja, hogy a felhasználó érvényes számokat adjon meg, és kezeli a nullával való osztás esetét is.

### Funkciók:
- **Két számmező**: A felhasználó két számot adhat meg a számításhoz.
- **Művelet kiválasztása**: A felhasználó választhat négy művelet közül:
  - **Összeadás**
  - **Kivonás**
  - **Szorzás**
  - **Osztás**
- **Hibakezelés**:
  - Ellenőrzi, hogy a megadott értékek számok-e.
  - Kezeli a nullával való osztást, és megfelelő hibaüzenetet jelenít meg.

### Fájlok:
- `2feladat.php`: A fő fájl, amely a számítást végzi és az űrlapot kezeli.

### Hogyan működik:
1. A felhasználó két számot ad meg és választ egy műveletet.
2. A PHP szkript ellenőrzi, hogy a megadott értékek számok-e.
3. Elvégzi a választott műveletet, és megjeleníti az eredményt.
4. Hibás bemenet esetén hibaüzenet jelenik meg (pl. nem számot adtak meg vagy nullával próbálnak osztani).

### Példa Használat:
1. Írd be a két számot.
2. Válaszd ki a kívánt műveletet, majd kattints a "Számítás" gombra.
3. Az eredmény a művelet alatti szakaszban megjelenik.

---

## **3. Projekt: Jelszóellenőrző**

### Leírás:
Ez a projekt egy jelszóellenőrző eszközt biztosít. A felhasználó jelszavát ellenőrzi, hogy megfelel-e bizonyos biztonsági kritériumoknak: minimális hossz, számjegy, nagybetű és speciális karakterek.

### Funkciók:
- **Jelszókövetelmények**:
  - Legalább 12 karakter hosszú.
  - Tartalmaz legalább egy számjegyet (0–9).
  - Tartalmaz legalább egy nagybetűt.
  - Tartalmaz legalább egy speciális karaktert (pl. `@`, `#`, `$`, stb.).
- Hibás jelszavak esetén egyedi hibaüzenet jelenik meg minden nem teljesülő követelményre.
- Ha a jelszó megfelel az összes kritériumnak, sikerüzenet jelenik meg.

### Fájlok:
- `3feladat.php`: A fő fájl, amely a jelszó ellenőrzését végzi.

### Hogyan működik:
1. A felhasználó megadja a jelszót.
2. A PHP szkript ellenőrzi a következő feltételek teljesülését:
   - A jelszó legalább 12 karakter hosszú.
   - Tartalmaz legalább egy számjegyet.
   - Tartalmaz legalább egy nagybetűt.
   - Tartalmaz legalább egy speciális karaktert.
3. Ha bármelyik feltétel nem teljesül, akkor hibaüzenet jelenik meg.
4. Ha a jelszó megfelel minden követelménynek, egy sikerüzenet jelenik meg.

### Példa Használat:
1. Írd be a jelszót.
2. Kattints az "Ellenőrzés" gombra.
3. A rendszer visszajelzést ad arról, hogy a jelszó megfelel-e a követelményeknek vagy sem.

---

## **Általános Utasítások a Projektek Futtatásához**

1. **Követelmények**:
   - Helyi szerver környezet (pl. XAMPP, WAMP, MAMP) PHP fájlok futtatásához.
   - PHP 7-es vagy újabb verzió.
   - Modern web böngésző az HTML kimenet megjelenítéséhez.

2. **Beállítás**:
   - Töltsd le vagy klónozd a repozitóriumot a helyi gépedre.
   - Helyezd a fájlokat a helyi szerver gyökérmappájába (pl. `htdocs` XAMPP esetén).
   - Nyisd meg a megfelelő `.php` fájlt a böngészőben a következő URL-en: `http://localhost/<mappa-neve>/`.

3. **Tesztelés**:
   - Minden projekt esetén töltsd ki az űrlapot, és küldd el, hogy megnézd a validálás eredményét.
   - Teszteld a hibás bemeneteket (pl. üres mezők vagy hibás adatok), hogy láthasd a hibakezelés működését.

---
