<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple calculator in php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="con">
<div class="hd">
    <h1>simple calculator in php</h1>
</div>
<div class="form">
<form method="POST">
    <input type="number" value="" name="num1" placeholder="enter number one">
    <br>
    <br>
    <input type="number" value="" name="num2" placeholder="enter number two">
    <br>
    <br>
    <select name="operation" id="">
        <option value="add">ADD</option>
        <option value="mul">MUL</option>
        <option value="div">DIV</option>
        <option value="sub">SUB</option>
    </select>
    <br>
    <br>
<input type="submit" name="submit">
</form>

</div>
<div class="show_data">
    <p>
    <?php
       if(isset($_POST['submit'])){
           $num1=$_POST['num1'];
           $num2=$_POST['num2'];
          // echo $num1 . $num2 ;

           $operation=$_POST['operation'];
           switch($operation){
               case 'add':
                   $sum= $num1+$num2;
                   echo "the addition of two number is " . $sum ;
                   break;
               case 'mul':
                   $mul= $num1*$num2;
                   echo "the multipliction of two number is " . $mul ;
                   break;
               case 'sub':
                   $sub= $num1-$num2;
                   echo "the substraction of two number is " . $sub ;
                   break;
               case 'div':
                   $div= $num1/$num2;
                   echo "the division of two number is " . $div ;
                   break;
           }
       }
    ?>
    </p>
</div>

</div>    

</body>
</html>