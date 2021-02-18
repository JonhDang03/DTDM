<?php
    	include("../../libraries/connect.php");
        $sql_xoa = "delete from account where id_account = '".$_GET['id']."'";
    	$conn->query($sql_xoa);
    	header("Location: index.php");

?>