<h2 class="mb-4 text-center">Kivizsgálás: <?= htmlspecialchars($animal->name) ?></h2>

<form method="POST" action="?todo=saveCheckup" class="p-4 bg-light rounded shadow-sm" style="max-width: 600px; margin: auto;">
    <input type="hidden" name="name" value="<?= htmlspecialchars($animal->name) ?>">

    <div class="mb-3">
        <label for="checkup_note" class="form-label fw-semibold">Vizsgálati jegyzet:</label>
        <textarea id="checkup_note" name="checkup_note" rows="5" required class="form-control form-control-lg" placeholder="Ide írd a vizsgálati jegyzetet..."></textarea>
    </div>

    <div class="mb-3">
        <label for="next_checkup" class="form-label fw-semibold">Következő vizsgálat dátuma:</label>
        <input type="date" id="next_checkup" name="next_checkup" value="<?= $animal->next_checkup ?>" class="form-control form-control-lg">
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success btn-lg fw-semibold">Mentés</button>
        <a href="index.php" class="btn btn-outline-secondary btn-lg">Mégse</a>
    </div>
</form>
