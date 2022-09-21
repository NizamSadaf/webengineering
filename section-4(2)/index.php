<?php
include("./connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GPA Calculate</title>
</head>
<body>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="name"><br>
        Roll: <br>
        <input type="text" name="roll"><br>
        Department:
        <select name="department" id="">
            <option value="" disabled selected>department</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="BBA">BBA</option>
        </select><br>
        Session: <br>
        <input type="text" name="session"><br>
        Semester: <br>
        <input type="text" name="semester"><br>
        Subject: <br>
        <input type="text" name="subject"><br>
        Mark: <br>
        <input type="text" name="mark"><br>
        <input type="submit" value="Submit" name="submit">
        <a href="./show.php">Show</a>
    </form>
    <?php
    if(isset($_POST["submit"]))
    {
    $name=$_POST["name"];
    $roll=$_POST["roll"];
    $department=$_POST["department"];
    $session=$_POST["session"];
    $semester=$_POST["semester"];
    $subject=$_POST["subject"];
    $mark=$_POST["mark"];
    $_SESSION["roll"]=$roll;
    if($mark>="80")
    {
        $gpa="4.00";
    }
    else if($mark>="75")
    {
        $gpa="3.75";
    }
    else if($mark>="70")
    {
        $gpa="3.50";
    }
    else if($mark>='65')
    {
        $gpa="3.25";
    }
    else if($mark>='60')
    {
        $gpa="3.00";
    }
    else if($mark>='55')
    {
        $gpa="2.75";
    }
    else if($mark>='50')
    {
        $gpa="2.50";
    }
    else if($mark>='45')
    {
        $gpa="2.25";
    }
    else if($mark>='40')
    {
        $gpa="2.00";
    }
    else
    {
        $gpa="0.00";
    }
    $sql="INSERT INTO student_info VALUES ('$name','$roll','$department','$session','$semester','$subject','$mark','$gpa');";
    mysqli_query($conn,$sql);
    } 
    ?>
    

</body>
</html>