<?php

/* usort($data, function($a, $b) {
	  
	  $v1 = floatval( $a['version'] );
	  $v2 = floatval( $b['version'] );
	  
	  return ($v1>$v2)?-1:1;
}); */

$i=-1;

foreach($data as $entry)
{
	$i++;
	
	$filepath= $entry['buildFileLocation'].'/'.$entry['buildFileName'];
	
	if(file_exists($filepath))
    {
		$file_time=filemtime($filepath);
		$url=$server_root_address."/Support/build_plist_file.php?buildName=".urlencode($entry['buildFileName'])."&bundleId=".urlencode($entry['bundleId'])."&buildTitle=".urlencode($entry['buildTitle']);
		
		if($ipaDldSupported)
		{
			$url=str_replace("=","%3D",$url);
			$url=str_replace("&","%26",$url);
			//$url=str_replace("?","%3F",$url);
		}
		
		$filedate=date('d M Y - h:i A',$file_time);
	
		$fdate=date('d M Y',$file_time);
		$ftime=date('H:i',$file_time+$build_file_time_offset);
    }
    else
    {
		$url=null;
		$filedate=null;
    }
	
	$iconurl='Support/default-build-icon.png';
	$iconpath=str_replace('.ipa','.png', $filepath);
	if(file_exists($iconpath))
	{
		$iconurl=$iconpath;
	}
?>
	<table cellspacing=0 align='center' class='tbl' <?php echo $filedate?"bgcolor='#3B4040' ":"bgcolor='darkgray'"; ?> >
		<tr>
			<td rowspan=2 class='index'><?php echo ($i+1); ?></td>
			<td rowspan=2 class='appicon'>
				<?php
	
				if($filedate)
				{
					$url_prefix=$ipaDldSupported?"itms-services://?action=download-manifest&url=":"";
					
					if(!$ipaDldSupported)
					{
						//$url=str_replace('.plist','.ipa',$url);
					}
					
					?>
					<a href="<?php echo $url_prefix; ?><?php echo $url; ?>"><img src='<?php echo $iconurl ?>' /></a>
					<?php
				}
				else
				{
					?>
					<img src='<?php echo $iconurl ?>' />
					<?php
				}
				?>
			</td>
			<td class="apptitle" colspan='2'><?php echo $ismobile?" ":""; ?><?php echo $entry['buildTitle']; ?> </td>
			<td rowspan=2 class='icon' onclick="displayDesc(this)">
				<img src="Support/info_icon.png" />
			</td>
		</tr>
		<tr>
		<td class="appschema"  colspan='3'>Version : <?php echo $entry['appVersion']; ?></td>
		</tr>
		<tr>
			<td colspan=6 style="display:none;" class='details'>
				Schema :  <?php echo $entry['schema']; ?><br/>
				<?php
				if($filedate)
				{
					echo "Built On : ".$fdate." - ".$ftime." ".$build_file_time_zone;
				}
				else
				{
					echo "<font color=red >Build is not ready</font>";
				}
				?><br/>
				App Version : <?php echo $entry['appVersion']; ?>
				<br/><br/>
				<?php echo str_replace("\n","<br/>",$entry['buildDesc']); ?>
			</td>
		</tr>
	</table>	
<?php
}
?>