<div class="container">
    <div class="row my-5">
        <div class="col-lg-6 col-12 mx-auto">
					<?php require_once ROOT . '/views/partials/form-subjects.php'; ?>

					<?php
					if ( isset( $schedule ) && !empty( $schedule ) ) {
						require_once ROOT . '/views/partials/form-teachers-schedule.php';
					}
					?>

					<?php
					if ( isset( $schedule ) && !empty( $schedule ) ) {
						require_once ROOT . '/views/partials/table-schedule.php';
					}
					?>
        </div>
    </div>
</div>