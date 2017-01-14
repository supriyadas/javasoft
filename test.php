<?php
$string = 'DANIEL     BAYLIS';
$pattern = '/DANIEL[ ]+BAYLIS/';
$replacement = 'Hello';
echo preg_replace($pattern, $replacement, $string);
?>