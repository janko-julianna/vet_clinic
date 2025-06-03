# Állatorvosi Nyilvántartó Program

## Működés

Ez a program egy állatorvosi rendelő digitális nyilvántartására szolgál. A cél, hogy egyszerűen rögzíthetők legyenek az állatok adatai, oltásai, vizsgálatai és azok időpontjai.

---

## Funkciók

1. **Állat adatainak rögzítése**
   - Név
   - Faj
   - Születési dátum (nem lehet jövőbeni)
   - Oltott állapot
   - Következő vizsgálat dátuma
   - Megjegyzések

2. **Oltás**
   - Ha az állat még nincs beoltva, az "Oltás" gombra kattintva megjelenik egy űrlap.
   - Az űrlapon választható az **oltás típusa** és az **oltás dátuma**.
   - Mentés után:
     - Az állat "Oltott" státuszt kap.
     - A gomb átvált "Kivizsgálás"-ra.
     - A jegyzethez hozzáadódik: `Oltás (ÉÉÉÉ-HH-NN): Típus`.

3. **Kivizsgálás**
   - Az "Kivizsgálás" gombra kattintva megadható:
     - Vizsgálati jegyzet
     - Következő vizsgálat dátuma
   - Mentés után:
     - A jegyzetbe automatikusan bekerül az adott nap dátuma:  
       `Kivizsgálás (ÉÉÉÉ-HH-NN): [jegyzet szövege]`
     - A megadott dátum megjelenik a táblázatban a **Következő vizsgálat** oszlopban

4. **Törlés**
   - Bármelyik állat törölhető egy gombnyomással, függetlenül az oltottsági állapotától.

---

## Megjegyzések

- A **jegyzetek** automatikusan tartalmazzák a beírás napját, így mindig nyomon követhető a frissítés időpontja.
- A kiválasztott **következő vizsgálati dátum** a fő táblázatban külön oszlopban látható.
