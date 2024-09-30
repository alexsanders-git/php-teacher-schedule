<?php

$teachers = $db->query( "SELECT * FROM teachers" )->findAll();
$schedule = $db->query( "SELECT * FROM schedule" )->findAll();
$teacher_schedule = $db->query( "
    SELECT ts.id, t.first_name, t.last_name, s.day, s.subject
    FROM teacher_schedule ts
    JOIN teachers t ON ts.teacher_id = t.id
    JOIN schedule s ON ts.schedule_id = s.id
" )->findAll();

if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
	if ( isset( $_POST[ 'day' ] ) ) {
		/** SCHEDULE FORM */
		$fillable = [ 'day', 'subject' ];

		$data = load( $_POST, $fillable );

		if ( !isset( $data[ 'day' ] ) || !isset( $data[ 'subject' ] ) ) {
			abort( 400 );
		}

		$db->query( "INSERT INTO schedule (`day`, `subject`) VALUES (?, ?)", [
			$_POST[ 'day' ], $_POST[ 'subject' ]
		] );

		header( "Location: /" );
		exit;
	} elseif ( isset( $_POST[ 'teacher' ] ) ) {
		/** TEACHER FORM */
		$fillable = [ 'teacher', 'subject' ];

		$data = load( $_POST, $fillable );

		if ( !isset( $data[ 'teacher' ] ) || !isset( $data[ 'subject' ] ) ) {
			abort( 400 );
		}

		$db->query( "INSERT INTO teacher_schedule  (`teacher_id`, `schedule_id`) VALUES (?, ?)", [
			intval( $_POST[ 'teacher' ] ), intval( $_POST[ 'subject' ] )
		] );
	} else {
		abort( 400 );
	}
}

// Show UI
require_once 'views/layouts/base.php';
