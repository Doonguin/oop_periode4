<?php

include('koffiekopjeclass.php');
$instance = new koffiekopje('leeg');

echo 'Koffie kopje = ';
$instance->displayVar();

?>