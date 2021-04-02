<<?php error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Al shifa Hospital</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/JannaLTRegular.css">
    
</head>
<body>
    <div class="main">
        <div class="logo">
            <img src="img/logo.png">
            <h2>عيادة الدكتور احمد سامي طعيمه </h2>
        </div>
        <div class="book">
            <p>اهلا بك في عياده الدكتور احمد سامي طعيمه  ,, للحجز املء الإستمارة أدناة</p>
            <form action="index.php" method="post">
                <input type="text" placeholder="أدخل الاسم" name="name"/>
                <input type="text" placeholder="أدخل البريد الالكتروني" name="email"/>
                <input type="date" name="date"/>
                <input type="submit" value="احجز الان" name="send"/>
            </form>

            <?php
error_reporting(0);
            // الاتصال بالسيرفر او قاعدة
            $host               = "localhost";
            $user               = "root";
            $password      = "";
            $dbName       = "ahmed";
        
            $conn = mysqli_connect($host, $user, $password,$dbName);

            // ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات

                $Name          = $_POST['name'];
                $Email           = $_POST['email'];
                $Date            = $_POST['date'];
                $Send            = $_POST['send'];

            
                if($Send){
                    $query = "INSERT INTO mo(name,email,date) VALUE('$Name ','$Email ','$Date ')";
                    $result = mysqli_query($conn,$query);
                    echo "<p style='color:green'>" . "تم الحجز" . "</p>";
                }
                else{
                    echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";
                }


            ?>


        </div>
    </div>
</body>
</html>