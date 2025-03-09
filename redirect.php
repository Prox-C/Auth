<?php
session_start();
var_dump($_SESSION); // Debugging

require_once('functions.php');

// Check if form was submitted
if(isset($_POST['login'])) {
    // Validate that both username and password are not empty
    if(empty($_POST['username']) || empty($_POST['pass'])) {
        echo "<script>alert('Both username and password are required.');</script>";
        echo "<script>location.href='index.php'</script>"; // Redirect back to the login page if validation fails
        exit; // Stop further script execution
    }

    $username = (string)$_POST['username'];
    $password = (string)$_POST['pass'];

    $user = auth($username); 

    if(!empty($user)) {
        // Use password_verify to compare the input password with the stored hashed password
        if (password_verify($password, $user['password'])) {
            // Set session variables on successful login
            $_SESSION['id'] = $user['user_id'];
            $_SESSION['fname'] = $user['firstname'];
            $_SESSION['lname'] = $user['laststname'];
            $_SESSION['name'] = $user['username'];


        //echo"<script>location.href='home.php'</script>";
            header('Location: home.php');
        } else {
            echo"<script>alert('Wrong Password');</script>";
            echo"<script>location.href='index.php'</script>";
        }

    } else {
        echo"<script>alert('Account does not exist');</script>";
        echo"<script>location.href='index.php'</script>";
    }
}
?>
