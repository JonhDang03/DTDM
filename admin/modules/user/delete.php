<?php
    	include("../../libraries/connect.php");
        $sql_xoa = "delete from menu where id_menu = '".$_GET['id']."'";
    	$conn->query($sql_xoa);
    	header("Location: index.php");

?>