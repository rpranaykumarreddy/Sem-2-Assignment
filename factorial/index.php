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

<title>Calculate Factorial</title>  
</head> 
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
<body>  
    <div id="total">
    <h1>Calculate Factorial</h1>
    <br><br>
    
<?php $st_num=0; if(isset($_POST['submit'])){$st_num=$_POST['input'];}?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">  
    Enter the Number:<br>  
    <input type="number" name="input" id="input" value="<?php echo $st_num; ?>">
    <br><br>
    <input type="submit" name="submit" value="Submit" />  
</form>  
<br><br><br><br>
<?php   
if (isset($_POST['submit']))
{
    $fact = 1;  
    $number = $_POST['input'];  
    for ($i = 1; $i <= $number; $i++){         
        $fact = $fact * $i;  
    } 
    echo "Factorial of $number : $fact";  
} 
?> 
<br><br><br>  
<br><br><br>  
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" tarPOST="_blank">R Pranay Kumar Reddy</a></p>

</div>
</body>  
</html>