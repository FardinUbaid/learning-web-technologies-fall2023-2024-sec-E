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
            Admin|Add Solution
        </title>
    </head>
    <body>
        <fieldset>
            <legend>Add Solutions</legend>
            <fieldset>
                <table width="20%" align="right">
                    <tr>
                        <td align="center"><a href="dashboard.php"><fieldset>Home</fieldset></a></td>
                        <td align="center"><a href="Login.php"><fieldset>Log Out</fieldset></a></td>
                    </tr>
                </table>
            </fieldset>
            <form method="post" action="../Controller/editsolcheck.php" enctype="">
            <table width="100%">
                <tr>
                    <td align="center">Solution ID:</td>
                    <td align="left"><input type="number" name="sl_number" value=""></td>
                </tr>
                <tr>
                    <td align="center">Problem Name:</td>
                    <td align="left"><input type="text" name="problem" value=""></td>
                </tr>
                <tr>
                    <td align="center">Solution:</td>
                    <td align="left"><textarea name="solution"></textarea></td>
                </tr>

            </table>
            <center>
                <input type="submit" name="submit" value="submit">
            </center>
            </form>
        </fieldset>
    </body>
</html>