<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Information</title>
    <style>
        table {
            border-collapse: collapse;
            table-layout: fixed;
            font-style: oblique;
            background-color: antiquewhite;
        }
        td {
            border: 1px solid black;
            padding: .2em;
        }
    </style>
</head>
<body>
<?php
$information = [];
$information['Name'] = 'Gosho';
$information['Phone Number'] = '+358895123456';
$information['Age'] = 30;
$information['Address'] = 'Hadji Dimitar';
?>

<table>
    <thead></thead>
    <tbody>
    <?php foreach ($information as $key => $value): ; ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>