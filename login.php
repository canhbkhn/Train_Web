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
            if(($_POST["username"] != "") && ($_POST["password"] != ""))
                echo "Đăng nhập thành công! \n";
                echo "Đang chuyển hướng...";
        ?>
    </body>
</html>