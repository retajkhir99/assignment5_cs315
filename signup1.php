<?php
$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$resetpassword = $_POST['resetpassword'];
$gender = $_POST['gender'];
$data=array("$username","$phonenumber","$email","$password","$gender");
$data1=array("User Name : ","Phone Number : ","Email : ","Password : ","gender : ");
    inputusername($username );
    inputpasword($password);
    password($password);
    equalpassword($password,$resetpassword);
    for($i=0;$i<5;$i++)
    {
        echo "$data1[$i] $data[$i]";
        echo "<br>";
        echo "<br>";
    }
function inputerrormessage($error)
{
    die("Entry error $error");
}
function inputpasword($password)
{
    if(strlen($password)<10){
        inputerrormessage("Password must be more than 10 characters long");
    }
    else if(strlen($password)>14)
    {
        inputerrormessage("Password must be less than 14 characters long");
    }
}
function inputusername($data)
{
    if(strlen($data)>15){
        die("Username must be less than 15 characters long");
    }
    else if(strlen($data)<10){
        die("Username must be more than 10 characters long");
    }
}
function password($password)
{
    if(!preg_match("/[a-z]/",$password)){
        die("Password must contain lowercase letters");
    }
    else if(!preg_match("/[A-Z]/",$password)){
        die("Password must contain capital letters");
    }
    else if(!preg_match("/[0-9]/",$password)){
        die("The password must contain numbers");
    }
    else if(!preg_match("/[!@#$%^&*<>+]/",$password)){
        die("The password must contain symbols");
    }
}
function equalpassword($password,$resetpassword)
{
    if($password !== $resetpassword){
        die("password must match");
    }
}
?>
