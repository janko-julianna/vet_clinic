<h2 class="my-3">Új állat felvétele</h2>
<form method="POST" action="?todo=add">
  <div class="mb-3">
    <label for="name" class="form-label">Név</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="species" class="form-label">Faj</label>
    <input type="text" class="form-control" id="species" name="species" required>
  </div>
  <div class="mb-3">
    <label for="birthdate" class="form-label">Születési dátum</label>
    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="vaccinated" name="vaccinated">
    <label class="form-check-label" for="vaccinated">Oltva</label>
  </div>
  <div class="mb-3">
    <label for="next_checkup" class="form-label">Következő vizsgálat időpontja</label>
    <input type="datetime-local" class="form-control" id="next_checkup" name="next_checkup">
  </div>
  <div class="mb-3">
    <label for="notes" class="form-label">Megjegyzés</label>
    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-success">Felvétel</button>
</form>
