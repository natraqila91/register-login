<?php

include("DB.php");


?>


<html>
    <head><title>Register / Login for GitHub Tutorial</title></head>
    <body>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            <?php
            $sql = "SELECT * FROM tbl_user";
            $list = mysql_query($sql);
            while($row = mysql_fetch_array($list))
            {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["username"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>