<?php 
include("Support/functions.php");
include('Support/common.php');

session_start();

?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>On Device Installation</title>
  <link rel='stylesheet' href='Support/dynamic_css.php?mobile=<?php  echo $mobilestr; ?>' />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="favicon.png" type="image/png">
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <script src='Support/dynamic_js.php' type='text/javascript'></script>
</head>
<body bgcolor="gray" text=#ffffff>
<hr/>
<h1><Strong>On Device Installation Server</strong></h1>
<center><h2><Strong>IOS</h2><center>
<!-- <p class='designer'>Created by Krish and Ramki</p> -->
<hr/>
<div class='install_instructions'>
  <ul>
    <li>Tap on application icon install on device.</li>
    <li>Tap on info icon to get the details of the build.</li>
    <li>App can be installed only when device UDID is in the provisioning profile which is used to AdHoc build.</li>
  </ul>
</div>
<hr/>
<?php 

$data=[];

$files=read_all_files('./Builds');
$files=$files['files'];

	$cnt=-1;
	
foreach($files as $file)
{
  if((strpos($file, '.json') !== false))
  {
	  $handle = @fopen($file, "r");
	  $json="";
	  while (false !== ($char = fgetc($handle))) {
		  $json=$json.$char;
	  }
	  $json=json_decode($json,true);
	  $json['buildFileLocation']='./Builds';
	  
	  $cnt++;
	  $data[$cnt]=$json;
  }
}

include('Support/build_list.php');

?>
</body>
</html>