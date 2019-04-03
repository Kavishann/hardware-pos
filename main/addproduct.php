<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="saveproduct.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Product</h4></center>
<hr>
<div id="ac">
<span>Category: </span>
<select name="name" style="width:265px; height:30px; margin-left:-5px;" >
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM category");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['cname']; ?></option>
	<?php
	}
	?>
</select><br>
<span>Brand Name : </span>
<input type="text" style="width:265px; height:30px;" name="code" Required/><br>
<span>Model Name : </span><input type="text" style="width:265px; height:30px;" name="gen" Required/><br>
<span>Date Arrival: </span><input type="date" style="width:265px; height:30px;" name="date_arrival" /><br>
<span>Colombo discount : </span><input type="number" id="txt32" min="0" max="100" style="width:265px; height:30px;" name="cdisc" onkeyup="sum();" Required><br>
<span>Colombo Sale Price : </span><input type="number" id="txt2"  style="width:265px; height:30px;" name="o_price" onkeyup="sum();" Required><br>

<span>Bought Price : </span><input type="text" id="txt55" style="width:265px; height:30px;" name="b_price" onkeyup="sum();" readonly><br>
<span>Selling Price : </span><input type="number" id="txt19" min="0" style="width:265px; height:30px;" name="price" onkeyup="sum();" readonly><br>

<span>Profit : </span><input type="text" id="txt3" style="width:265px; height:30px;" min="0" name="profit" readonly><br>
<span>Supplier : </span>
<select name="supplier"  style="width:265px; height:30px; margin-left:-5px;" >
	<?php
	include('../connect.php');
	$result = $db->prepare("SELECT * FROM supliers");
		$result->bindParam(':userid', $res);
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
		<option><?php echo $row['suplier_name']; ?></option>
	<?php
	}
	?>
</select><br>
<span>Quantity : </span><input type="number" style="width:265px; height:30px;" min="0" id="txt11" onkeyup="sum();" name="qty" Required ><br>
<span></span><input type="hidden" style="width:265px; height:30px;" id="txt22" name="qty_sold" Required ><br>
<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
