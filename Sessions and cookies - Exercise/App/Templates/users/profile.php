<?php /** @var \App\Data\UserDTO $data */ ?>

<h1> Your profile </h1>
<form method="POST">
    <div>
        <label>
            Username:
            <input type="text" value="<?= $data->getUsername(); ?>" name="username"/>
        </label>
    </div>
    <div>
        <label>
            Password:
            <input type="text" name="password"/>
        </label>
    </div>
    <div>
        <label>
            First Name:
            <input type="text" value="<?= $data->getFirstName(); ?>" name="firstName"/>
        </label>
    </div>
    <div>
        <label>
            Last Name:
            <input type="text" value="<?= $data->getLastName(); ?>" name="lastName"/>
        </label>
    </div>
    <div>
        <label>
            Birthday:
            <input type="text" value="<?= $data->getBornOn(); ?>" name="bornOn"/>
        </label>
    </div>
    <div>
        <input type="submit" name="edit" value="Edit Profile!"/>
    </div>
    <div>
        <input type="submit" name="delete" value="Delete Profile!"/>
    </div>
    <div>
        <a href="addEmail.php">Add email</a>
    </div>
    <div>
        <a href="viewEmail.php">View emails</a>
    </div>

</form>

You can <a href="logout.php">logout</a> or see <a href="all.php">all users</a>.