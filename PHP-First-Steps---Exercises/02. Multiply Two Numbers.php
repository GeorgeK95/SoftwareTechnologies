<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<?php
$result = "";
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num_1 = intval(($_GET['num1']));
    $num_2 = intval(($_GET['num2']));
    $result = $num_1 * $num_2;
}
?>
<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit" />
</form><?=$result?>

</body>
</html>