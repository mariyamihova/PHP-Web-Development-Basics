<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Information about bikes in stock</title>
    <style>
        table {
            border-collapse: separate;
            table-layout: inherit;
            font-style: normal;
            background-color: gainsboro;
        }
        td {
            border: 1px solid black;
            padding: .5em;
        }
    </style>
</head>
<body>
<table>
    <thead></thead>
    <tbody>
    <?php foreach ($bikes as $bike): ; ?>
        <tr>
            <td><?php echo $bike; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>