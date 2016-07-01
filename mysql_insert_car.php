<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="style/styleform.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Додавання користувача</title>
</head>

<body style="background-image: url(../image/12345.jpg)">

<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['number'])) {
    $number = $_POST['number'];
}


$db = new mysqli("localhost", "gapon", "123456", "avtopark");
mysqli_set_charset($db, "utf8");
$sql = "INSERT INTO car (name,number) VALUES ('$name','$number')";
$result = mysqli_query($db, $sql);
$myrow = mysqli_select_db($db, $result);

if ($result == 'true') {
    echo "<p>Ви успішно додали марку і номер автомобіля!</p>   <h2> <a href='index.php'>На головну</a> </h2>";

} else {
    echo "User das't addit!";
}


?>


</body>
</html>
