<?php
$menuitems = array(
    'Home' => array(
        'home',
        'home'
    ),
    'Login' => array(
        'login',
        'sign-in'
    ),
    'Register' => array(
        'register',
        'user-circle'
    ),
    'Selection' => array(
        'selection',
        'search'
    )
);
$klantitems = array(
    'Home' => array(
        'home',
        'home'
    ),
    'Overview' => array(
        'klant',
        'list'
    ),
    'Borrowed Books' => array(
        'borrowed',
        'shopping-basket'
    ),
    'Reservations' => array(
        'reservations',
        'list'
    )
);
$adminitems = array(
    'Home' => array(
        'home',
        'home'
    ),
    'Overview' => array(
        'admin',
        'list'
    ),
    'Add' => array(
        'add',
        'shopping-basket'
    ),
    'Edit' => array(
        'edit',
        'list'
    )
);


if ($_SESSION['role'] == 'null') {
    echo '<div class="navbar">';

    foreach ($menuitems as $label => $link) {
        echo '<a href="index.php?page=' . $link[0] . '"><i class="fa fa-fw fa-' . $link[1] . '"></i>' . $label . '</a>';
    }

    echo '</div>';
} elseif ($_SESSION['role'] == 'Klant') {
    echo '<div class="navbar">';

    foreach ($klantitems as $label => $link) {
        echo '<a href="index.php?page=' . $link[0] . '"><i class="fa fa-fw fa-' . $link[1] . '"></i>' . $label . '</a>';
    }

    echo '</div>';
} elseif ($_SESSION['role'] == 'Admin') {
    echo '<div class="navbar">';

    foreach ($adminitems as $label => $link) {
        echo '<a href="index.php?page=' . $link[0] . '&ID&title&writer&genre&isbn&lan&pages&amount"><i class="fa fa-fw fa-' . $link[1] . '"></i>' . $label . '</a>';
    }

    echo '</div>';
}



