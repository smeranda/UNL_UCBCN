<?php
if (!isset($_SERVER['argv'],$_SERVER['argv'][1])
    || $_SERVER['argv'][1] == '--help' || !($_SERVER['argc'] == 2)){
	echo "This program requires 1 argument.\n";
	echo "addEventType.php eventtype\n\n";
	echo "Example: addEventType.php Party\n";
	echo "That will add the eventtype Party. If \n";
	echo "the event already exists, it will not \n";
	echo "be re-added.\n";
}else{
	require_once 'UNL/UCBCN.php';
	$backend = new UNL_UCBCN(array('dsn'=>'mysql://eventcal:eventcal@localhost/eventcal'));


	// Backend is a UNL_UCBCN object.
	$eventtype = $backend->factory('eventtype');

	$eventtype->name = $_SERVER["argv"][1];
	if (!$eventtype->find()) {
		$eventtype->name = $_SERVER["argv"][1];
		$eventtype->description = $_SERVER["argv"][1];
		$eventtype->insert();
		echo "{$_SERVER["argv"][1]} has been added to the database.\n";
	}else{
		echo "{$_SERVER["argv"][1]} already exists and has not been re-added.\n";
	}
}