<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="50%">
        <tr>
            <th>Student ID</th>
            <th>Exam ID</th>
            <th>External</th>
            <th>Evidence</th>
            <th>Total</th>
        </tr>
    
    <?php
    $infos = file("marks.csv");
    foreach ($infos as $line) {
        $info = explode(",", $line);
        echo '<tr>';
        echo '<td>' . $info[0] . '</td>';
        echo '<td>' . $info[1] . '</td>';
        echo '<td>' . $info[2] . '</td>';
        echo '<td>' . $info[3] . '</td>';
        echo '<td>' . ($info[3] + $info[2]) . '</td>';
        echo '</tr>';
    }
    ?>
    </table>
</body>
</html>