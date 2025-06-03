<h2 class="mb-4 text-center">Állatok listája</h2>
<div class="d-flex justify-content-between mb-3">
    <a href="?todo=new" class="btn btn-primary btn-lg fw-semibold">Új állat felvétele</a>
</div>

<table class="table table-hover table-bordered align-middle">
    <thead class="table-dark">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Faj</th>
            <th scope="col">Születés</th>
            <th scope="col">Oltott?</th>
            <th scope="col">Következő vizsgálat</th>
            <th scope="col">Jegyzet</th>
            <th scope="col" style="min-width: 180px;">Művelet</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($animalsModel->getAnimals() as $animal): ?>
        <tr>
            <td><?= htmlspecialchars($animal->name) ?></td>
            <td><?= htmlspecialchars($animal->species) ?></td>
            <td><?= htmlspecialchars($animal->birthdate) ?></td>
            <td>
                <?php if ($animal->vaccinated): ?>
                    <span class="badge bg-success">Igen</span>
                <?php else: ?>
                    <span class="badge bg-danger">Nem</span>
                <?php endif; ?>
            </td>
            <td><?= htmlspecialchars($animal->next_checkup) ?></td>
            <td><pre class="mb-0"><?= htmlspecialchars($animal->notes) ?></pre></td>
            <td>
                <?php if (!$animal->vaccinated): ?>
                    <a href="?todo=setVaccinated&name=<?= urlencode($animal->name) ?>" class="btn btn-success btn-sm me-1 mb-1">Oltás</a>
                    <a href="?todo=delete&name=<?= urlencode($animal->name) ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Biztosan törlöd az állatot?')">Törlés</a>
                <?php else: ?>
                    <a href="?todo=checkup&name=<?= urlencode($animal->name) ?>" class="btn btn-info btn-sm me-1 mb-1">Kivizsgálás</a>
                    <a href="?todo=delete&name=<?= urlencode($animal->name) ?>" class="btn btn-danger btn-sm mb-1" onclick="return confirm('Biztosan törlöd az állatot?')">Törlés</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
