<?php
require_once('template.php'); 
ob_start();
?>
<h1>Bienvenue dans le site qui affiche les cartes</h1>
<?
$content = ob_get_clean(); //vider le buffer est placer les information dans le content 


