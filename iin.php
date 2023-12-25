<?php
$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['lastname'];
$age=$_REQUEST['age'];
$password=$_REQUEST['pasword'];
$education=$_REQUEST['education'];

if(isset($_POST['btntest']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="BIS_LEVELS";

    @$conn=mysqli_connect($host,$user,$password,$db);

    $insert="insert into Students values('$FirstName,$LastName,$Age,$Password,$Education)";
    mysqli_query($conn,$insert);
    if($conn){
        echo("<h1 style='color:green;'>your registration is done!</h1>");
    }
    else{
        echo("<h1 style='color:red;'>your registration is failed!</h1>");

    }
}