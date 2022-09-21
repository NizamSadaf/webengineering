<?php
session_start();
include("./connection.php");
$roll=$_SESSION["roll"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GPA Calculate</title>
    <style>
        table,th,td
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table
        {
            width: 100%;
        }
        td
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Roll</th>
            <th>Department</th>
            <th>Session</th>
            <th>Semester</th>
            <th>Subject</th>
            <th>Mark</th>
            <th>GPA</th>
        </tr>
        <?php
        $sql="select * from student_info where roll='$roll';";
        $qry=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($qry))
        {
           ?>
           <tr>
               <td><?php echo $row["name"];?></td>
               <td><?php echo $row["roll"];?></td>
               <td><?php echo $row["department"];?></td>
               <td><?php echo $row["session"];?></td>
               <td><?php echo $row["semester"];?></td>
               <td><?php echo $row["subject_name"];?></td>
               <td><?php echo $row["mark"];?></td>
               <td><?php echo $row["gpa"];?></td>
           </tr>
           <?php
        }
       ?>
    </table>
</body>
</html>