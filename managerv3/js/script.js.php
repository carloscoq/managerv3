<?php

ob_start('ob_gzhandler');
header('Content-type: text/javascript; charset: UTF-8');
header('Cache-Control: must-revalidate');
header('Expires: '.gmdate('D, d M Y H:i:s',time()+60*60).' GMT');

require 'functions.js';
require 'core/controlMenuPosition.js';
require 'core/menu-topo-hover.js';
require 'core/menu-style-select.js';
require 'core/insereCampoHoraMinutoDatepicker.js';
require 'core/carregaCss.js';
require 'core/controlaBuscaAvancada.js';
require 'core/tooltip.js';
require 'core/posicaoListagem.js';
require 'core/core.js';
require 'script.js';

?>