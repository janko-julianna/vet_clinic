<h2>Állatok listája</h2>
<a href="?todo=new" class="btn btn-primary mb-3">Új állat felvétele</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Név</th>
            <th>Faj</th>
            <th>Születési dátum</th>
            <th>Oltott?</th>
            <th>Következő vizsgálat</th>
            <th>Megjegyzés</th>
            <th>Művelet</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($animalsModel->getAnimals() as $animal): ?>
            <tr>
                <td><?= $animal->id ?></td>
                <td><?= htmlspecialchars($animal->name) ?></td>
                <td><?= htmlspecialchars($animal->species) ?></td>
                <td><?= htmlspecialchars($animal->birthdate) ?></td>
                <td><?= $animal->vaccinated ? "Igen" : "Nem" ?></td>
                <td><?= htmlspecialchars($animal->next_checkup) ?></td>
                <td><?= htmlspecialchars($animal->notes) ?></td>
                <td>
                    <?php if (!$animal->vaccinated): ?>
                        <a href="?todo=setVaccinated&id=<?= $animal->id ?>" class="btn btn-success btn-sm">Oltás</a>
                        <a href="?todo=delete&id=<?= $animal->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Biztos törlöd?');">Törlés</a>
                    <?php else: ?>
                        <a href="?todo=checkup&id=<?= $animal->id ?>" class="btn btn-info btn-sm">Kivizsgálás</a>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
