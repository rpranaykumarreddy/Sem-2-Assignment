<?php
$currentValue = 0;
$input = [];
function getInputAsString($values){
    $o = "";
    foreach ($values as $value){
        $o .= $value;
    }
    return $o;
}

function calculateInput($userInput){
    $arr = [];
    $char = "";
    foreach ($userInput as $num){
        if(is_numeric($num) || $num == "."){$char .= $num;}
        else if(!is_numeric($num)){
            if(!empty($char)){
                $arr[] = $char;$char = "";
            }
            $arr[] = $num;
        }
    }
    if(!empty($char)){
        $arr[] = $char;
    }
    $current = 0;
    $action = null;
    for($i=0; $i<= count($arr)-1; $i++){
        if(is_numeric($arr[$i])){
            if($action){
                switch($action){
                    case "+":
                        $current = $current + $arr[$i];
                        break;
                    case "-":
                        $current = $current - $arr[$i];
                        break;
                    case "x":
                        $current = $current * $arr[$i];
                        break;
                    case "/":
                        $current = $current / $arr[$i];
                        break;
                }/*
                if($action == "+"){
                    $current = $current + $arr[$i];
                }
                if($action == "-"){
                    $current = $current - $arr[$i];
                }
                if($action == "x"){
                    $current = $current * $arr[$i];
                }
                if($action == "/"){
                    $current = $current / $arr[$i];
                }*/
                $action = null;
            }else{
                if($current == 0){
                    $current = $arr[$i];
                }
            }
        }else{
            $action = $arr[$i];
        }
    }
    return $current;

}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['input'])){
        $input = json_decode($_POST['input']);
    }
    if(isset($_POST)){
        foreach ($_POST as $key=>$value){
            if($key == 'equal'){
               $currentValue = calculateInput($input);
               $input = [];
               $input[] = $currentValue;
            }elseif($key == "ce"){
                array_pop($input);
            }elseif($key == "c"){
                $input = [];
                $currentValue = 0;
            }elseif($key == "back"){
                $lastPointer = count($input) -1;
                if(is_numeric($input[$lastPointer])){
                    array_pop($input);
                }
            }elseif($key != 'input'){
                $input[] = $value;
            }
        }
    }
    if(getInputAsString($input)==""){
        $currentValue =0;}else{
    $currentValue =getInputAsString($input);}
}
?>

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

<title>Advanced Calculator</title>
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

    [type="submit"]{
        font-size: 25px;
        font-weight:bolder;
        height:50px;
        width:50px;}
</style>
</head>

<body>
    <div id="total">
    <h1>Advanced Calculator</h1>
    <div>
        <form method="post">
            <input type="hidden" name="input" value='<?php echo json_encode($input);?>' />
            <p style="display:none;"><?php echo getInputAsString($input);?></p>
            <br><br>
            <input type="text" style="width:210px; height: 30px; font-size: 20px; padding: 15px 5px; box-sizing: border-box;" value="<?php echo $currentValue;?>"/>
            <br><br>
            <div style="display:flex;justify-content:center">
            <table>
                <tr>
                    <td><input type="submit" name="ce" value="CE" /></td>
                    <td><input type="submit" name="c" value="C" /></td>
                    <td><button type="submit" name="back" value="back">&#8592;</button></td>
                    <td><button type="submit" name="divide" value="/">&#247;</button></td>
                </tr>
                <tr>
                    <td><input type="submit" name="7" value="7" /></td>
                    <td><input type="submit" name="8" value="8" /></td>
                    <td><input type="submit" name="9" value="9" /></td>
                    <td><input type="submit" name="multiply" value="x" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="4" value="4" /></td>
                    <td><input type="submit" name="5" value="5" /></td>
                    <td><input type="submit" name="6" value="6" /></td>
                    <td><input type="submit" name="minus" value="-" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="1" value="1" /></td>
                    <td><input type="submit" name="2" value="2" /></td>
                    <td><input type="submit" name="3" value="3" /></td>
                    <td><input type="submit" name="add" value="+" /></td>
                </tr>
                <tr>
                    <td><button type="submit" name="plusminus" value="plusminus">&#177;</button></td>
                    <td><input type="submit" name="zero" value="0" /></td>
                    <td><input type="submit" name="." value="." /></td>
                    <td><input type="submit" name="equal" value="=" /></td>
                </tr>
            </table>
            </div>
        </form>
    </div>
    
<br><br><br>
<p style="text-align:center;"> Scripted by <a href="https://github.com/rpranaykumarreddy" target="_blank">R Pranay Kumar Reddy</a></p>

    
    </div>
</body>

</html>