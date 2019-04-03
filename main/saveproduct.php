<?php
session_start();
include('../connect.php');
$a = $_POST['code'];
$b = $_POST['name'];
$c = $_POST['b_price'];
$d = $_POST['price'];
$e = $_POST['supplier'];
$f = $_POST['qty'];
$g = $_POST['o_price'];
$h = $_POST['profit'];
$i = $_POST['gen'];
$j = $_POST['date_arrival'];
$k = $_POST['qty_sold'];
$l = $_POST['cdisc'];
$dat = strtotime("Today");
if (empty($j)) {
	$j=date("Y-m-d",$dat);
}
// query
$sql = "INSERT INTO products (product_code,product_name,bprice,price,supplier,qty,cdisc,o_price,profit,gen_name,date_arrival,qty_sold) VALUES (:a,:b,:c,:d,:e,:f,:l,:g,:h,:i,:j,:k)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':d'=>$d,':e'=>$e,':f'=>$f,':l'=>$l,':g'=>$g,':h'=>$h,':i'=>$i,':j'=>$j,':k'=>$k));
header("location: products.php");


?>