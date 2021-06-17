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

    <title>Fibonacci series</title>
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

<?php $st_num=10;if(isset($_POST['submit'])){$st_num=$_POST['number'];}?>

    <h1>Fibonacci series</h1><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        Enter No. of Terms :<br>
        <input type="number" name="number" id="number" value="<?php echo $st_num; ?>"><br><br>
        <input type="submit" name="submit" value="Submit" />  
    </form><br><br><br>
<?php   
if (isset($_POST['submit']))
{
$num = $_POST['number'];  
echo "Fibonacci series:<br>";  
function series($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){
        return 1;
    }  else {  
        return (series($num-1) + series($num-2));
    }   
}   echo "<p>";
for ($i = 0; $i < $num; $i++){  
echo series($i);  
if((($i+1)%5)==0){echo"<br>";}else{
    echo "&#160;&#160;&#160;&#160;&#160;";
}  
}
echo "</p>";
} 
?> 

<br><br><br>  
<br><br><br>  
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" tarPOST="_blank">R Pranay Kumar Reddy</a></p>



</div>   
</body>
</html>