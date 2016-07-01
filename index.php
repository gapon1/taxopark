<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/jquery-3.0.0.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <meta charset="UTF-8"/>
    <title>Document</title>

</head>
<body>


<div class="container" id="wrapper">

    <!--     Початок header         -->

    <div class="row" id="header">
        <div class="col-md-10 ">
            <nav id="menu" class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">MY AVTOPARK</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href='index.php'>Home</a></li>
                        <li><a href="#">Drivers</a></li>
                        <li><a href="#">Car</a></li>
                        <li><a href="#">Rout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="col-md-1"></div>

        </div>
    </div>

    <!--  Початок контенту     -->
    <div class="row" id="content">
        <div class="col-md-3 sidebar" id="side">
            <h3> Додати користувача</h3>
            <form id="form" class="navbar-form navbar" action="mysql_insert_site.php" method="post" name="form">

                <div class="form">
                    <div class="form-group ">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <p><input name="name" type="text" class="form-control" placeholder="Імя"></p>
                        </div>
                    </div>
                    <br><br>


                    <div class="form-group">
                        <label class="control-label">Lastname</label>
                        <div class="controls">
                            <input name="lastname" type="text" class="form-control" placeholder="Прізвище">
                        </div>
                    </div>
                    <br><br>


                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input name="email" type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <br>

                    <div class="form-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <input type="submit" class="form-control btn-success " value="Додати">
                        </div>
                    </div>
                    <a href="https://secure.php.net/manual/ru/"> <img src="image/help.png" class="image"></a>
                </div>
            </form>

        </div>
        <div class="col-md-9">

            <!--Початок розділу з таблицями -->

            <div id="formvod">

                <form class="form-inline" action="mysql_insert_driver.php" method="post" name="form">

                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input name="names" type="text" class="form-control" placeholder="Jane Doe">
                    </div>

                    <div class="form-group">
                        <label class="control-label">Last name</label>
                        <input name="s_name" type="text" class="form-control" placeholder="Popov">
                    </div>

                    <button type="submit" class="btn btn-danger ">Додати водія</button>
                </form>


            </div>

            <div id="formavt">
                <form class="form-inline" action="mysql_insert_car.php" method="post" name="form">
                    <div class="form-group">
                        <label for="exampleInputName2">Car name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName2"
                               placeholder="Mersedes">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Car number</label>
                        <input name="number" type="text" class="form-control" placeholder="AA9809BB">
                    </div>

                    <button type="submit" class="btn btn-danger ">Додати автомобіль</button>
                </form>
            </div>

            <div id="formrosp">
                <form class="form-inline" action="mysql_insert_rospis.php" method="post" name="form">
                    <div class="form-group">
                        <label for="exampleInputName2">Enter</label>
                        <input name="почав" type="datetime" class="form-control" placeholder="Time 2016-06-01 09:00:00">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">&nbsp&nbsp&nbsp&nbspExit</label>
                        <input name="закінчив" type="datetime" class="form-control"
                               placeholder="Time 2016-06-01 18:00:00 ">
                    </div>

                    <button type="submit" class="btn btn-danger ">Додати час відправлення</button>
                </form>
            </div>
            <a href="mysql3.php">
                <button id="btnvb" type="button" class="btn btn-warning"> Вибірка маршрутів водіїв автомобілів</button>
            </a>


            <!--    Початок футеру -->

        </div>

    </div>


    <div class="row" id="footer">
        <div class="col-md-12">
            <div class="col-sm-4">

                <h3><span class="glyphicon glyphicon-bullhorn"></span> Остані статті</h3>
                <ul>
                    <li><a href="#"><p class="glyphicon glyphicon-search"> Стаття номер - 1</p></a></li>
                    <li><a href="#"><p class="glyphicon glyphicon-search"> Стаття номер - 2</p></a></li>
                    <li><a href="#"><p class="glyphicon glyphicon-search"> Стаття номер - 3</p></a></li>
                </ul>
            </div>

            <div class="col-sm-4" id="col2">
                <h3><span class="glyphicon glyphicon-leaf"></span> Загальне</h3>
                <ol>
                    <li>FAQ</li>
                    <li>Регістрація</li>
                    <li>Контакти</li>
                    <li>Зворотній звязок</li>

                </ol>
                <img src="image/li.png" class="imlin">


            </div>
            <div class="col-sm-4" id="col3">
                <h3><span class="glyphicon glyphicon-earphone"></span> Звязок</h3>
                <ul>
                    <li><a href="https://www.facebook.com/">Facebook </a></li>
                    <li><a href="https://twitter.com/?lang=uk"> Twitter </a></li>
                    <li><a href="https://www.google.com.ua/"> Google </a></li>
                </ul>
                <img src="image/li.png" class="imlin1">
            </div>

        </div>


    </div>
</body>
</html>