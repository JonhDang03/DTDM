<?php
    	include("../../libraries/connect.php");
        $sql_xoa = "DELETE FROM product WHERE id_product = '".$_GET['id']."'";
    	$conn->query($sql_xoa);
    	header("Location: index.php");

?>