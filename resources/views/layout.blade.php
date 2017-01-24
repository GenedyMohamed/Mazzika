<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Mazzika - {{$title}}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">   
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">      
    <link href = "/css/layout.css" rel = "stylesheet" type = "text/css"/>
</head>
<body>
    <div id = "wrap">

        @section('navbar')
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Mazzika</a>
                    </div>

                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                    </ul>
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">Explore Music</a></li>
                    </ul>

                </div>
            </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </div>

        @section('footer')
            <footer class="footer" id = "footer">
                <div class="container">
                    <br>
                    <span id = "cpr">
                        TechHub © 2017
                    </span>
                </div>
            </footer>
            @show
</body>
</html>
