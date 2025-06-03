<h2>Állatok listája</h2>
<a href="?todo=new" class="btn btn-primary mb-3">Új állat</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Név</th><th>Faj</th><th>Születés</th><th>Oltott?</th>
            <th>Következő vizsgálat</th><th>Jegyzet</th><th>Művelet</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($animalsModel->getAnimals() as $animal): ?>
        <tr>
            <td><?= htmlspecialchars($animal->name) ?></td>
            <td><?= htmlspecialchars($animal->species) ?></td>
            <td><?= $animal->birthdate ?></td>
            <td><?= $animal->vaccinated ? "Igen" : "Nem" ?></td>
            <td><?= $animal->next_checkup ?></td>
            <td><pre><?= htmlspecialchars($animal->notes) ?></pre></td>
            <td>
            <?php if (!$animal->vaccinated): ?>
                <a href="?todo=setVaccinated&name=<?= urlencode($animal->name) ?>" class="btn btn-success btn-sm">Oltás</a>
                <a href="?todo=delete&name=<?= urlencode($animal->name) ?>" class="btn btn-danger btn-sm">Törlés</a>
            <?php else: ?>
                <a href="?todo=checkup&name=<?= urlencode($animal->name) ?>" class="btn btn-info btn-sm">Kivizsgálás</a>
                <a href="?todo=delete&name=<?= urlencode($animal->name) ?>" class="btn btn-danger btn-sm">Törlés</a>
            <?php endif; ?>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
