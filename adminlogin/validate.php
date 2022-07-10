<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_connection.php';
    $conn = mysqli_connect($server, $username, $password, $database);
    $username = $_POST["username"];
 // $_username = mysqli_real_escape_string($conn, $username);
    $password = $_POST["password"];
    $sql = "Select * from adminlogin where username= '$username' AND password='$password'" ;
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        // $query = "select username from adminlogin where password = '$password'";
        // $result1 = mysqli_query($conn, $sql);
        // $num1 = mysqli_num_rows($result);
        // if ($num1 == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: /admin/userdetails.php");
        }
    // }
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
    
    else{
        header("location: /admin/404.html");
        // $showError = "Invalid Credentials";
    }
}
?>
