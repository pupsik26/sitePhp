<td class="right-collum-index">

    <div class="project-folders-menu">

        <ul class="project-folders-v">
            <form method="post">
                <li class="project-folders-v-active"><a href="<?= !sessionCheck() ? '/?login=no' : '/?login=yes' ?>"><?= !sessionCheck() ? 'Выйти' : 'Авторизоваться' ; ?></a></li>
                <li><a href="#">Регистрация</a></li>
                <li><a href="#">Забыли пароль?</a></li>
            </form>
        </ul>
        <div class="clearfix"></div>
    </div>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/src/authorization.php') ?>
</td>


</tr>
</table>

<?php $menu = showMenu($mainMenu, 'title', 'main-menu bottom') ?>

<div class="clearfix">
    <ul class="main-menu bottom">
        <?php foreach($menu as $m): ?>
            <li>
                <a href="<?= $m['path'] ?>" style="<?= checkRoute($m) ? 'text-decoration: underline;' : '' ?>" > <?= $m['title'] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>

    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>

</body>
</html>
