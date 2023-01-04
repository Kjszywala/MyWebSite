<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <style>
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
        padding: 20px;  
        width: auto;
        margin-left: 40px;
        margin-right: 40px;
        height: 60%;
        opacity: 0.9;
        background-size: 100% 100%;
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
    input[type=text] {
        border: 2px;
        border-radius: 4px;
        background-color: lightblue;
        size: 10;
        height: 30;
    }
    #img1{
        border-radius: 30%;
        width: 350px;
        height: 300px;
    }
    #img2{
        width: 250px;
        height: 100px;
    }
  </style>
</head>
<body>
    <center>
        <img id="img2" src="images/logo.png"/>
    </center><br>
<div id="rcorners1" >
    <div style="background-color: transparent; width: 50%; height: 500px; float:left;">
    <br><center>
        <h2>Login</h2>
        <h5>Sign in to get most from our restaurant</h5>
        <form method=POST action="">
            <table>
                <tr>
                    <td><b>Login</b></td>
                    <td><input type="text" name="login" maxlength="255"/></td>
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input type="text" name="password" maxlength="255"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type=submit name="singIn" id="test" value='Sign In' style='width: 100%;'></td>
                </tr>
                <tr>
                    <td colspan="2"><input type=submit name="singUp" id="test" value='Sign Up' style='width: 100%;'></td>
                </tr>
                <tr>
                    <td colspan="2"><input type=submit name="back" id="test" value='Main Menu' style='width: 100%;'></td>
                </tr>
            </table>
        </form>
    </center>
    </div>
    <div style="background-color: transparent; width:50%; height: 500px; float:left;">
    <br><center>
        <h2>SERVED EVERY DAY SINCE 1990</h2>
        <h5>
        Restaurant opened on Thanksgiving Day 1990. Chef / Owner Ron<br>Silver began baking pies and selling them to restaurants and his neighbors<br>out of a small kitchen at the corner of Hudson and North Moore St. in<br>Tribeca. Today, NYC’s beloved restaurant and pie shop celebrates 32<br>years of classic, made from scratch American cooking.
        </h5>
        <img id="img1" src="images/old.jpg" sizes="10"/>
    </center>
    </div>
</div>
</body>
</html>