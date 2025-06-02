<h2>Állatorvosi nyilvántartás</h2>
<a href='?todo=new' class='btn btn-success mb-3'>➕ Új állat felvétele</a>

<table class='table table-hover table-bordered align-middle'>
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Faj</th>
            <th>Születés</th>
            <th>Oltott?</th>
            <th>Következő vizsgálat</th>
            <th>Megjegyzés</th>
            <th>Művelet</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($animals as $animal) {
            echo "<tr>
                <td>$animal->id</td>
                <td><strong>$animal->name</strong></td>
                <td>$animal->species</td>
                <td>" . date("Y. m. d", strtotime($animal->birthdate)) . "</td>
                <td>" . ($animal->vaccinated ? "<span class='badge bg-success'>Igen</span>" : "<span class='badge bg-danger'>Nem</span>") . "</td>
                <td>" . ($animal->next_checkup ? date("Y. m. d H:i", strtotime($animal->next_checkup)) : "-") . "</td>
                <td>" . nl2br(htmlspecialchars($animal->notes)) . "</td>
                <td>" . (!$animal->vaccinated ? "<a href='?todo=setVaccinated&id=$animal->id' class='btn btn-outline-primary btn-sm'>Beoltva</a>" : "✔️") . "</td>
            </tr>";
        }
        ?>
    </tbody>
</table>
