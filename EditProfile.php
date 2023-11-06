<?php
    session_start();
    if(!isset($_COOKIE['flag'])){
        header('location: Login.php');
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            View Profile
        </title>
    </head>
    <body>
        <fieldset>
            <h3>Edit Profile</h3>
            <table width="20%" align="right">
                <tr>
                    <td align="center"><a href="dashboard.php"><fieldset>Home</fieldset></a></td>
                    <td align="center"><a href="Login.php"><fieldset>Log Out</fieldset></a></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Your Profile</legend>
            <form method="post" action="../Controller/editcheck.php" enctype="">
            <table width="100%">
                <tr>
                    <td>
                        NAME:
                    </td>
                    <td>
                        <input type="text" name="name_edit" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email_edit" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Phone:
                    </td>
                    <td>
                        <input type="number" name="phone" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Of Birth
                    </td>
                    <td>
                        <input type="date" name="date_of_birth" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender:
                    </td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                    </td>
                </tr>
            </table>
            <hr>
            <center>
            <input type="submit" name="submit" value="submit">
            </center>
        </form>
        </fieldset>
    </body>
</html>