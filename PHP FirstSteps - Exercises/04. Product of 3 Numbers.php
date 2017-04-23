<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<?php
$result = "";
if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $negative = 0;

    if (intval($_GET['num1']) <= 0) {
        $negative++;
    }
    if (intval($_GET['num2']) <= 0) {
        $negative++;
    }
    if (intval($_GET['num3']) <= 0) {
        $negative++;
    }

    if ($negative % 2 == 0) {
        $result = "positive";
    } else
        $result = "negative";
}
?>
<form>
    X: <input type="text" name="num1"/>
    Y: <input type="text" name="num2"/>
    Z: <input type="text" name="num3"/>
    <input type="submit"/>
</form><?= $result?>

</body>
</html>