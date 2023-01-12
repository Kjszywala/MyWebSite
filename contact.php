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
        background-image: url("images/photo6.jpg");
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
    #textbox{
        border: 2px;
        border-radius: 4px;
        background-color: lightblue;
        size: 10;
        height: 30;
    }
    #messagetextbox{
        border-radius: 4px;
        background-color: lightblue;
        height: 160;
        width: 100%;
        word-wrap: break-word;
        word-break: break-word;
        
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
        font-family: brush script mt, cursive;
    }
    #button:hover{
        background-color: #5ccc44;
    }
    #register{
        color: black;
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
        <h1 id="register">Contact Us</h1>
        <button id="button" onclick="location.href='mainwindow.html'">Main Menu</button>
        
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