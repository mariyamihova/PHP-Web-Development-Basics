<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>

</head>
<body>
<form action="" method="GET">
   <div>
       <input type="text" name="name" required placeholder="Name" />
   </div>
    <div>
        <input type="text" name="age" required placeholder="Age" />
    </div>
    <div>
        <input type="radio" name="gender" value="male" required />Male
    </br>
        <input type="radio" name="gender" value="female" required />Female
    </div>

    <input type="submit" value="Submit"/>
</form>
<?php
if (isset($_GET) ) {
$name = trim($_GET['name']);
$age = intval(trim($_GET['age']));
$gender = trim($_GET['gender']);

echo "My name is {$name}. I am {$age} years old. I am a {$gender}.";
}
?>
</body>
</html>