<?php
$questions = array(
    "text" => "question1",
    "ansA" => "A",
    "ansB" => "B",
    "ansC" => "C",
    "ansD" => "D",
    "correct_ans" => "A")
    if (count($questions) > 0) {
                foreach ($questions as $key => $value) 
                    echo "<b>$value[0]</b><br/><br/>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Quiz app</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="header">
        <center> 
            <h3> Welcome to Quiz App</h3>
        </center>
        </div>

        <form action="quiz_app.php" method="POST">
            <table align='center'>
            <td id="ques1" colspan="4">Câu 1: Enter your favorite tea? </td>
            <tr>
            <td><input type="radio" name="q1" value="q1a"> A. Bubble tea </td>
            <td><input type="radio" name="q1" value="q1b"> B. Peach tea </td>
            <td><input type="radio" name="q1" value="q1c"> C. Lemon tea </td>
            <td><input type="radio" name="q1" value="q1d"> D. Strawberry tea </td>
            </tr>
                //tập commit hahaaaa
                // lần bar

        </form>
        </table>
    </body>
</html>
