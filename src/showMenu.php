
<?php
function showMenu(array $menu, $sort, $stile)
{

    $menu = ($stile == 'main-menu') ? arraySort($menu, $sort) : arraySort($menu, $sort, SORT_DESC);
    for ($i = 0; $i < count($menu); $i++) {
        $menu[$i]['title'] = cutString($menu[$i]['title']);
    }
    return $menu;
}

?>