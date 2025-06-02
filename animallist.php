<?php
include_once "Animals.php";
$animalsModel = new Animals("localhost", "root", "", "vet_clinic");
$animals = $animalsModel->getAnimals();

echo "<h2 class='my-3'>Állatorvosi nyilvántartás</h2>";
echo "<a href='?todo=new' class='btn btn-success mb-2'>Új állat felvétele</a>";
echo "<table class='table table-striped table-bordered'>";
echo "<thead>
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Faj</th>
            <th>Születési dátum</th>
            <th>Oltott?</th>
            <th>Következő vizsgálat</th>
            <th>Megjegyzés</th>
            <th>Oltás beállítás</th>
        </tr>
    </thead><tbody>";

foreach ($animals as $animal) {
    echo "<tr>
        <td>$animal->id</td>
        <td>$animal->name</td>
        <td>$animal->species</td>
        <td>$animal->birthdate</td>
        <td>" . ($animal->vaccinated ? "Igen" : "Nem") . "</td>
        <td>" . ($animal->next_checkup ? $animal->next_checkup : "-") . "</td>
        <td>" . nl2br(htmlspecialchars($animal->notes)) . "</td>
        <td>" . (!$animal->vaccinated ? "<a href='?todo=setVaccinated&id=$animal->id' class='btn btn-sm btn-primary'>Beoltva</a>" : "") . "</td>
    </tr>";
}
echo "</tbody></table>";
?>
