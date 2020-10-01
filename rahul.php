<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>myphp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="rahul.css" />
</head>

<body>
    <div>
    </div>
    <header>
        <h1>Keshav Mahavidhyalaya</h1>
        <ul>
            <li><a href="../">Previous</a></li>
            <li><a href="rahul.php">Home</a></li>
            <li><a href="../dashboard">Dashboard</a></li>
            <li><a href="../collegework">College work</a></li>
        </ul>
    </header>
    <div id="content">
        <div id="left">
            <ul>
                <?php
                    for($i=1;$i<16;$i++)
                    {
                        echo "<li><a href='rahul.php?id=$i'><span>Ques $i</span></a></li>";    
                    }
                ?>
            </ul>
        </div>
        <div id="right">
            <div>
                <?php

                    if(isset($_GET['id']))
                    {
                        echo '<div id="form_wrap">';
                        $ch=$_GET['id'];     
                        switch($ch)
                        {
                            case 1:
                                include('questions/Ques1.php');
                                break;
                            case 2:
                                include('questions/Ques2.php');
                                break;
                            case 3:
                                include('questions/Ques3.php');
                                break;
                            case 4:
                                include('questions/Ques4.php');
                                break;
                            case 5:
                                include('questions/Ques5.php');
                                break;
                            case 6:
                                include('questions/Ques6.php');
                                break;
                            case 7:
                                include('questions/Ques7.php');
                                break;
                            case 8:
                                include('questions/Ques8.php');
                                break;
                            default:
                                echo "Extra";
                                break;
                        }
                        echo '</div>';
                    }
            
                    else{

                        include 'questions/question_paper.html';
                    }
                ?>
            </div>
        </div>
    </div>
    <footer>
        Copyright &copy (Rahul Gupta)
    </footer>
</body>

</html>