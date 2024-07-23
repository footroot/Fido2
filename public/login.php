<?php
require '../vendor/autoload.php';
require '../config.php';
require '../functions.php';

$provider = $_GET['$provider'];

switch ($provider) {
    case 'google':
        $oauth = new OAuth\GoogleOAuth();
        $oauth->redirect();
        break;
    case 'github':
        $oauth = new OAuth\GitHubOAuth();
        $oauth->redirect();
        break;
    case 'apple':
        $oauth = new OAuth\AppleOAuth();
        $oauth->redirect;
        break;
    default:
        echo 'Invalid provider';
        break;
}