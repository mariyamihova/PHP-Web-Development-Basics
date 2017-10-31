<table>
    <th>Make</th>
    <th>Model</th>
    <th>Year</th>
    <th>Car ID</th>
    <th>Owner first name</th>
    <th>Owner last name</th>
    <th>Owner id</th>

    <?php foreach($owners as $i => $iv): ?>
        <tr>
            <td><?php echo($iv['make']);        ?></td>
            <td><?php echo($iv['model']);       ?></td>
            <td><?php echo($iv['year']);        ?></td>
            <td><?php echo($iv['car_id']);        ?></td>
            <td><?php echo($iv['first_name']);        ?></td>
            <td><?php echo($iv['last_name']);        ?></td>
            <td><?php echo($iv['customer_id']);        ?></td>

        </tr>
    <?php endforeach; ?>
</table>