<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>

<?php
$result = "";
    if (isset($_GET['num'])) {
        $result = intval($_GET['num']) * 2;
    }
?>

<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?=$result?>

</body>
</html>