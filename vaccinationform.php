<h2>Oltás rögzítése: <?= htmlspecialchars($animal->name) ?></h2>

<form method="POST" action="?todo=saveVaccination">
    <input type="hidden" name="name" value="<?= htmlspecialchars($animal->name) ?>">

    <div class="mb-3">
        <label for="vaccine_type" class="form-label">Oltás típusa:</label>
        <select name="vaccine_type" id="vaccine_type" class="form-select" required>
            <option value="">-- Válassz --</option>
            <option value="Veszettség">Veszettség</option>
            <option value="Kombinált">Kombinált</option>
            <option value="Féreghajtó">Féreghajtó</option>
            <option value="Kullancs elleni">Kullancs elleni</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="vaccine_date" class="form-label">Oltás dátuma:</label>
        <input type="date" name="vaccine_date" id="vaccine_date" class="form-control" required value="<?= date('Y-m-d') ?>">
    </div>

    <button type="submit" class="btn btn-success">Mentés</button>
    <a href="index.php" class="btn btn-secondary">Mégse</a>
</form>
