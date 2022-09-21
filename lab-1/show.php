<?php
    $conn=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show</title>
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
            <th>Address</th>
            <th>Programming Languages</th>
            <th>Gender</th>
        </tr>
        <?php
        $sql="select * from std_information;";
        $qry=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($qry))
        {
           ?>
           <tr>
               <td><?php echo $row["name"];?></td>
               <td><?php echo $row["address"];?></td>
               <td><?php echo $row["programming_language"];?></td>
               <td><?php echo $row["gender"];?></td>
           </tr>
           <?php
        }
       ?>
    </table>
</body>
</html>