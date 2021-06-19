<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ravula Pranay Kumar Reddy">
    <link rel="icon" href="https://rpranaykumarreddy.github.io/RPKR.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://rpranaykumarreddy.github.io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://rpranaykumarreddy.github.io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://rpranaykumarreddy.github.io/favicon-16x16.png">

    <title>2-value Calculator</title>
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
input{padding:6px;}
[type="submit"]{
    font-size: 20px;
    font-weight:bold;
}
</style>
</head>
<body>
<div id="total">
<?php

$st_num1=10;
$st_num2=10;
if(isset($_POST['Psum']) || isset($_POST['Misum'])||isset($_POST['Msum'])||isset($_POST['Dsum'])){
    $st_num1=$_POST['Pnum'];
    $st_num2=$_POST['Snum'];
}
?>
<h1>2-value Calculator</h1><br><br>
<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Primary Number:<br>
    <input type ="number" name="Pnum" value="<?php echo $st_num1 ?>"><br><br>
    Secondary Number: </br>
    <input type ="number" name="Snum" value="<?php echo $st_num2 ?>"><br><br>
    <input type ="submit" name="Psum" value =" + ">
    <input type ="submit" name="Misum" value =" - ">
    <input type ="submit" name="Msum" value =" * ">
    <input type ="submit" name="Dsum" value =" / ">
    </form>
    <br><br><br>
    <h4>Output</h4>
<?php
if(isset($_POST['Psum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn + $Sn;
    echo "The sum of {$Pn} & {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"index.php\">Clear</a>";
}
elseif(isset($_POST['Misum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn - $Sn;
    echo "The difference between {$Pn} & {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"index.php\">Clear</a>";
}
elseif(isset($_POST['Msum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn * $Sn;
    echo "The product of {$Pn} & {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"index.php\">Clear</a>";
}
elseif(isset($_POST['Dsum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn / $Sn;
    echo "The division  of {$Pn} by {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"index.php\">Clear</a>";
}?>
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" target="_blank">R Pranay Kumar Reddy</a></p>

    </div>



</body>

</html>