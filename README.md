# Állatorvosi Nyilvántartó Program

## A program célja

A program célja, hogy egy állatorvosi rendelőben fel tudjuk venni az állatok adatait és időpontjait.

## Funkciók

1. **Állat adatai**

   - Név
   - Faj
   - Születési dátum

2. **Vizsgálat időpontja**

   - Év.hó.nap. óra:perc formátumban

3. **Oltás**

   - Be van-e oltva (igen/nem)

4. **Megjegyzés**
   - Bármi információ, amit az orvosoknak tudniuk kell

# Működése

1. Felveszi az adatokat:

- Az **oltás** mező megjelölése két funkciót tartalmaz:

  - Ha bejelölik: **Kivizsgálás** gomb jelenik meg.
  - Ha nem: **Oltás** gomb jelenik meg.

- Amikor az **oltásra** rákattintunk, megjelenik egy új oldal, ahol az oltás típusát és beadási dátumát választhatjuk ki.

- Ezután, miután a mentésre kattintunk, az **oltás** gomb átalakul **kivizsgálás** gombá, és plusz vizsgálatokat, megjegyzéseket írhatunk.

- A **Kivizsgálás** tartalmazza a vizsgálatok jegyzeteit és a következő vizsgálat időpontját.
