<?php
$num_err="";
if(isset($_GET['num1']))
{
    if($_GET['num1']=="")
    {
        $num_err=" Enter the number";
    }
}
 function ques2($num)
 {
     $fact=1;
         for($i=$num;$i>0;$i--)
         {
             $fact=$fact*$i;
         }
    echo "<div>Factorial of $num is : $fact</div>";
     
 }
    echo "<hr><div>Factorial of a number</div><hr>";
    echo "
    <form action='rahul.php'>
    <input type='hidden' name='id' value='2'>
    <input type='number' name='num1' placeholder='Enter the number'><span class='error'><sup>&nbsp*$num_err</sup></span>
    <br>
    <input type='submit' value='find'>
</form>";
if(isset($_GET['num1']))
    {
        if($_GET['num1']!="")
        {
            echo "<div id='output'><h3>Output</h3><br>";
            ques2($_GET['num1']);
            echo"</div>";
        }
    }
?>