<?php
function start_page($title){echo'<!DOCTYPE html><html lang="fr"><head><title>'.PHP_EOL.$title.'</title></head><body>'.PHP_EOL;};?>
<?phpstart_page('GLHF');?>
<hr/><br/><strong>Test</strong><br/><hr/>
<?php
$jour=date('d F, Y');
$jour=date('d/m/Y', strtotime('2001-03-12'));
echo $jour;
echo '<br/>';
$jour=date('d F, Y,');
echo $jour,' 10:16 pm';
?>
<?phpend_page('GLHF');?>


