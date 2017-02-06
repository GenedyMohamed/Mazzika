@extends('layout')
@section('content')


<div class="row">
  <div class = "col-md-1 col-md-offset-10">Sort By:</div>
  <div class="col-md-1 dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">recent
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">name</a></li>
    <li><a href="#">views</a></li>
  </ul>
 </div>
</div>
<br>

<table class="table table-striped">
  <tr>
    <td>Name</td>
    <td>Reviews</td>
    <td>Link</td>
    <td>Created at</td>
    <td>Artist</td>
  </tr>
  <?php
  foreach ($music as $song){
  ?>
  <tr>
    <td><a href={{'/m/'.$song->name}}><?php echo $song -> name ?></a> </td>
    <td><?php echo $song -> reviews_no ?> </td>
    <td><?php echo $song ->  link ?> </td>
    <td><?php echo $song -> created_at ?> </td>
    <td><?php echo $song -> artist_id ?> </td>
  </tr>
<?php
}
?>
</table>
        </div>
    </body>
</html>
@endsection
