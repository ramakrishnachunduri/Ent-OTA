<?php

include('common.php');

$ipa=$_GET['buildName'];
$bundleid=$_GET['bundleId'];
$appTitle=$_GET['buildTitle'];

$ipa_path=$server_builds_path.$ipa;

$plist_contents='<?xml version="1.0" encoding="UTF-8"?>';
$plist_contents.="\n";
$plist_contents.='<!DOCTYPE plist PUBLIC "-//Apple//DTD PLIST 1.0//EN" "http://www.apple.com/DTDs/PropertyList-1.0.dtd">';
$plist_contents.="\n";
$plist_contents.='<plist version="1.0">';
$plist_contents.="\n";
$plist_contents.='<dict>';
$plist_contents.="\n";
$plist_contents.='	<key>items</key>';
$plist_contents.="\n";
$plist_contents.='	<array>';
$plist_contents.="\n";
$plist_contents.='		<dict>';
$plist_contents.="\n";
$plist_contents.='			<key>assets</key>';
$plist_contents.="\n";
$plist_contents.='			<array>';
$plist_contents.="\n";
$plist_contents.='				<dict>';
$plist_contents.="\n";
$plist_contents.='					<key>kind</key>';
$plist_contents.="\n";
$plist_contents.='					<string>software-package</string>';
$plist_contents.="\n";
$plist_contents.='					<key>url</key>';
$plist_contents.="\n";
$plist_contents.='					<string>'.$ipa_path.'</string>';
$plist_contents.="\n";
$plist_contents.='				</dict>';
$plist_contents.="\n";
$plist_contents.='			</array>';
$plist_contents.="\n";
$plist_contents.='			<key>metadata</key>';
$plist_contents.="\n";
$plist_contents.='			<dict>';
$plist_contents.="\n";
$plist_contents.='				<key>bundle-identifier</key>';
$plist_contents.="\n";
$plist_contents.='				<string>'.$bundleid.'</string>';
$plist_contents.="\n";
$plist_contents.='				<key>kind</key>';
$plist_contents.="\n";
$plist_contents.='				<string>software</string>';
$plist_contents.="\n";
$plist_contents.='				<key>title</key>';
$plist_contents.="\n";
$plist_contents.='				<string>'.$appTitle.'</string>';
$plist_contents.="\n";
$plist_contents.='			</dict>';
$plist_contents.="\n";
$plist_contents.='		</dict>';
$plist_contents.="\n";
$plist_contents.='	</array>';
$plist_contents.="\n";
$plist_contents.='</dict>';
$plist_contents.="\n";
$plist_contents.='</plist>';

header('Content-Type: application/xml');

echo $plist_contents;

?>