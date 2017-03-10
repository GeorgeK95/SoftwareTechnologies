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
    $result = [];
    $limit = intval($_GET['num']);

    for ($i = $limit; $i >= 3; $i--) {
        $bool = true;

        for ($j = 2; $j <=  sqrt($i); $j++) {
            if ($i % $j == 0) {
                $bool = false;
            }
        }

        if ($bool == true) {
            $result[] = $i;
        }
    }

    $str = implode(" ", $result);
}
?>

<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form><?= $str ?>
</body>
</html>