@extends('layout')

@section('content')

<div class="row">
  <div class="col-md-4 col-md-offset-11 dropdown"><p class="lead">Sort by:
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">recent
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">name</a></li>
    <li><a href="#">views</a></li>
  </ul></p>
 </div>
</div>

<table class="table table-striped">
  ...
</table>

<div class="row">
  <div class="col-md-8">.col-md-8</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">.col-md-4</div>
</div>
<div class="row">
  <div class="col-md-6">.col-md-6</div>
  <div class="col-md-6">.col-md-6</div>
</div>

            <div class="content">
                <div class="title m-b-md top">
                    Music
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>


    </body>
</html>
@endsection
