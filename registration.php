<?php

session_start();
#header('location:login.php');
$con =mysqli_connect('localhost','root');
if($con){
    echo "Succesful";
}
else{
    echo "Not succesful";
}
mysqli_select_db($con,'sessionpractical');

   if (isset($_POST['name']))
   {
$name = $_POST['name'];
$pass = $_POST['password'];

$q=" select * from signin where name='$name' && password='$pass' ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if ($num==1)
{
    echo "Duplicate data";
}
else
{
    $qy="insert into signin(name,password) values('$name','$pass')";
    mysqli_query($con,$qy);
}
   }

?>