<?php
    $conn=mysqli_connect("localhost","root","","lab-1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <br>
        <input type="text" name="name" id="" placeholder="Name"><br>
        Address: <br>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br>
        Favourite Programming Lnguages:
        C:
        <input type="checkbox" name="progamming_languages[]" id="" value="C"">&nbsp;
        C++:
        <input type="checkbox" name="progamming_languages[]" id="" value="C++">&nbsp;
        PHP:
        <input type="checkbox" name="progamming_languages[]" id="" value="PHP">&nbsp;<br><br>
        Gender:
        Male 
        <input type="radio" name="gender[]" id="" value="male"> &nbsp;
        Female
        <input type="radio" name="gender[]" id="" value="female"><br><br>
        Password: <br>
        <input type="password" name="password" id=""><br><br>
        <input type="submit" name="submit" id="" value="SUBMIT"><br><br>
        <input type="submit" name="reset" id="" value="RESET"><br><br>
        <a href="show.php">Show</a>
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            $name=$_POST["name"];
            $address=$_POST["address"];
            $pl=$_POST["progamming_languages"];
            $languages=implode(",",$pl);
            $gender=implode(",",$_POST["gender"]);
            $password=$_POST["password"];
            $sql="INSERT INTO std_information VALUES('$name','$address','$languages','$gender','$password')";
            mysqli_query($conn,$sql);

        }
        if(isset($_POST["reset"]))
        {
            $name=$_POST["name"]="";
            $address=$_POST["address"]="";
            $pl=$_POST["progamming_languages"]="";
            $gen=$_POST["gender"]="";
            $password=$_POST["password"]="";
            
        }
    ?>
</body>
</html>