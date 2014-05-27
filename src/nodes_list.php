<?php 
	require_once 'config/motodConfig.php';
	require_once 'classes/MotoRPC.php';
	
	$nodes = MotoRPC::getpeerinfo();
	
	foreach ($nodes as $node) {
		echo $node['addr'].'<br>';		
	}
?>
