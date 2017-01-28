@extends('layout')

@section('content')
	<style>

		h1, p
		{
			text-align: center;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            display:block;
            width:50%;
        }

        p
        {
        	font-size:20px;
        }
	</style>
	<h1>{{$head}}☹️</h1>
	<p>{{$body}}</p>
@endsection