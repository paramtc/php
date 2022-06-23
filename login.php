<html>
<head>
    <title>login page</title>
</head>
<body>
    <form action="welcome.php" method = post>
        <table align="center">
            <tr>
                <th colspan="2">
                    <h2 align="center">Login</h2>
                </th>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="uname"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pwd" value="12345"></td>
            </tr>
            <tr>
                <td>Reset Password:</td>
                <td><input type="reset" name="res"></td>
            </tr>
            <tr>
                <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>