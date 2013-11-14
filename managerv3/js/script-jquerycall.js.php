<?php

ob_start('ob_gzhandler');
header('Content-type: text/javascript; charset: UTF-8');
header('Cache-Control: must-revalidate');
header('Expires: '.gmdate('D, d M Y H:i:s',time()+60*60).' GMT');

require 'jquery-1.7.1.min.js';
require 'jquery-ui-1.8.18.custom.min.js';
require '3rd_party/bxSlider/jquery.bxSlider.js';
require '3rd_party/bxSlider/jquery.easing.1.3.js';
require '3rd_party/chosen/chosen.jquery.min.js';

?>