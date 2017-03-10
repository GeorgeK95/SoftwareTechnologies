<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>

<?php
$factorial = "";
if (isset($_GET['num'])) {
    $n = intval($_GET['num']);
    $factorial = GetFactorial($n);
}
function GetFactorial($n)
{
    if ($n < 2) {
        return 1;
    }
    return GetFactorial($n - 1) * $n;
}

?>

<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form><?= $factorial ?>
</body>
</html>