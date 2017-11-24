<?php /** @var \App\Data\ContactDTO[] $data */ ?>

<h1> All Contacts</h1>
<form>
<table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Number</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Delete</th>
        <th>Edit</th>


    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $contact): ?>
        <tr>
            <td><?= $contact->getId(); ?></td>
            <td><?= $contact->getPhoneNumber(); ?></td>
            <td><?= $contact->getFirstName(); ?></td>
            <td><?= $contact->getLastName(); ?></td>
            <td><a href="delete.php?contact_id=<?= $contact->getId(); ?>">Delete contact</a> </td>
            <td><a href="edit.php?contact_id=<?= $contact->getId(); ?>">Edit contact</a> </td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</form>