<?php
    $num_err="";
    if(isset($_GET['num1']))
    {
        if($_GET['num1']=="")
        {
            $num_err=" Enter the number";
        }
    }
    function ques8($num)
    {
        echo "<pre>";
        for($i=0;$i<$num;$i++)
        {
            for($j=0;$j<=$i;$j++){
                echo '* ';
            }
            echo '<br/>';
        }
        echo "</pre>";

    }
    echo '<hr><div>Print the given pattern for any number</div><hr>';
    echo '<pre>
*
* * 
* * *</pre>';
    echo "<form action='rahul.php'>
    <input type='hidden' name='id' value='8'>
    <input type='number' name='num1' placeholder='Enter the number'><span class='error'><sup>&nbsp*$num_err</sup></span>
    <br>
    <input type='submit' value='Print'>
</form>";
    if(isset($_GET['num1']))
    {
        if($_GET['num1']!="")
        {
            echo "<div id='output'><h3>Output</h3><br>";
            ques8($_GET['num1']);
            echo"</div>";
        }
    }
?>
