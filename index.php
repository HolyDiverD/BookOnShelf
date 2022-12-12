<?php
session_start();


if (isset($_GET['page'])) {
    $page = $_GET['page'];

}
else{
    $page = 'home';

}
?>

<!DOCTYPE html>
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

include 'includes/contents/'. $page .'.inc.php';


?>
</body>
</html>

