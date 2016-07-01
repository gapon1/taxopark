<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="style/style1.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>База даних</title>
</head>

<body>

<?php

$db = new mysqli('localhost', 'gapon', '123456', 'avtopark');
mysqli_set_charset($db,'utf8');
$sql="SELECT * FROM drivers";
$result = mysqli_query($db,$sql);
$myrow = mysqli_fetch_array($result);

do
{
printf ("Водій № - %s %s<br>%s<br>   Зарплата - %s<br><br> ",$myrow['id'],$myrow['names'],$myrow['s_name'],$myrow['salary'] );

}
while ($myrow = mysqli_fetch_array($result));



?>



</body>
</html>
