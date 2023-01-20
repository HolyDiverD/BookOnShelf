<?php
session_start();

require '../private/conn_BOS.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = 'home';
    $_SESSION['role'] = 'null';
}

if ($page == 'home' && $_SESSION['role'] == 'Klant') {
    $_SESSION['role'] = 'null';
}

if ($page == 'home' && $_SESSION['role'] == 'Admin') {
    $_SESSION['role'] = 'null';
}

if ($page == '' && $_SESSION['role'] == 'Admin'){
    $page = 'admin';
}

if ($page == '' && $_SESSION['role'] == 'Klant'){
    $page = 'klant';
}

if ($page == '' && $_SESSION['role'] == 'null'){
    $page = 'home';
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book On Shelf</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
<?php
include 'includes/nav/homenav.inc.php';

include 'includes/contents/' . $page . '.inc.php';
?>
</body>
</html>

