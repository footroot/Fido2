<?php
require '../vendor/autoload.php';
require '../config.php';
require '../functions.php';

$provider = $_GET['$provider'];

switch ($provider) {
    case 'google':
        $oauth = new OAuth\GoogleOAuth();
        $user = $oauth->handleCallBack();
        break;
    case 'github':
        $oauth = new OAuth\GitHubOAuth();
        $user = $oauth->handleCallBack();
        break;
    case 'apple':
        $oauth = new OAuth\AppleOAuth();
        $user = $oauth->handleCallBack();
        break;
    default:
        echo 'Invalid provider';
        exit;
}

if ($user) {
    //Handle succesful login
    echo 'Welcome ' . htmlspecialchars($user->name);
} else {
    echo 'Login failed';
}