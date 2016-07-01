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
$sql="SELECT * FROM rospis";
$result = mysqli_query($db,$sql);
$myrow = mysqli_fetch_array($result);

do
{
printf ("Водій № - %s<br>Час початку роботи  -   %s<br>Час закінчення роботи  - %s<br> Відпрацьовані години  - %s<br> Місто  - %s<br><br>",$myrow['id'],$myrow['enter'],$myrow['exit'],$myrow['total'],$myrow['citi'] );
}
while ($myrow = mysqli_fetch_array($result));

?>



</body>
</html>
