
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>RMI SRL</title>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-ui.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link rel="shortcut icon" type="image/png" href="img/pin.png"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/media.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery-ui.theme.css" rel="stylesheet" type="text/css"/> 
        <link href="css/main.css" rel="stylesheet" type="text/css"/> 
        <style>
            .fondoCabecera{
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#1e5799+0,2989d8+65,2989d8+65,7db9e8+100 */
                background: rgb(30,87,153); /* Old browsers */
                background: -moz-linear-gradient(-45deg, rgba(30,87,153,1) 0%, rgba(41,137,216,1) 65%, rgba(41,137,216,1) 65%, rgba(125,185,232,1) 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(-45deg, rgba(30,87,153,1) 0%,rgba(41,137,216,1) 65%,rgba(41,137,216,1) 65%,rgba(125,185,232,1) 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(135deg, rgba(30,87,153,1) 0%,rgba(41,137,216,1) 65%,rgba(41,137,216,1) 65%,rgba(125,185,232,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#7db9e8',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="cabecera fondoCabecera">
                    <img style="margin-top: 1%;" src="img/logo.png">
                </div>
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Project name</a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#contact">Contact</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header">Nav header</li>
                                        <li><a href="#">Separated link</a></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="menu">
                    <ul style="margin-top: 5px;" class="nav nav-pills nav-stacked ">
                        <li role="presentation" class="active"><a href="abm/Busqueda/Busqueda.php" target="central">Busqueda</a></li>
                        <li role="presentation"><a href="abm/Reporte/Reporte.php" target="central">Reporte</a></li>
                        <li role="presentation"><a href="abm/Auditoria/Auditoria.php" target="central">Auditoria</a></li>
                    </ul>
                </div>
                <div style="margin: 0px;margin-top: 5px;" class="principal">
                    <iframe src="" style="width: 100%;height: 600px;" name="central" frameBorder="0"></iframe>
                </div>
            </div>
        </div>
    </body>
</html>