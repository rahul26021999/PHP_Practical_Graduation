<?php
$num_err="";
if(isset($_GET['num1']))
{
    if($_GET['num1']=="")
    {
        $num_err=" Enter the number";
    }
}
    function ques3($num)
    {
        $i=2;
        while($i<$num)
        {
            if($num%$i==0){
                return false;
            }
            $i++;
        }
        return true;
    }
    
    echo "<hr><div>Check whether the given number is prime or not.</div><hr>";
    echo "
    <form>
    <input type='hidden' name='id' value='3'>
    <input type='number' name='num1' placeholder='Enter the number'><span class='error'><sup>&nbsp*$num_err</sup></span>
    <br>
    <input type='submit' value='Check'>
</form>";
if(isset($_GET['num1']))
    {
        if($_GET['num1']!="")
        {
            echo "<div id='output'><h3>Output</h3><br>";
            if(ques3($_GET['num1']))
            {
                echo "<div>".$_GET['num1']." is a prime number</div>";
            }
            else{
                echo "<div>".$_GET['num1']." is not a prime numner</div>";
            }
            echo"</div>";
        }
    }
?>