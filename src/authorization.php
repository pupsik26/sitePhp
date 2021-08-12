<?php if (!empty($_GET) && $_GET['login'] == 'yes'): ?>
	<div class="index-auth">
		<?php $includeError ? require($_SERVER['DOCUMENT_ROOT'] . '/include/error_message.php') : ''; ?>
		<?php $includeSucces ? require($_SERVER['DOCUMENT_ROOT'] . '/include/success_message.php') : ''; ?>
        <?php if (empty($_SESSION)): ?>
            <form action="http://p3.kazakovv_qschool.newgrade.vpool/?login=yes" method="post">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td class="iat">
                            <label for="login_id">Ваш e-mail:</label>
                            <input id="login_id" size="30" name="login" value="<?php
                                if ($includeError) {
                                    echo $_POST['login'];
                                } elseif (isset($_COOKIE['login'])) {
                                    echo $_COOKIE['login'];
                                } else {
                                    echo '';
                                } ?>">
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
        <?php endif; ?>
	</div>
<?php endif ?>