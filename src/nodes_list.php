<?php 
	require_once ("bc_daemon.php");
	
	$nodes = getpeerinfo();
	
	foreach ($nodes as $node) {
		echo $node['addr'].'<br>';		
	}
?>
