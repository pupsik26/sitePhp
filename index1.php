<?php

$autoUser = false;
$includeError = false;
$includeSucces = false;
if (isset($_POST) && !empty($_POST)) {
	$formNotSent = true;
	require(__DIR__ . '/data/users.php');
	require(__DIR__ . '/data/passwords.php');
	$index = array_search($_POST['login'], $logins);
	if ($index !== false && $_POST['password'] == $passwords[$index]) {
		$includeSucces = true;
		$autoUser = true;
	} else {
		$includeError = true;
	}
}
$formNotSent = false;


?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="styles.css" rel="stylesheet">
    <title>Project - ведение списков</title>
</head>

<body>

    <div class="header">
    	<div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project"></div>
        <div class="clearfix"></div>
    </div>

    <div class="clearfix">
        <ul class="main-menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td class="left-collum-index">
			
				<h1>Возможности проекта —</h1>
				<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
				
			
			</td>
	            <td class="right-collum-index">
					
					<div class="project-folders-menu">
						
						<ul class="project-folders-v">
	    					<li class="project-folders-v-active"><a href="http://localhost/stag/layout/?login=yes">Авторизация</a></li>
	    					<li><a href="#">Регистрация</a></li>
	    					<li><a href="#">Забыли пароль?</a></li>
						</ul>
					    <div class="clearfix"></div>
					</div>
	                <?php if (isset($_GET) && $_GET['login'] == 'yes'):?>
					<div class="index-auth">
					<?php $includeError ? require(__DIR__ . '/include/error_message.php') : '' ?>
					<?php $includeSucces ? require(__DIR__ . '/include/success_message.php') : '' ?>
	                    <form action="http://localhost/stag/layout/?login=yes" method="post">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="iat">
	                                    <label for="login_id">Ваш e-mail:</label>
	                                    <input id="login_id" size="30" name="login" value="<?= $includeError ? $_POST['login'] : '' ?>">
	                                </td
								</tr>
								<tr>
									<td class="iat">
	                                    <label for="password_id">Ваш пароль:</label>
	                                    <input id="password_id" size="30" name="password" type="password" value="<?= $includeError ? $_POST['password'] : '' ?>">
	                                </td>
								</tr>
								<tr>
									<td><input type="submit" value="Войти"></td>
								</tr>
							</table>
	                    </form>
	                    
					</div>
				</td>
			<?php endif ?>

        </tr>
    </table>
    
    <div class="clearfix">
        <ul class="main-menu bottom">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Новости</a></li>
            <li><a href="#">Каталог</a></li>
        </ul>
    </div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>