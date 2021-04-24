<?php
include_once ("config.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
error_reporting(E_ALL);
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM tblusers WHERE UserID=$id");

while($res = mysqli_fetch_array($result))
{
    $userid = $res['UserID'];
    $forename = $res['Forename'];
    $surname = $res['Surname'];
    $email = $res['Email'];
//    $password = $res['UserPassword'];
//    $role = $res['Role'];
}
?>
<html>
<head>
    <title>Edit Data</title>
</head>

<body>
<a href="index.php">Home</a>
<br><br>

<form name="form1" method="post" action="editprocess.php">
    <table border="0">
<!--        <tr>-->
<!--            <td>UserID</td>-->
<!--            <td><input type="text" name="userid" value="--><?php //echo $userid;?><!--"></td>-->
<!--        </tr>-->
        <tr>
            <td>Forename</td>
            <td><input type="text" name="forename" value="<?php echo $forename;?>"></td>
        </tr>
        <tr>
            <td>Surname</td>
            <td><input type="text" name="surname" value="<?php echo $surname;?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $email;?>"></td>
        </tr>
<!--        <tr>-->
<!--            <td>Password</td>-->
<!--            <td><input type="text" name="password" value="--><?php //echo $password;?><!--"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Role</td>-->
<!--            <td><input type="text" name="role" value="--><?php //echo $role;?><!--"></td>-->
<!--        <tr>-->
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>