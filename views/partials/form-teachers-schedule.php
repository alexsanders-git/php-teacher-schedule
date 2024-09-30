<h2 class="mb-2 text-center">Select teachers:</h2>
<form action="" method="post" class="mb-5">
    <div class="mb-3">
        <label for="teacher" class="form-label">Teachers:</label>
        <select id="teacher" class="form-select" name="teacher" aria-label="Teachers">
            <option value selected disabled>Select the teacher</option>
					<?php foreach ( $teachers as $teacher ) : ?>
              <option value="<?= $teacher[ 'id' ] ?>>">
								<?= $teacher[ 'first_name' ] . ' ' . $teacher[ 'last_name' ]; ?>
              </option>
					<?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="subject" class="form-label">Subject:</label>
        <select id="subject" class="form-select" name="subject" aria-label="School subjects">
            <option value selected disabled>Select the subject</option>
					<?php foreach ( $schedule as $item ) : ?>
              <option value="<?= $item[ 'id' ] ?>>">
								<?= $item[ 'subject' ]; ?>
              </option>
					<?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>