<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="style/styleform.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"  >
<title>Додавання користувача</title>
</head>

<body style="background-image: url(../image/12345.jpg)">

<?php 

if (isset($_POST['names']))
{
$names = $_POST['names'];
}

if (isset($_POST['s_name']))
{
$s_name = $_POST['s_name'];
}



$db = new mysqli("localhost","gapon","123456","avtopark");
mysqli_set_charset( $db,"utf8");
$sql = "INSERT INTO drivers (names,s_name) VALUES ('$names','$s_name')";
$result = mysqli_query ($db,$sql);
$myrow = mysqli_select_db($db,$result);

if ($result == 'true')
{
echo "<p>Ви успішно додали водія!</p>   <h2> <a href='index.php'>На головну</a> </h2>";

}
else 
{
echo "User das't addit!";
}


?>


</body>
</html>
