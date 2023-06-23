<?php

$pagefilter = filter_input(INPUT_GET,'page',FILTER_SANITIZE_URL);

if  ($pagefilter  == ''){
require 'pages/accueil.php';
} elseif ($pagefilter == 'contact'){
require 'pages/contact.php';
} elseif ($pagefilter == 'hobby') {
require 'pages/hobby.php';
} else  {
echo "ErrorDocument 404 ";
}
//echo "Vous avez recherché $pagefilter.\n";
//var_dump($pagefilter);


?>









