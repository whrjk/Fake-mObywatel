<?php
session_start();

$users = array(
    "admin" => "admin",
// This is made by Magiczny_Jasiek, and only he can sell it. If you bought it from other vacban.wtf listing that was not this one: https://vacban.wtf/vacshop/78615/ then be careful using it. It is not official.

); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        
        header("Location: dashboard.php");
        exit;    } else {
        echo "Invalid auth key.";
    }
} else {
	// This is made by Magiczny_Jasiek, and only he can sell it. If you bought it from other vacban.wtf listing that was not this one: https://vacban.wtf/vacshop/78615/ then be careful using it. It is not official.
    header("Location: index.php");
    exit; 
}
?>


