<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="http://bootstrap-3.ru/../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://bootstrap-3.ru/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="http://bootstrap-3.ru/../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">PHP Course</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php if (isset($_SESSION["user"])): ?>
                        <li><a href="#"><?php echo $_SESSION["user"]["login"]; ?></a></li>
                        <li><a href="/logout">Логаут</a></li>
                    <?php else: ?>
                        <li><a href="/login">Логин</a></li>
                        <li><a href="/register">Регистрация</a></li>
                    <?php endif;; ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="jumbotron">
        <h1>Регистрация</h1>
        <form method="post" action="/register" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" name="login" class="form-control" placeholder="Login"/>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password"/>
            </div>
            <div class="form-group">
                <input type="file" name="image" class="form-control"/>
            </div>
            <div class="form-group">
                <input type="submit" value="Регистрация" class="btn btn-danger">
            </div>
        </form>
    </div>

</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://bootstrap-3.ru/../../dist/js/bootstrap.min.js"></script>
</body>
</html>