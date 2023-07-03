ٍ<?php
$user=array("admin_2023","cs314_2023","system_admin");
$pass=array("Admin_2023","Cs314_2023","System_admin1");

if(isset($_POST['login'])){
    $getUserName = $_POST['username'];
    $getPassword = $_POST['password'];
    for($i=0;$i<3;$i++){
    if(($user[$i] === $getUserName && $pass[$i] === $getPassword)){
        $_SESSION['USER']=$getUserName;
        $_SESSION['PASSWORD']=$getPassword; 
        $_SESSION['LOGIN']=$true;

        echo "<script> location.replace('mainmenu.html')</script>";
    }
}
die("Error entering username and password do not match");
}
?>