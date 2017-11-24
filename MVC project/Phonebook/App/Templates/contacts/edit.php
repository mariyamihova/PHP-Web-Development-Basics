<?php /** @var $data \App\Data\ContactDTO */ ?>
<h1> Edit contact</h1>
<form method="POST">
    <div>
        <label>
            Number:
            <input type="text" value="<?=$data->getPhoneNumber();?>" name="phoneNumber"/>
        </label>
    </div>
    <div>
        <label>
            First name:
            <input type="text" value="<?=$data->getFirstName();?>" name="firstName"/>
        </label>
    </div>
    <div>
        <label>
            Last name:
            <input type="text" value="<?=$data->getLastName();?>" name="lastName"/>
        </label>
    </div>
    <div>
        <input type="submit" name="add" value="Edit record!"/>
    </div>
</form>