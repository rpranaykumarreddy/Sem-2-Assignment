<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ravula Pranay Kumar Reddy">
    <link rel="icon" href="https://rpranaykumarreddy.github.io/RPKR.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://rpranaykumarreddy.github.io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://rpranaykumarreddy.github.io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://rpranaykumarreddy.github.io/favicon-16x16.png">

    <title>Factorial & Square Calculator</title>
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
    
<h1>Factorial & Square Calculator</h1>
    <br><br>
<?php $st_num=0; if(isset($_POST['submit'])){$st_num=$_POST['num'];}?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>Enter Number : </p>
        <input type="number" name="num" value="<?php echo $st_num; ?>"><br>
        <br>
        <input type="submit" name="submit" value="Factorial">
        <input type="submit" name="submit" value="Square">
        <br>
    </form>
<br><br><br><br>
<?php
if (isset($_POST['submit']))
{
    $num=$_POST['num'];
    if($_POST['submit']=='Factorial')
    {
        $fact = 1;
        $number = $_POST['num']; 
    for ($i = 1; $i <= $number; $i++){         
        $fact = $fact * $i;  
    } 
    echo "Factorial of $number : $fact"; 
    }
    if($_POST['submit']=='Square')
    {$out=$num*$num;
        echo "Square of $num: $out";
    }
}
?>
</div>


    
</body>
</html>