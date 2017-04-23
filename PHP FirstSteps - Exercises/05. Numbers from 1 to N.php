<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>

<?php
$str = "";

if (isset($_GET['num'])) {
    $limit = intval($_GET['num']);
    for ($i = 1; $i <= $limit; $i++) {
        $str .= "$i ";
    }
}
?>

<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form><?= $str ?>
</body>
</html>