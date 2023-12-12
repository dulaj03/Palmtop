<?php
require './server/config.php';
if(!empty($_SESSION["id"]))
{
  header("Location:index.php");
}
if(isset($_POST["submit"]))
{
    $uname=$_POST["username"];
    $password=$_POST["password"];
    $result=mysqli_query($conn,"select * from users where uname='$uname'");
    $row =mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0)
    {
        if($password==$row["password"])
        {
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["userId"];
           header("Location:index.php");
        }
        else
        echo "<script>alert('Wrong Password')</script>";
    }
    else
    {
        echo "<script>alert('User Not Registered');</script>";
    }
}
?>