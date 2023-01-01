<?php

// Start the session
session_start();

$user = [
    'user_name'  => '',
    'password'   => '',
    'first_name' => '',
    'last_name'  => '',
    'email'      => '',
];

if (!empty($_SESSION['user'])) {
    $user = $_SESSION['user'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!$user['user_name']) {
        $user['user_name'] = $_REQUEST['user_name'] ?: '';
    }
    $user['password'] = $_REQUEST['password'] ?: '';
    $user['first_name'] = $_REQUEST['first_name'] ?: '';
    $user['last_name'] = $_REQUEST['last_name'] ?: '';
    $user['email'] = $_REQUEST['email'] ?: '';
    

}
// Set session variables
$_SESSION['user'] = $user;

$disabled = !empty($user['user_name']) ? 'disabled ' : '';



$html = <<<html
<!DOCTYPE html>
<html>
    <head>
        <title>Personal Information</title>
    </head>
    <body>
        <form action="{$_SERVER['PHP_SELF']}" method="post">
            Username: <input type="text" name="user_name" value="{$user['user_name']}" {$disabled}/><br />
            Password: <input type="password" name="password" value="{$user['password']}" /><br />
            First Name: <input type="text" name="first_name" value="{$user['first_name']}" /><br />
            Last Name: <input type="text" name="last_name" value="{$user['last_name']}" /><br />
            Email: <input type="text" name="email" value="{$user['email']}" /><br />
            <input type="submit" value="Save" />
        </form>
    </body>
</html>
html;

echo $html;