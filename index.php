<!DOCTYPE = html>
<html>

<header>
<title> Calculator </title>
</header>


<body>

<div>
	<h1>Calculator</h1>
</div>


<div>
<?php 
	if(isset($_GET["submit"]) && $_GET["v1"] == "") {
		$colorv1 = "red";
		$placeholder = "enter numeric value";
		$v1 = "";
		}
		
	else {
	}
	if(isset($_GET["submit"]) && $_GET["v2"] == ""){
		$colorv2 = "red";
		$placeholder = "enter numeric value";
		$v2 = "";
		}
		
	else {
	}
	?>


	<form method="get" action="index.php">
		<input name = "v1" STYLE= "background-color:<?echo $colorv1;?>" placeholder="<?echo $placeholder;?>"/>
		<select name="action">
			<option value="plus">+</option>
			<option value="minus">-</option>
		</select>
		<input name = "v2" STYLE= "background-color:<?echo $colorv2;?>" placeholder="<?echo $placeholder;?>"/>
		<input type="submit" name="submit" value="Submit"/>
		
	</form>
	<form method="get" action="index.php">
		<input type="submit" name= "reset"/>
	</form>


</div>

<p>
<?php
	$color = "green";
	
	if(isset($_GET["submit"]) && $_GET["v1"] <> ""  && $_GET["v2"] <> "") {
		$v1 = $_GET["v1"];
		$v2 = $_GET["v2"];
		
		if($_GET["action"] == "plus"){
			$result = $v1 + $v2;
			echo "<h1>$v1 + $v2 ";
		}
		else {
			$result = $v1 - $v2;
			echo "$v1 - $v2 ";
		}
		echo " = $result</h1>";
	}


?>
</p>

</body>




</html>