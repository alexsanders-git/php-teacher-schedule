<?php

$teachers = $db->query( "SELECT * FROM teachers" )->findAll();
$schedule = $db->query( "SELECT * FROM schedule" )->findAll();

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
	} elseif ( isset( $_POST[ 'teacher' ] ) ) {
		/** TEACHER FORM */
	} else {
		abort( 400 );
	}
}

// Show UI
require_once 'views/layouts/base.php';
