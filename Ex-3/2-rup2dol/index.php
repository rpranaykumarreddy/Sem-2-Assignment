<?php
function r2d($in)
{
	$d=$in/75;
	return $d;
}
function d2r($in)
{
	$r=$in*75;
	return $r;
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

    <title>Rupee & Dollar converter</title>
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
    <h1>Rupee & Dollar converter</h1>
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
    
        <input type="number" name="temp" value="<?php echo $st_num; ?>"  style="max-width: 100px;">
        <select name="type">
            <option value="rupee"  <?php if (isset($st_ty) && $st_ty=="rupee") echo "selected";?>>rupee</option>
            <option value="dollar" <?php if (isset($st_ty) && $st_ty=="dollar") echo "selected";?>>dollar</option>
            </select>
        <br><br>   
        <input type="submit" name="btn" value="Convert">
        <br><br><br>            
<?php

if(isset($_POST['btn'])){
    $type=$_POST['type'];
    $temp=$_POST['temp'];

    if ($type=='rupee') 
    {
        $dollar=r2d($temp);
        echo "$temp Rupee = $dollar Dollar";
       
    }
    if ($type=='dollar') 
    {   
        $rupee=d2r($temp);
	    echo "$temp Dollar = $rupee Rupee";
    }
}
?>
    </form>
    
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" target="_blank">R Pranay Kumar Reddy</a></p>
</div>
</body>

</html>