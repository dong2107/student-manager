<?php
include_once 'User.php';
include_once 'StudentManager.php';
include_once 'DBConnect.php';
$studentManager = new StudentManager();
$list = $studentManager->getAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="add.php" method="post">
    <table>
        <tr><h1>Quan ly sinh vien</h1></tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit">Submit</button>
            </td>
        </tr>
    </table>
</form>

<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Address</td>
    </tr>
    <?php foreach ($list as $key => $value): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $value->name ?></td>
            <td><?php echo $value->phone ?></td>
            <td><?php echo $value->address ?></td>
            <td><a href="delete.php?id=<?php echo $value->id ?>">Delete</a></td>
            <td><a href="edit.php?id=<?php echo $value->id ?>">Edit</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>