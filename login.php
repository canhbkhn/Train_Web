<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="refresh" content="3;url=mainpage.html">
</head>
    <body>
       Welcome <?php echo $_POST["username"]; ?><br>
       Your email address is: <?php echo $_POST["password"]; ?>
    </br>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database_name = "test";

            $conn  =  new mysqli($servername,$username,$password,$database_name);
            if($conn->connect_error)
            {
                die("can not connect to database: ".$conn->connect_error);
            }

            $query = "SELECT username, password FROM user";
            $result = $conn->query($query);

            if(($_POST["username"] != "") && ($_POST["password"] != ""))
            {
                echo "Đăng nhập thành công! \n";
                echo "Đang chuyển hướng...";
            }

            else{
                echo "Ket noi that bai";
            }
        ?>
    </body>
</html>