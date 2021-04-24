<?php

include ("config.php");
$result = mysqli_query($conn, "SELECT * FROM tblusers ORDER BY UserID ASC");
?>

<html>
<head>
    <title> Display Data with edit button</title>
</head>
<body>
<a href="add.html">Add New Data</a><br><br>

<table width='50%'height='15%' border='0'>

    <tr bgcolor='yellow'>
        <td>UserID</td>
        <td>Forename</td>
        <td>Surname</td>
        <td>Email</td>
        <td>Password</td>
        <td>Role</td>
        <td>Update</td>
    </tr>
    <?php

    while($res = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td bgcolor=''>".$res['UserID']."</td>";
        echo "<td>".$res['Forename']."</td>";
        echo "<td>".$res['Surname']."</td>";
        echo "<td>".$res['Email']."</td>";
        echo "<td>".$res['UserPassword']."</td>";
        echo "<td>".$res['UserRole']."</td>";
        echo "<td bgcolor='green'><a href='edit.php?id=$res[UserID]'><font color='white'>Edit</a>";
    }
    ?>
</table>

</body>

</html>

