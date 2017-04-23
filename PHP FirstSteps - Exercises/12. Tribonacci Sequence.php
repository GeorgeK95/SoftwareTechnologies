<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>

<?php
$fib = "";
if (isset($_GET['num'])) {
    $f = 0;
    $s = 0;
    $t = 0;
    $sum = 1;
    $limit = $_GET['num'];

    for ($i = 0; $i < $limit; $i++) {
        $fib .= "$sum ";

        $f = $s;
        $s = $t;
        $t = $sum;

        $sum = $f + $s + $t;
    }
}
?>

<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form><?= $fib ?>
</body>
</html>