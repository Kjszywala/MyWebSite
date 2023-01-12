<?php 
    function open_connection(){
        global $connection;
        $server = "127.0.0.1";
        $user = "root";
        $password = "";
        $db = "restauracja";
    
        $connection = mysqli_connect($server, $user, $password) or exit("Cannot connect do database.");	

        if(!mysqli_select_db($connection, $db)) {
            // 1049 oznacza że baza nie istnieje
            if(mysqli_errno($connection) == 1049) {
                mysqli_select_db($connection, $db);
            }
            else echo("Cannot connect to $db <br>");
        }
        mysqli_set_charset($connection, "utf8");
    }

    function close_connection(){
        global $connection;
        mysqli_close($connection);
    }
?>