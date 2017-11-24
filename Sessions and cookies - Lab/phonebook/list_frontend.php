<a href="add_user.php">Add new entry</a>
<table border="1" cellpadding="2" style="justify-content: center">
    <th>Name</th>
    <th>Number</th>

    <?php foreach($_SESSION['user']as $user): ?>
        <tr>
            <td><?=$user['name'];        ?></td>
            <td><?=$user['phone'];        ?></td>

        </tr>
    <?php endforeach; ?>
</table>