<?php
session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/src/sessionCheck.php');
$pathForLocalhost = $_SERVER['DOCUMENT_ROOT'];
require($pathForLocalhost . '/src/core.php');
$autoUser = false;
$includeError = false;
$includeSucces = false;
$url = 'http://p3.kazakovv_qschool.newgrade.vpool';
if (isset($_POST) && !empty($_POST)) {
	$formNotSent = true;
	require($_SERVER['DOCUMENT_ROOT'] . '/data/users.php');
	require($_SERVER['DOCUMENT_ROOT'] . '/data/passwords.php');
	$index = array_search($_POST['login'], $logins);
	$userLogin = $logins[$index];
	if ($index !== false && $_POST['password'] == $passwords[$index]) {
	    $_SESSION[$userLogin] = true;
	    setcookie('login', $logins[$index], time()+3600*24*30, '/');
		$includeSucces = true;
		$autoUser = true;
	} else {
		$includeError = true;
	}
}

if (!empty($_GET) && isset($_GET['login']) && $_GET['login'] == 'no') {
    header('Location: /?login=yes');
    session_destroy();
}
if (empty($_SESSION) && $_SERVER["REQUEST_URI"] != '/?login=yes') {
    header('Location: /?login=yes');
} elseif (!empty($_SESSION) && isset($_COOKIE['login']) && $_SESSION[$_COOKIE['login']]) {
    setcookie('login', $_COOKIE['login'], time()+3600*24*30, '/');
}
$formNotSent = false;

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="/styles.css" rel="stylesheet">
    <title><?= checkTitle($mainMenu); ?></title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="/i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>
    <?php $menu = showMenu($mainMenu, 'title', 'main-menu') ?>
    <div class="clearfix">
        <ul class="main-menu">
            <?php foreach($menu as $m): ?>
                <li>
                    <a href="<?= $m['path'] ?>" style="<?= checkRoute($m) ? 'text-decoration: underline;' : '' ?>" > <?= $m['title'] ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>



    