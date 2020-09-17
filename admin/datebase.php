<?php
$db_name = 'addport';
$db_user = 'root';
$db_mdp = '';
$db_cnx = 'mysql:host=localhost;dbname=addport';
try{
$db_connect= new PDO($db_cnx,$db_user,$db_mdp);
} catch(PDOException $e){
die('Error '.$e->getMessage());
}
?>