<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$a = $_POST['code'];
$c = $_POST['b_price'];
$z = $_POST['gen'];
$b = $_POST['name'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['o_price'];
$h = $_POST['profit'];
$i = $_POST['date_arrival'];
$j = $_POST['sold'];
$l = $_POST['cdisc'];
// query
$sql = "UPDATE products 
        SET product_code=?, gen_name=?, product_name=?, price=?, bprice=?, supplier=?, qty=?, cdisc=?,o_price=?, profit=?, date_arrival=?, qty_sold=?
		WHERE product_id=?";
$q = $db->prepare($sql);
$q->execute(array($a,$z,$b,$d,$c,$e,$f,$l,$g,$h,$i,$j,$id));
header("location: products.php");

?>