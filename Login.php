<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class = "card">
        <h1>LOGIN USER</h1>

        <form action= "data.php" method = "POST">
            <table>
            <tr>
                <td><label for = "uname">Username : </label></td>
                <td><input type = "text" id = "uname" name = "uname"></td>
            </tr>
            <tr>
                <td><label for ="pass">Password : </label></td>
                <td><input type ="password" id = "pass" name = "pass"></td>
            </tr>
            <tr>
                
            </tr>
            </table>
            <input type = "submit" value = "Login">
        </form>
        </div>
</body>
</html>