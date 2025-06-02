<h2>Kivizsgálás: <?= htmlspecialchars($animal->name) ?></h2>

<form method="POST" action="?todo=saveCheckup">
    <input type="hidden" name="name" value="<?= htmlspecialchars($animal->name) ?>">

    <div class="mb-3">
        <label for="checkup_note" class="form-label">Vizsgálati jegyzet:</label>
        <textarea id="checkup_note" name="checkup_note" rows="5" required class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="next_checkup" class="form-label">Következő vizsgálat dátuma:</label>
        <input type="date" id="next_checkup" name="next_checkup" value="<?= $animal->next_checkup ?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Mentés</button>
    <a href="index.php" class="btn btn-secondary">Mégse</a>
</form>
