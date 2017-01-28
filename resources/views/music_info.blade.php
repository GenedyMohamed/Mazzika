@extends('layout')

@section('title', $title)

@section('style')
<link href="/css/music.css" rel = "stylesheet" type = "text/css"/>
<link rel="stylesheet" href="/css/font-awesome.min.css">
<script src= "/js/like.js"></script>
@endsection
@section('content')
	<?php extract($info)?>

	<div class = "item">
		<div id = "icon"><img src="/img/default_music.jpg" alt = "{{$name}}"></div>

		<div id = "info">
			<span id = "title">
				<p>{{$name}}</p>
			</span>
			<span id = "attr">
				<p id = "artist">song By {{$artist}}</p>
				<p>Created on {{$created_at}} </p>
				<p>{{$likes}}  
				@if(auth::check())
					<i class="fa fa-thumbs-up" aria-hidden="true" style = "color:{{$like_color}}" id = "thumb"></i>
				@endif
				</p>
			</span>
		</div>
	</div>
	
	<div class = "reviews">
		@if($reviews_no == '0')
			<p>No Reviews for this song yet !</p>
		@else
		<p id = "head">reviews</p>
		<table>
			<?php
				$n = sizeof($reviews);
				for($i = 0; $i < $n; $i++)
				{
						echo('<tr id = "rev">');

						// profile picture
						echo('<td id = "ico">'. '<img src = "/img/default_user.png"/>' . '</td>');

						// information
						echo('<td id = "content">');
						echo('<p id = "user">' . $users[$i] . '</p>');
						echo('<p id = "text">' . $reviews[$i]['review'] . '</p>');
						echo('<p id = "date">' . $reviews[$i]['created_at'] . '</p>');
						echo("</td>");

						echo('</tr>');
				}
			?>
		</table>
		@endif
	</div>
		<div>
	        <form class="submit_review" method = "post" action = "/post">
	            <div class="form-group">
	                <input name = "review" type="text" class="form-control" placeholder = "Your Review Goes Here">
	                 <input name = "music_id" type = "hidden" value = "{{$id}}"> 
	            </div>
	            <button type="submit" class="btn btn-primary glyphicon glyphicon-pencil"> submit</button>
	            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
	        </form>
	        
		</div>
<<<<<<< HEAD

=======
	@endif
>>>>>>> fd6467bfec8964e2f14b6eed87d2c53f243a1cee
@endsection