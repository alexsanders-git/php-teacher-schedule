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
		<?php foreach ( $teacher_schedule as $index => $item ) : ?>
        <tr data-id="<?= $item[ 'id' ]; ?>">
            <th scope="row"><?= $index + 1; ?></th>
            <td><?= $item[ 'day' ]; ?></td>
            <td><?= $item[ 'subject' ]; ?></td>
            <td><?= $item[ 'first_name' ] . ' ' . $item[ 'last_name' ]; ?></td>
        </tr>
		<?php endforeach; ?>
    </tbody>
</table>
