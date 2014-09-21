<?php

	$serverPort="";
	$serverHostName="192.168.1.52";
	$serverUsesSSL=false;
	
	$server_root_address=($serverUsesSSL?"https://":"http://").(($serverHostName=="")?$_SERVER['SERVER_ADDR']:$serverHostName).(($serverPort=="")?"":(":".$serverPort));
	$server_builds_path=$server_root_address."/Builds/";
	$build_file_time_offset=16200;
	$build_file_time_zone="IST";

	$splitted=explode('iPhone',$_SERVER['HTTP_USER_AGENT']);
	$iph=(sizeof($splitted)>1);
	$ismobile=false;

	$ipaDldSupported=false;

	if($iph)
	{
		$ismobile=true;
		$ipaDldSupported=true;
	}
	else
	{
		$splitted_x=explode('iPad',$_SERVER['HTTP_USER_AGENT']);
		$isIpad= (sizeof($splitted_x)>1);
	
		if($isIpad)
		{
			$ismobile=false;
			$ipaDldSupported=true;
		}
		else
		{
			$splitted_x=explode('Mobile',$_SERVER['HTTP_USER_AGENT']);
			$ismobile= (sizeof($splitted_x)>1);
		}
	}
	$mobilestr=$ismobile?"true":"false";

?>