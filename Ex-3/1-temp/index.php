<?php
function f2c($temp)
{
	$c=5/9*($temp-32);
	return $c;
}
function f2k($temp)
{
	$k=f2c($temp) + 273;
	return $k;
}
function c2f($temp)
{
	$f=$temp*9/5+32;
	return $f;
}
function c2k($temp)
{
	$k=$temp+273;
	return $k;
}
function k2f($temp)
{
	$f=9/5*($temp-273)+32;
	return $f;
}
function k2c($temp)
{
	$c=$temp-273;
	return $c;
}?>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ravula Pranay Kumar Reddy">
    <link rel="icon" href="https://rpranaykumarreddy.github.io/RPKR.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://rpranaykumarreddy.github.io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://rpranaykumarreddy.github.io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://rpranaykumarreddy.github.io/favicon-16x16.png">

    <title>Temperature converter</title>
    <style>
* {
    padding: 0px;
    margin: 0px;
}

#total{
    display: block;
    margin: 7.5vh auto 7.5vh auto;
    min-height: 75vh;
    height: auto;
    padding: 25px;
    text-align: center;
    width: 75vw;
    max-width: 700px;
    background-color: #eee8d5;}
</style>
</head>

<body>
<div id="total">
    <h1>Temperature converter</h1>
<?php
$st_num=0;
if(isset($_POST['btn'])){
    $st_ty=$_POST['type'];
    $st_num=$_POST['temp'];
}
?>
    <br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p>Input Value</p>
        <input type="number" name="temp" value="<?php echo $st_num; ?>">
        <select name="type">
            <option value="celsius"  <?php if (isset($st_ty) && $st_ty=="celsius") echo "selected";?>>Celsius</option>
            <option value="fahrenheit" <?php if (isset($st_ty) && $st_ty=="fahrenheit") echo "selected";?>>Fahrenheit</option>
            <option value="kelvin" <?php if (isset($st_ty) && $st_ty=="kelvin") echo "selected";?>> Kelvin</option>
        </select>
        <br><br>   
        <input type="submit" name="btn" value="Convert">
        <br><br><br>            
<?php

if(isset($_POST['btn'])){
    $type=$_POST['type'];
    $temp=$_POST['temp'];

    if ($type=='fahrenheit') 
    {
        $kelvin=f2k($temp);
        $celsius=f2c($temp);
        echo "$temp Fahrenheit = $kelvin Kelvin <br>$temp Fahrenheit = $celsius Celsius";
       
    }
    if ($type=='celsius') 
    {   
        $kelvin=c2k($temp);
        $fahrenheit=c2f($temp);
	    echo "$temp Celsius   = $kelvin Kelvin <br>$temp Celsius  = $fahrenheit Fahrenheit ";
    }
    if ($type=='kelvin') 
    {
        $fahrenheit=k2f($temp);
        $celsius=k2c($temp);
        echo "$temp Kelvin  = $fahrenheit Fahrenheit <br>$temp Kelvin  = $celsius Celsius";
    } 
}
?>
    </form>
    
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" target="_blank">R Pranay Kumar Reddy</a></p>
</div>
</body>

</html>