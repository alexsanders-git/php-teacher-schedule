<?php

function seed_teachers( $db ) {
	$teachers = [
		[ 'first_name' => 'John', 'last_name' => 'Doe' ],
		[ 'first_name' => 'Jane', 'last_name' => 'Smith' ],
		[ 'first_name' => 'Michael', 'last_name' => 'Johnson' ],
		[ 'first_name' => 'Emily', 'last_name' => 'Davis' ],
		[ 'first_name' => 'Daniel', 'last_name' => 'Wilson' ],
		[ 'first_name' => 'Sophia', 'last_name' => 'Garcia' ],
		[ 'first_name' => 'James', 'last_name' => 'Martinez' ],
		[ 'first_name' => 'Olivia', 'last_name' => 'Lopez' ],
		[ 'first_name' => 'Matthew', 'last_name' => 'Clark' ],
		[ 'first_name' => 'Chloe', 'last_name' => 'Rodriguez' ]
	];

	$existing = $db->query( "SELECT COUNT(*) as count FROM teachers" )->find();

	if ( $existing[ 'count' ] == 0 ) {
		foreach ( $teachers as $teacher ) {
			$db->query( "INSERT INTO teachers (`first_name`, `last_name`) VALUES (?, ?)", [
				$teacher[ 'first_name' ], $teacher[ 'last_name' ]
			] );
		}
	}
}