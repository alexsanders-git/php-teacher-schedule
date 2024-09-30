<?php

$teachers = $db->query( "SELECT * FROM teachers" )->findAll();
$schedule = $db->query( "SELECT * FROM schedule" )->findAll();

$schedule_arr = [];

foreach ( $schedule as $item ) {
	$schedule_item = [];
	$schedule_item[ 'day' ] = $item[ 'day' ];
	$schedule_item[ 'subject' ] = $item[ 'subject' ];

	$teacher_schedule = $db->query( "SELECT * FROM teacher_schedule WHERE `schedule_id` = ?", [ $item[ 'id' ] ] )->find();

	if ( $teacher_schedule ) {
		$teacher = $db->query( "SELECT * FROM teachers WHERE `id` = ?", [ $teacher_schedule[ 'teacher_id' ] ] )->find();

		$schedule_item[ 'teacher' ] = $teacher[ 'first_name' ] . ' ' . $teacher[ 'last_name' ];
	}

	$schedule_arr[] = $schedule_item;
}

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
		header( "Location: /" );
		exit;
	} else {
		abort( 400 );
	}
}

// Show UI
require_once 'views/layouts/base.php';
