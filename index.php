<html>
<head>
<meta charset="utf-8">
<title>Color Generator</title>
</head>
<center>

<?
$one = rand(0,9); //1 number
$two = rand(0,9); //2 number
$three = rand(0,9); //3 number
$four = rand(0,9); //4 number
$five = rand(0,9); //5 number
$six = rand(0,9); //6 number

$color = $one.$two.$three.$four.$five.$six; //uniting colors

echo '#'.$color; //showing color id
?>

<style>

.block{
width: 100px;
height: 100px;
	
	background-color: #<? echo $color; //setting as backround ?>;
}
</style>
<div class='block'>
</div>

<h1><a href="#" onclick="window.location.href=window.location.href;">New Color</a></h1>

</center>


</html>
