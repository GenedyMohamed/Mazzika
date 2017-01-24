@extends('layout')

@section('title', $title)

@section('content')
	<?php extract($info)?>

	<div class = "item">
		<div id = "icon"><img src=""></div>

		<div id = "info">
			<p id = "title">{{$name}}</p>

			<p id = "attributes">
				<p id = "artist">song By {{$artist}}</p>
				<p>Created on {{$created_at}} </br>
				Reviewed {{$reviews_no}}</p>
			</p>
		</div>
	</div>


	<div class = "reviews">
		
	</div>
@endsection