<!DOCTYPE html>
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

    <title>Registration</title>
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
    table{
    border:2px solid #000;
    width:90%;
    margin:0px 5%;
    border-collapse: collapse;
    }
    th,td{
        border-collapse:collapse;
    border:2px solid #000;
    }
</style>
</head>

<body>
<div id="total">
    <h1>Registration</h1>
    <br>
    <br>
    <br>
    <br>
<?php 
$server="localhost";
$username="root";
$password="";
$DB="assignment";
$con=mysqli_connect($server,$username,$password,$DB);
if(!$con)
{die("connection to this database failed due to". mysqli_connect_error());}else{
$sql = "SELECT id, fullname, email, dept FROM reg";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table ><tr><th>ID</th><th>Full Name</th><th>E-mail</th><th>Dept</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["id"]. "</td><td>". $row["fullname"]. "</td><td>" . $row["email"] ."</td><td>" . $row["dept"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}

$con->close();
?>

    
    
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" target="_blank">R Pranay Kumar Reddy</a></p>
</div>
</body>

</html>