<?php
	session_start();

	function getRandom($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $length; $i++)
		{
			$randomString .= $characters[rand(0, strlen($characters) - 1)];
		}
		return $randomString;
	}

	$return = array();
	$return['state'] = "ok";
	$return['code'] = getRandom( 5 );

	$_SESSION["code"] = $return["code"];

	echo json_encode( $return );

?>