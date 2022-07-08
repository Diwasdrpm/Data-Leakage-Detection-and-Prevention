<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_connection.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * from adminlogin where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
       $login = true;
       session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: /admin/register.php");
    
    // $sql = "Select * from adminlogin where username='$username'";
    // $result = mysqli_query($conn, $sql);
    // $num = mysqli_num_rows($result);
    // if ($num == 1){
    //     while($row = mysqli_fetch_assoc($result))
    //     {
    //         if($password == $row['password'])
    //         {
    //             $login = true;
    //             session_start();
    //             $_SESSION['loggedin'] = true;
    //             $_SESSION['username'] = $username;
    //             header("location: adminpage.php");

    //         }
    //         else{
    //             $showError = "Invalid Credentials";
    //         }
    //     }
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
?>