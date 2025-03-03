<html>
    <head>
        <title>Print Prime Numbers</title>
</head>
<body>
<form>
    <label>Enter first number</label>
    <input type="number" name="primenumberone">
    <label>Enter second number</label>
    <input type="number" name="primenumbertwo">
    <input type="submit" value="submit" name="submitForm"></br></br>
</form>
</body></html>
<?php
if(isset($_GET["submitForm"]))
{
    $num1=$_GET['primenumberone'];
    $num2=$_GET['primenumbertwo'];
    echo'Prime Numbers between'.$num1.'to'.$num2.'are:</br>';
    for($i=$num1;$i<=$num2;$i++)
    {
        $b=0;
        for($j=1;$j<=$i;$j++){
            if($i%$j==0)
            {
                $b=$b+1;
            }
        }
        if($b==2)
        {
            echo''.$i;
        }
    }
}
?>