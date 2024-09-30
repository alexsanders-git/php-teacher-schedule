<h2 class="mb-2 text-center">Schedule:</h2>
<table class="table table-striped">
    <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Day</th>
        <th scope="col">Subject</th>
        <th scope="col">Teacher</th>
    </tr>
    </thead>
    <tbody>
		<?php foreach ( $schedule_arr as $index => $item ) : ?>
        <tr>
            <th scope="row"><?= $index + 1; ?></th>
            <td><?= $item[ 'day' ]; ?></td>
            <td><?= $item[ 'subject' ]; ?></td>
            <td><?= isset( $item[ 'teacher' ] ) ? $item[ 'teacher' ] : ''; ?></td>
        </tr>
		<?php endforeach; ?>
    </tbody>
</table>
