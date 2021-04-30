<?php
function getBD(){
$bdd =  new PDO('mysql:host=localhost;dbname=projetgares;charset=utf8','root', 'root');
return $bdd;
}
?>