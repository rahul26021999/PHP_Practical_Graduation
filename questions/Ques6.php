<?php
$num_err="";
if(isset($_GET['num1']))
{
    if($_GET['num1']=="")
    {
        $num_err=" Enter the string";
    }
}
function ques6($text)
{
    $text=str_replace(" ","",$text);
    if($text===strrev($text))
    {
        return true;
    }
    else{
        return false;
    }

}

    echo '<hr><div>Checks whether a passed string is palindrome or not? </div><hr>';
    echo "
    <form>
    <input type='hidden' name='id' value='6'>
    <input type='text' name='num1' placeholder='Enter the text'><span class='error'><sup>&nbsp*$num_err</sup></span>
    <br>
    <input type='submit' value='Check'>
</form>";
if(isset($_GET['num1']))
    {
        if($_GET['num1']!="")
        {
            echo "<div id='output'><h3>Output</h3><br>";
            if(ques6($_GET['num1']))
            {
                echo "It is a palindrome";
            }
            else{
                echo "It is not a palindrome";
            }
            echo"</div>";
        }
    }
?>
