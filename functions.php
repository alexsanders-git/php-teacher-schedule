<?php

function dump( $data ) {
	echo "<pre>";
	var_dump( $data );
	echo "</pre>";
}

function dd( $data ) {
	dump( $data );
	die;
}

function abort( $code = 404 ) {
	http_response_code( $code );
	require ROOT . "/views/layouts/{$code}.php";
	die;
}

function load( $input_data, $fillable = [] ) {
	$data = [];
	foreach ( $input_data as $k => $v ) {
		if ( in_array( $k, $fillable ) ) {
			$data[ $k ] = trim( $v );
		}
	}
	return $data;
}
