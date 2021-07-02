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
</style>
</head>

<body>
<div id="total">
    <h1>Registration</h1>
<?php
$id='';
$name='';
$mail='';
$deptt='';

if(isset($_POST['btn'])){
$st_ty=$_POST['dept'];

$server="localhost";
$username="root";
$password="";
$DB="assignment";
$con=mysqli_connect($server,$username,$password,$DB);
if(!$con)
{die("connection to this database failed due to". mysqli_connect_error());}else{
$id=$_POST['id'];
$name=$_POST['name'];
$mail=$_POST['email'];
$deptt=$_POST['dept'];

$sql = "SELECT id, fullname, email,dept FROM reg WHERE id='$id'";
$mach = mysqli_query($con, $sql);

$sql = "INSERT INTO reg (`id`, `fullname`, `email`, `dept`) VALUES
('$id', '$name', '$mail', '$deptt');";

if (mysqli_num_rows($mach) > 0) {
  while($row = mysqli_fetch_assoc($mach)) {
    echo "The Roll No choosen by you is already taken by ". $row["fullname"] ."<br>";
  }
}else if (mysqli_query($con, $sql)) {
  echo "your Registration is successful";
} else {
  echo "Error: ". mysqli_error($con);
}
}
mysqli_close($con);
}else{
    echo("");
}
?>
    <br><br>
    <form style="text-align: left;margin-left:6%;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p>Roll No<span style="color:red;">*</span></p>
    <input type="text" name="id" value="<?php echo $id ?>"><br><br>
    <p>Full Name<span style="color:red;">*</span></p>
    <input type="text" name="name" value="<?php echo $name ?>"><br><br>
    <p>E-Mail address<span style="color:red;">*</span></p>
    <input type="text" name="email" value="<?php echo $mail ?>"><br><br>
    <p>Department<span style="color:red;">*</span></p>
    <select name="dept">
            <option value="CSE" <?php if (isset($st_ty) && $st_ty=="CSE") echo "selected";?>>CSE</option>
            <option value="ECE" <?php if (isset($st_ty) && $st_ty=="ECE") echo "selected";?>>ECE</option>
            <option value="IT" <?php if (isset($st_ty) && $st_ty=="IT") echo "selected";?>>IT</option>
    </select><br><br><br>
    <div  style="text-align: center;">
<input type="submit" name="btn" value="Submit"></div>
    </form>
    
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" target="_blank">R Pranay Kumar Reddy</a></p>
</div>
</body>

</html>