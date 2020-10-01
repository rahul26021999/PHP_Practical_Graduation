<?php
$num_err="";
if(isset($_GET['num1']))
{
    if($_GET['num1']=="")
    {
        $num_err=" Enter the number";
    }
}
function ques4($num)
{
    for($i=0,$j=0;$i<$num;$j++)
    {
        if($j%2==0)
        {
            echo "$j <br>";
            $i++;
        }
    }
}

    echo '<hr><div>Print first n even numbers.</div><hr>';
    echo "
    <form>
    <input type='hidden' name='id' value='4'>
    <input type='number' name='num1' placeholder='Enter the number'><span class='error'><sup>&nbsp*$num_err</sup></span>
    <br>
    <input type='submit' value='Print'>
</form>";
if(isset($_GET['num1']))
    {
        if($_GET['num1']!="")
        {
            echo "<div id='output'><h3>Output</h3><br>";
            ques4($_GET['num1']);
            echo"</div>";
        }
    }
?>
