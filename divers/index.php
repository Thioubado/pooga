<?php
require 'Autoloader.php';
use Gc7\Divers\AutoMenu\AutoMenu;

$p = $_GET[ 'p' ] ?? 'accueil';
//var_dump($_GET, $p);

$page = new AutoMenu( './divers' );
//var_dump( $page );

ob_start();

$page->action( $p );

$content = ob_get_clean();

require $page->getFolder() . 'accueil/template.php';