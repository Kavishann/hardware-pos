<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['name'];
// query
$sql = "UPDATE category 
        SET cname=?
		WHERE cid=?";
$q = $db->prepare($sql);
$q->execute(array($a,$id));
header("location: category.php");

?>