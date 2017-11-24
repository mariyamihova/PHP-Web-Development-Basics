<?php /** @var \App\Data\EmailDTO[] $data */ ?>

<h1> All Emails of Yours are</h1>

<table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Remove email</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $email): ?>
        <tr>
            <td><?= $email->getId(); ?></td>
            <td><?= $email->getEmail(); ?></td>
            <td><a href="removeEmail.php?id=<?= $email->getId(); ?>">Remove</a> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
Go back to your <a href="profile.php">your profile</a>.