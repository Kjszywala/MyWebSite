<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="register.css">
</head>
<body>
    <center>
        <img id="img2" src="images/logo.png"/>
        <h1 id="register">Register</h1>
        <button id="button" onclick="location.href='mainwindow.php'">Main Menu</button>
    </center><br>
<div id="rcorners1" >
    <center>
    <form method=POST action="register.php">
    <table>
        <br><br>
        <tr>
            <td><b>Login:</b></td>
            <td><input type="text" name="login" maxlength="255"/></td>
        </tr>
        <tr>
            <td><b>Password:</b></td>
            <td><input type="text" name="password" maxlength="255"/></td>
        </tr>
        <tr>
            <td><b>Name:</b></td>
            <td><input type="text" name="name" maxlength="255"/></td>
        </tr>
        <tr>
            <td><b>Surname:</b></td>
            <td><input type="text" name="surname" maxlength="255"/></td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td><input type="text" name="email" maxlength="255"/></td>
        </tr>
        <tr>
            <td><b>Age:</b></td>
            <td><input type="number" name="age" maxlength="255"/></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <b>Choose your gender:</b>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="male" value="male" checked>
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding-top: 30px;">
            <input type=submit name="singUp" id="test" value='Sign Up' style='width: 100%;'></td>
        </tr>
    </table> 
    </form>
    </center>
</div>
</body>
</html>