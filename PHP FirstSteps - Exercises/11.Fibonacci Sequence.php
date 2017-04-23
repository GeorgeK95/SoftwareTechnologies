<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>

<?php
$fib = "1 ";
if (isset($_GET['num'])) {
    $count = intval($_GET['num']);
    $sum = 0;
    $fnum = 1;
    $snum = 1;

    for ($i = 1; $i < $count; $i++) {

        if ($i == 1) {
            $sum = $i;
        } else {
            $sum = $fnum + $snum;
            $fnum = $snum;
            $snum = $sum;
        }

        $fib .= "$sum ";
    }
}
?>

<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form><?= $fib ?>
</body>
</html>