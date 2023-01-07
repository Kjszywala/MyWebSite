<html>
<head>
  <meta charset="utf-8">
  <title>Register</title>
  <style>
    #img2{
        width: 250px;
        height: 100px;
    }
    body { 
        background-image: url("images/log.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        font-family: 'Times New Roman', serif;
    }
    #rcorners1 {
        border-radius: 25px;
        background: white;
        height: 60%;
        width: 500px;
        margin: 0 auto;
        background-size: 10% 10%;
    }
    input[type=submit]{
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }
    input[type=submit]:hover{
        background-color: #5ccc44;
    }
    input[type=text], input[type=number] {
        border: 2px;
        border-radius: 4px;
        background-color: lightblue;
        size: 10;
        height: 30;
    }
    #button{
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
        
    }
    #button:hover{
        background-color: #5ccc44;
    }
    #register{
        color: white;
        font-family: brush script mt, cursive;
    }
    th, td {
        padding: 11px;
    }
  </style>
</head>
<body>
    <center>
        <img id="img2" src="images/logo.png"/>
        <h1 id="register">Register</h1>
        <button id="button" onclick="location.href='mainwindow.html'">Main Menu</button>
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