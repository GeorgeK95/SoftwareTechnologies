<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>

<?php
if (isset($_GET['num'])) {
    $number = $_GET['num'];

    for ($i = 1; $i <= $number; $i++) {
        echo "<button>$i</button>";
    }
}
?>

<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<!--Write your PHP Script here-->
</body>
</html>