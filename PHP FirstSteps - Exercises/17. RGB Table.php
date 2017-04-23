<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        table * {
            border: 1px solid black;
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <td>
            Red
        </td>
        <td>
            Green
        </td>
        <td>
            Blue
        </td>

    </tr>

    <?php
    for ($i = 1; $i <= 5; $i++) {
        $multi = 51 * $i;

        $red = "rgb($multi, 0, 0)";
        $green = "rgb(0, $multi, 0)";
        $blue = "rgb(0, 0, $multi)";

        echo "<tr>";
        echo "<td style=\"background-color: $red\"></td>";
        echo "<td style='background-color: $green'></td>";
        echo "<td style='background-color: $blue'></td>";
        echo " </tr > ";
    }
    ?>

</table>
<td style="background - color: rgb(0, 50, 0)"></td>
</body>
</html>