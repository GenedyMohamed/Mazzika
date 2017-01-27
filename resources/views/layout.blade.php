<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        html,
        body {
            height: 100%;
            /* The html and body elements cannot have any padding or margin. */
        }

        /* Wrapper for page content to push down footer */
        #wrap {
            min-height: 100%;
            height: auto !important;
            height: 100%;
            /* Negative indent footer by its height */
            margin: 0 auto -50px;
            /* Pad the bottom by footer height */
            padding: 0 0 50px;
        }

        /* Set the fixed height of the footer here */
        footer {
            height: 50px;
            background-color: #090909;
        }


        /* Custom page CSS
        -------------------------------------------------- */
        footer > p {
            padding: 0 125px;
        }
    </style>
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