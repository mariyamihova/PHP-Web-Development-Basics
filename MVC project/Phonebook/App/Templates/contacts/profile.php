<?php /** @var \App\Data\ContactDTO $data */ ?>

<h1> Contact profile </h1>
<form method="POST">
    <div>
        <label>
            Number:
            <input type="text" value="<?= $data->getPhoneNumber(); ?>" name="username"/>
        </label>
    </div>
    <div>
        <label>
            First name:
            <input type="text" value="<?= $data->getFirstName(); ?>" name="firstName"/>
        </label>
    </div>
    <div>
        <label>
            Last name:
            <input type="text" value="<?= $data->getLastName(); ?>" name="lastName"/>
        </label>
    </div>

    <div>
        <input type="submit" name="edit" value="Edit Contact!"/>
    </div>
    <div>
        <input type="submit" name="delete" value="Delete Contact!"/>
    </div>
</form>

You can see <a href="all.php">all users</a>.