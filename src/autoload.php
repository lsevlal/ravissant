<?php
if ($_SERVER["REQUEST_METHOD"] == "OPTIONS") {
	if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_METHOD"])){
		header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
	}

	if (isset($_SERVER["HTTP_ACCESS_CONTROL_REQUEST_HEADERS"])){
		header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
	}

	exit(0);
}

foreach (glob(__DIR__ . "/*.php") as $filename){
	require_once $filename;
}