<h2 class="mb-4 text-center">Oltás rögzítése: <?= htmlspecialchars($animal->name) ?></h2>

<form method="POST" action="?todo=saveVaccination" class="p-4 bg-light rounded shadow-sm" style="max-width: 600px; margin: auto;">
    <input type="hidden" name="name" value="<?= htmlspecialchars($animal->name) ?>">

    <div class="mb-3">
        <label for="vaccine_type" class="form-label fw-semibold">Oltás típusa:</label>
        <select name="vaccine_type" id="vaccine_type" class="form-select form-select-lg" required>
            <option value="">-- Válassz --</option>
            <option value="Veszettség">Veszettség</option>
            <option value="Kombinált">Kombinált</option>
            <option value="Féreghajtó">Féreghajtó</option>
            <option value="Kullancs elleni">Kullancs elleni</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="vaccine_date" class="form-label fw-semibold">Oltás dátuma:</label>
        <input type="date" name="vaccine_date" id="vaccine_date" class="form-control form-control-lg" required value="<?= date('Y-m-d') ?>">
    </div>

    <div class="d-grid gap-2">
        <button type="submit" class="btn btn-success btn-lg fw-semibold">Mentés</button>
        <a href="index.php" class="btn btn-outline-secondary btn-lg">Mégse</a>
    </div>
</form>
