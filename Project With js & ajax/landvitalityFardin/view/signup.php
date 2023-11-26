<!DOCTYPE html>
<html>
    <head>
        <title>SignUp</title>
        <script type="text/javascript" src="../js/signupval.js"></script>
    </head>
    <body>
        <center>
            <fieldset>
                <legend>
                    Sign Up
                </legend>
                    <a href="login.php"><fieldset>Login</fieldset></a>
                    <a href="About.php"><fieldset>About</fieldset></a>
                    <hr>
                    <form action="../controller/signupcheck.php" method="post" onsubmit="return signupval()">
                <table>
                    <tr>
                        <td><label>ID :</label></td>
                        <td><input type="text" name="id" id="id" placeholder="Use Digits"></td>
                    </tr>
                    <tr>
                        <td><label>First Name :</label></td>   
                        <td><input type="text" name="fusername" id="fusername" placeholder="First Name"></td>
                    </tr>
                    <tr>
                        <td><label>Last Name :</label></td>
                        <td><input type="text" name="lusername" id="lusername" placeholder="Last Name"></td>
                    </tr>
                    <tr>
                        <td><label>Password :</label></td>
                        <td><input type="password" name="password" id="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td><label>Phone Number :</label></td>
                        <td><input type="text" name="phone" id="phone" placeholder="User Digits"></td>
                    </tr>
                    <tr>
                        <td><label>Email :</label></td>
                        <td><input type="text" name="email" id="email" placeholder="email"></td>
                    </tr>
                    <tr>
                        <td><label>Gender:</label></td>
                        <td><select name="gender" id="gender">
                            <option value="none">Not Selected</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label>Date of birth :</label></td>
                        <td><input type="text" name="date_of_birth" id="date_of_birth" placeholder="DD/MM/YYYY"></td>
                    </tr>
                    <td colspan="2" align="center">
                        <input type="radio" name="usertype" id="admin" value="admin">Admin
                        <input type="radio" name="usertype" id="user" value="user" checked>User
                    </td>
                </table><hr>
                <input type="submit" name="submit" value="Signup">
                </form>
            </fieldset>
        </center>
    </body>
</html>