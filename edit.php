<?php
include_once 'User.php';
include_once 'DBConnect.php';
include_once 'StudentManager.php';
$studentManager = new StudentManager();
$id = $_GET['id'];
$stmt = $studentManager->getStudentById($id);
$name = $stmt['name'];
$phone = $stmt['phone'];
$address = $stmt['address'];
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
<form action="update.php" method="post">
    <table>
        <tr><h1>Quan ly sinh vien</h1></tr>
        <tr><input style="display: none" name="id" value="<?php echo $id?>"></tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Phone:</td>
            <td><input type="text" name="phone" value="<?php echo $phone ?>"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address" value="<?php echo $address ?>"></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Update">
            </td>
        </tr>
    </table>
</form>

</body>
</html>