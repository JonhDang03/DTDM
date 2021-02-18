<?php 
	@session_start();
	$id = $_GET['id'];
	$prd = NULL;
	if(isset($_SESSION['cart'][$id]))
	{
		$prd = $_SESSION['cart'][$id] + 1;
	}
	else
	{
		$prd = 1;
	}
	$_SESSION['cart'][$id] = $prd;
	header('location: single.php?id='.$_GET['id'].'');

?>