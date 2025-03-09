<?php

function connect() // DATABASE CONNECTION
{
    $host = "localhost";
    $db = "ias";
    $user = "root";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$db";

    try
    {
        $conn = new PDO($dsn, $user, $password);
        return $conn;
    }
    catch(PDOException $e) 
    {
        echo "Error: " . $e->getMessage();
		die();
    }
}

// USER-RELATED FUNCTIONS
function auth($username)
{
    $conn = connect();

    $query = $conn->prepare("SELECT * FROM `users` WHERE username = :username LIMIT 1");
    $query->bindParam(':username', $username);
    $query->execute();
	$result = $query->fetch(PDO::FETCH_ASSOC);

	return $result;
}

function register_user($username, $fname, $lname, $password)
{
    $conn = connect();

    // Check if the email already exists
    $check_query = $conn->prepare("SELECT COUNT(*) FROM `users` WHERE username = :username");
    $check_query->bindParam(':username', $username);
    $check_query->execute();
    $username_exists = $check_query->fetchColumn();

    if ($username_exists) {
        $conn = null;
        return "username_exists";
    }

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = $conn->prepare("INSERT INTO `users` (username, firstname, lastname, password) VALUES (:username, :fname, :lname, :password)");

    $query->bindParam(':username', $username);
    $query->bindParam(':fname', $fname);
    $query->bindParam(':lname', $lname);
    $query->bindParam(':password', $hashed_password);

    $response = $query->execute();

    if ($response) {
        $id = $conn->lastInsertId();
        $conn = null;
        return $id;
    } else {
        $conn = null;
        return FALSE;
    }
}

?>