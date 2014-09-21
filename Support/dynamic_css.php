<?php
header('Content-type: application/txt');

$mobilestr=$_REQUEST['mobile'];

if($mobilestr=='true')
{
    $ismobile=true;
}
else
{
    $ismobile=false;
}

?>
h1
{
      font-size:<?php echo $ismobile?"320%":"15px"; ?>;
      text-align:center;
      border-radius:<?php echo $ismobile?"40px":"10px"; ?>;
}
.tbl
{
	  margin-top:<?php echo $ismobile?"30px":"10px"; ?>;
      border-radius:<?php echo $ismobile?"40px":"10px"; ?>;
      width:100%;
      margin-bottom:7px;
      font-size:<?php echo $ismobile?"270%":"15px"; ?>;
}
.tbl td
{
    padding:<?php echo $ismobile?"5px":"5px"; ?>;
}

.appicon
{
	width:<?php echo $ismobile?"12%":"32px"; ?>;
	padding:0px <?php echo $ismobile?"10px":"5px"; ?> !important;
	align:right;
}

.appicon img
{
	width:100%;
}

.icon
{
	width:<?php echo $ismobile?"12%":"32px" ;?>;
	padding:<?php echo $ismobile?"10px":"10px"; ?> <?php echo $ismobile?"10px":"5px" ;?> !important;
	padding-right:<?php echo $ismobile?"30px":"20px" ;?> !important;
    align:right;
}
.icon img
{
    width:100%;
}      
.tbl a
{
   border:none 1px #cccccc;
   text-decoration:none;
}
.tbl img
{
    border:none 1px #cccccc;
}
.apptitle
{
    font-weight:bold;
}
.appBuildDate
{
    font-weight:italic;
    text-align:left;
    font-size:<?php echo $ismobile?"90%":"13px"; ?>;
}

.index
{
    width:<?php echo $ismobile?"8%":"32px"; ?>;
    text-align:center;
}
.details
{
    padding:36px !important;
    border-top: solid 1px #555;
}

.install_instructions
{
    font-size:<?php echo $ismobile?"220%":"13px"; ?>;
}

.designer
{
    font-size:<?php echo $ismobile?"210%":"12px"; ?>;
    text-align:center;
    padding:0px 10px;
}