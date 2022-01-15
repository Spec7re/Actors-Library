<?php

require 'functions.php';

connect();

$actors = null;

if ( isXHR() ) {
	if ( isset($_POST['letter']) ) {
		echo json_encode( getActorsByName( $_POST['letter'] ) );
	}

	if ( isset( $_POST['actor_id'] ) ) {
		$info = getActorInfo( $_POST['actor_id'] );
		echo $info->film_info;
	}

	return;
}

if (isset($_POST['letter'])) {

	$actors = getActorsByName($_POST['letter']);

	// echo json_encode( $actors ); return;

}


include ('views/index.tmpl.php');
