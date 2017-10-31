
<table>
	<th>Id</th>
	<th>First name</th>
	<th>Last name</th>

	<?php foreach($customers as $i => $iv): ?>
    <tr>
        <td><?php echo($iv['customer_id']);        ?></td>
        <td><?php echo($iv['first_name']);       ?></td>
        <td><?php echo($iv['last_name']);        ?></td>

    </tr>
<?php endforeach; ?>
</table>