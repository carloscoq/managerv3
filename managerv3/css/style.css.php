<?php

ob_start('ob_gzhandler');
header('Content-type: text/css; charset: UTF-8');
header('Cache-Control: must-revalidate');
header('Expires: '.gmdate('D, d M Y H:i:s',time()+60*60).' GMT');

require 'core.css';
require 'jquery-ui-1.8.18.custom.css';
require 'chosen/chosen-single.css';

$browser = $_SERVER['HTTP_USER_AGENT'];
if(strstr($browser, "MSIE 7")) {
	require 'ie7.css';
}
if(strstr($browser, "MSIE 8")) {
	require 'ie8.css';
}
if(strstr($browser, "MSIE 9")) {
	require 'ie9.css';
}
if(strstr($browser, "Chrome") or strstr($browser, "Safari")) {
	require 'chrome.css';
}
if(strstr($browser, "Opera")) {
	require 'opera.css';
}

?>