<?php
include('../connect.php');
if($_POST['id'])
{
	$id=$_POST['id'];
		
	$stmt = $DB_con->prepare("SELECT * FROM products WHERE product_name=:id");
	$stmt->execute(array(':id' => $id));
	?><option selected="selected">Select State :</option><?php
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        	<option value="<?php echo $row['product_code']; ?>"><?php echo $row['product_code']; ?></option>
        <?php
	}
}
?>