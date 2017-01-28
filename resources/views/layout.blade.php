<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">


      <title>Mazzika - @yield('title')</title>
    <!-- Latest compiled and minified CSS -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- latest compiled and minified js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src= "/js/jquery-3.1.1.min.js"></script>

 <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<!-- this is the css for the layout -->
<link rel = "stylesheet" href="/css/layout.css" type="text/css"/>

<!--Here goes any neccessary style sheets -->
@yield('style')


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
                    <span>
                        TechHub © 2017
                    </span>
                </div>
            </footer>
            @show
</body>
</html>
