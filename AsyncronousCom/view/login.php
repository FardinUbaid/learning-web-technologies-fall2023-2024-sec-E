<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Page
        </title>
        <script type="text/javascript" src="../js/loginval.js"></script>
        <link rel="stylesheet" type="text/css" href="../asset/login.css">
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Login
                </legend>
                <form action="../controller/logincheck.php" method="post" onsubmit="return loginval()">
                <table>
                    <tr>
                        <td><label>EMAIL ID:</label></td>
                        <td>
                            <Input type="text" name="email" id="email" placeholder="Type your EMAIL ID.">
                            <span id="mailError" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label>PASSWORD:</label></td>
                        <td>
                            <Input type="password" name="password" id="password" placeholder="Type your PASSWORD.">
                            <span id="passError" class="error"></span>
                        </td>
                    </tr>
                </table>
                    <input type="submit" name="submit" value="Login">
            </form><hr>
            <h3><i>Don't have an account?</i></h3>
            <a href="register.php"><fieldset><h2><b>REGISTRETION</b></h2></fieldset></a>
            </fieldset>
        </center>
    </body>
</html>