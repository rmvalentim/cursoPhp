<?php 

require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "templates/", //Define a pasta dos templates
    "cache_dir"     => "cache/"      // Define a pasta onde serão salvos os merges (layout + codigo php)
);
Tpl::configure( $config ); // Configura

// cria o Tpl object
$tpl = new Tpl;

// define uma variavel
$tpl->assign( "name", "Rafael Valentim" );
// define outra variavel
$tpl->assign( "version", PHP_VERSION );


// Desenha o template
$tpl->draw( "index" ); //index.html da pasta templates

 ?>