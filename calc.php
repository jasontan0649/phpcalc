<html>
<head>
<title>Calculator</title>
</head>
<body>
<h1>This is a calculator base on php</h1>
<form method="post" attribute="post" action="calc.php">
<b>Number:
<input type="text" id="1st" name="1st"></b></br>
<b>Another number:
<input type="text" id="2nd" name="2nd"></b></br>
<b>Choose function on below:</b></br>
<select name="func">
<option value="add" id="add">Add</option>
<option value="substract" id="substract">Substract</option>
<option value="times" id="times">Times</option>
<option value="divide" id="divide">Divide</option>
<option value="power" id="power">Power</option>
<option value="root" id="root">Root</option>
</select>
<button type="submit" name="submit" id="submit" value="submit">Count</button>
</form>
<p>The answer is:
<?php
if(!empty($_POST['1st']) && !empty($_POST['2nd']))  
{
	$one = $_POST['1st'];
	$two = $_POST['2nd'];
	$func = $_POST["func"];
	$powertoroot = 1 / $two;

	switch($func)
	{
		case "add";
		echo $one + $two;
		break;
		case "substract";
		echo $one - $two;
		break;
		case "times";
		echo $one * $two;
		break;
		case "divide";
		echo $one / $two;
		break;
		case "power";
		echo (pow($one,$two));
		break;
		case "root";
		echo (pow($one,$powertoroot));
		break;
	}
}
?>
</p>
</body>
</html>
