<?php
$num_err="";
if(isset($_GET['num1']))
{
    if($_GET['num1']=="")
    {
        $num_err=" Enter the number";
    }
}
function ques5($num)
{
    $sum=0;
    for($i=0,$j=0;$i<$num;$j++)
    {
        if($j%2!=0)
        {
            $i++;
            $sum=$sum+$j;
        }
    }
    echo "sum of ".$_GET['num1']." odd number is :"."$sum";

}

    echo '<hr><div>Finds out the sum of first n odd numbers.</div><hr>';
    echo "
    <form>
    <input type='hidden' name='id' value='5'>
    <input type='number' name='num1' placeholder='Enter the number'><span class='error'><sup>&nbsp*$num_err</sup></span>
    <br>
    <input type='submit' value='Calculate'>
</form>";
if(isset($_GET['num1']))
    {
        if($_GET['num1']!="")
        {
            echo "<div id='output'><h3>Output</h3><br>";
            ques5($_GET['num1']);
            echo"</div>";
        }
    }
?>
