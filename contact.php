<html>
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
    <center>
        <img id="img2" src="images/logo.png"/>
        <h1 id="register">Contact Us</h1>
        <button id="button" onclick="location.href='mainwindow.php'">Main Menu</button>
        
    </center><br>
<div id="rcorners1" >
    <center>
        <form method=POST action="">
            <table>
                <br>
                <tr>
                    <h4 id="register">Please fill this form in a decent manner</h4>
                </tr>
                <tr>
                    <td><b>Full Name:</b></td>
                    <td><input type="text" name="fullname" maxlength="255" id="textbox"/></td>
                </tr>
                <tr>
                    <td><b>E-mail:</b></td>
                    <td><input type="text" name="email" maxlength="255" id="textbox"/></td>
                </tr>
                <tr>
                    <td><b>Message:</b></td><br>
                </tr>
                <tr>
                    <td colspan="2" style="width: 100%;"><textarea name="message" maxlength="255" id="messagetextbox"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-top: 30px;">
                    <input type=submit name="singUp" id="test" value='SUBMIT' style='width: 100%;'></td>
                </tr>
            </table> 
        </form>
    </center>
</div>
</body>
</html>