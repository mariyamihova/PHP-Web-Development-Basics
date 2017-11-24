<table>
    <th>Name</th>
    <th>Number</th>


    <?php foreach($_SESSION as $i => $iv): ?>
        <tr>
            <td><?php echo $i;        ?></td>
            <td><?php echo $iv;       ?></td>

        </tr>
    <?php endforeach; ?>
</table>