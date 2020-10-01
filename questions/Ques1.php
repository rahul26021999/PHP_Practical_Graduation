<?php
    $first_num=$second_num=$third_num="";
    $first_num_err=$second_num_err=$third_num_err="";
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']))
    {
        $first_num=$_GET['num1'];
        $second_num=$_GET['num2'];
        $third_num=$_GET['num3'];

        if($first_num=="")
        $first_num_err="&nbspEnter First Number";
        
        if($second_num=="")
        $second_num_err="&nbspEnter Second Number";

        if($third_num=="")
        $third_num_err="&nbspEnter Third Number";

        if($first_num!="" && $second_num!="" && $third_num!="")
        {
            $first_num=$second_num=$third_num="";
        }
    
    }
        
    function ques1($num1,$num2,$num3)
    {

        $largest=$num1;
        if($largest<$num2)
        $largest=$num2;
        if($largest<$num3)
        $largest=$num3;

        echo "<br><div>Largest number is :$largest</div>";

        
    }
    echo "<hr><div>Compare three integers and print the largest number</div><hr>";
    echo "<form action='rahul.php'>
    <input type='hidden' name='id' value='1'>
    <input type='number' name='num1' placeholder='Enter the number' value=$first_num><span class='error'><sup>&nbsp*$first_num_err</sup></span>
    <br>
    <input type='number' name='num2' placeholder='Enter the number' value=$second_num><span class='error'><Sup>&nbsp*$second_num_err</Sup></span>
    <br>
    <input type='number' name='num3' placeholder='Enter the number' value=$third_num><span class='error'><Sup>&nbsp*$third_num_err</Sup></span>
    <br>
    <input type='submit' value='Check'>
</form>";
    if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3']))
    {
        if($_GET['num1']!="" && $_GET['num2']!="" && $_GET['num3']!="")
        {
            echo '<div id="output"><h3>Output</h3>';
            ques1($_GET['num1'],$_GET['num2'],$_GET['num3']);
            echo'</div>';
        }
    }
    
?>
