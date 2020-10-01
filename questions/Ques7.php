<?php
$num_err="";
if(isset($_GET['num1']))
{
    if($_GET['num1']=="")
    {
        $num_err=" Enter the number";
    }
}
function ques7($n)
{
    if($n==0)
    return 0;
    else if($n==1)
    return 1;
    else{
        return (ques7($n-1)+ques7($n-2));
    }
}

    echo '<hr><div>Print Fibonacci series</div><hr>';
    echo "
    <form>
    <input type='hidden' name='id' value='7'>
    <input type='number' name='num1' placeholder='Enter the number'><span class='error'><sup>&nbsp*$num_err</sup></span>
    <br>
    <input type='submit' value='Find'>
</form>";
if(isset($_GET['num1']))
    {
        if($_GET['num1']!="")
        {
            echo "<div id='output'><h3>Output</h3><br>";
            for($i=0;$i<=$_GET['num1'];$i++)
            {
                echo ques7($i)."<br>";
            }
            echo"</div>";
        }
    }
?>
