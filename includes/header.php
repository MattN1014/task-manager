<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">

        <title><?php if(isset($pageTitle)) echo $pageTitle; ?></title>

        <!-- Material Design for Bootstrap fonts and icons -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-material-design.css">
        <link rel="stylesheet" href="assets/css/ripples.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/default.css">

    </head>
    <body>
        <div class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Task Manager</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">
                                <i class="fa fa-plus"></i>
                                &nbsp; Create Task
                            </a>
                        </li>
                        <li>
                            <a href="tasks.php">
                                <i class="fa fa-eye-slash"></i>
                                &nbsp; View Tasks
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- app alert -->
        <div id="ajax_msg" class="alert alert-success"></div>