<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            flex-direction:column;
         min-height:500px;
         align-items:center;
        }
        .head{
            font-size:20px;
            font-family:fantacy;
      margin-top:40px;        
        }
        tr td{
            border:1px solid black;
        width:200px;
    display:flex;
justify-content:center;
margin-bottom:10px;
padding:5px;        
}
a{
    color:black;
}
    </style>
</head>
<body>
<?php
 $num1=$_POST['primenumberone'];
 $num2=$_POST['primenumbertwo'];
 echo'<div class="head">Prime Numbers between '.$num1.' to '.$num2.' are:</div></br>';
if($_POST["submitForm"])
{
    for($i=$num1;$i<=$num2;$i++)
    {
        $b=0;
        $count=1;
        for($j=1;$j<=$i;$j++){
            if($i%$j==0)
            {
                $b=$b+1;
            }
            $count=$count++;
        }
        if($b==2)
        {
            if($count==1)
            {
                echo'<table><tr><td> '.$i. '</td></tr></table>';
            }
        }
    }
}
echo'<a href="index.html">Go Back</a>'
?>
    
    </body>
</html>