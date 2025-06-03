<h2 class="mb-4 text-center">Új állat felvétele</h2>

<form method="POST" action="?todo=add" class="p-4 bg-light rounded shadow-sm" style="max-width: 600px; margin: auto;">
  <div class="mb-3">
    <label for="name" class="form-label fw-semibold">Név</label>
    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Állat neve" required>
  </div>

  <div class="mb-3">
    <label for="species" class="form-label fw-semibold">Fajta</label>
    <input type="text" class="form-control form-control-lg" id="species" name="species" placeholder="Pl. Kutya, Macska" required>
  </div>

  <div class="mb-3">
    <label for="birthdate" class="form-label fw-semibold">Születési dátum</label>
    <input type="date" class="form-control form-control-lg" id="birthdate" name="birthdate" required>
  </div>

  <div class="form-check form-switch mb-3">
    <input class="form-check-input" type="checkbox" id="vaccinated" name="vaccinated" value="1">
    <label class="form-check-label" for="vaccinated">Oltott</label>
  </div>

  <div class="mb-3">
    <label for="next_checkup" class="form-label fw-semibold">Következő vizsgálat dátuma</label>
    <input type="date" class="form-control form-control-lg" id="next_checkup" name="next_checkup">
  </div>

  <div class="mb-3">
    <label for="notes" class="form-label fw-semibold">Megjegyzés</label>
    <textarea class="form-control form-control-lg" id="notes" name="notes" rows="4" placeholder="Ide írd a megjegyzést..."></textarea>
  </div>

  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary btn-lg fw-semibold">Felvesz</button>
    <a href="index.php" class="btn btn-outline-secondary btn-lg">Mégse</a>
  </div>
</form>
