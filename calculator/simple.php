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

    <title>Simple Calculator</title>
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
</style>
</head>
<body>
<div id="total">

<h1>Simple Calculator</h1><br><br>
<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Primary Number:<br>
    <input type ="number" name="Pnum" value="1"><br><br>
    Secondary Number: </br>
    <input type ="number" name="Snum" value="1"><br><br>
    <input type ="submit" name="Fsum" value ="factorial">
    <input type ="submit" name="Ssum" value ="square">
    <input type ="submit" name="Psum" value =" + ">
    <input type ="submit" name="Misum" value =" - ">
    <input type ="submit" name="Msum" value =" * ">
    <input type ="submit" name="Dsum" value =" / ">
    </form>
    <br><br><br>
    <h4>Output</h4>
<?php
if (isset($_POST['Fsum']))
{
    $Pn= $_POST['Pnum'];
    $Fac= 1;
    for($i=1;$i<=$Pn;$i++)
    {
        $Fac=$Fac*$i;
    }
    echo "The factorial of {$Pn} is {$Fac} ";
    echo "<br>";
    echo "<a href =\"calculator.php\">Clear</a>";
}
elseif(isset($_POST['Ssum']))
{
    $Pn = $_POST['Pnum'];
    $out = $Pn * $Pn;
    echo "The square of {$Pn} is {$out}";
    echo "<br>";
    echo "<a href =\"calculator.php\">Clear</a>";
}
elseif(isset($_POST['Psum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn + $Sn;
    echo "The sum of {$Pn} & {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"calculator.php\">Clear</a>";
}
elseif(isset($_POST['Misum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn - $Sn;
    echo "The difference between {$Pn} & {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"calculator.php\">Clear</a>";
}
elseif(isset($_POST['Msum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn * $Sn;
    echo "The product of {$Pn} & {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"calculator.php\">Clear</a>";
}
elseif(isset($_POST['Dsum']))
{
    $Pn = $_POST['Pnum'];
    $Sn = $_POST['Snum'];
    $out = $Pn / $Sn;
    echo "The division  of {$Pn} by {$Sn} is {$out}";
    echo "<br>";
    echo "<a href =\"calculator.php\">Clear</a>";
}?>
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" target="_blank">R Pranay Kumar Reddy</a></p>

    </div>



</body>

</html>