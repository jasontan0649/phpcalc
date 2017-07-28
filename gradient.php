<html>
<head>
<title>Y=mx+c Calculator</title>
</head>
<body>
<h1>This is a y=mx+c calculator</h1>
<form method="post" attribute="post" action="gradient.php">
<b>x:
<input type="text" id="x" name="x"></b></br>
<b>y:
<input type="text" id="y" name="y"></b></br>
<b>Gradient Numerator:
<input type="text" id="mn" name="mn"></b></br>
<b>Gradient Denominator:
<input type="text" id="md" name="md"></b></br>
<button type="submit" name="submit" id="submit" value="submit">Count</button>
</form>
<h6>Please type 1 in Gradient Denominator if the number is in whole number or decimal form.Gradient will be shown in decimal form</h6>
<p>The equation is:
<?php
if(!empty($_POST['x']) && !empty($_POST['y']) && !empty($_POST['md'])&& !empty($_POST['mn']))  
{
	$x = $_POST['x'];
	$y = $_POST['y'];
	$mn = $_POST["mn"];
	$md = $_POST["md"];
	$m = $mn / $md;
    $mx = $m * $x;
    $c = $y - $mx;

    echo "y=";
    echo $m;
    echo "x+";
    echo $c;
}
?>
</p>
</body>
</html>
