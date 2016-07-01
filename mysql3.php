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
$sql="SELECT * FROM drivers
         LEFT JOIN car ON drivers.ID_D=car.id
         LEFT JOIN rospis ON  car.ID_B=rospis.id";
$result = mysqli_query($db,$sql);
$myrow = mysqli_fetch_array($result);

do
{
printf ("<table border='1'><th> Водій № - %s<br>%s<br>%s<br> автомоділь №  %s   %s<br>Номер авто -  %s<br>Маршрут № -  %s<br> почав роботу - %s<br> закінчив роботу - %s<br><br></th></table>",$myrow['id'],$myrow['names'],$myrow['s_name'],$myrow['id'],$myrow['name'],$myrow['number'],$myrow['id'],$myrow['почав'],$myrow['закінчив']);

}

while ($myrow = mysqli_fetch_array($result));

?>



</body>
</html>
