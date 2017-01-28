@extends('layout')

@section('title')
    Artist
@stop

@section('navbar')
    <nav class="navbar navbar-inverse">
        <a href="" class="navbar-brand">My Music</a>
        <a href="" class="navbar-brand">Upload</a>
        <a href="/artist/delete" class="navbar-brand">Delete</a>
        <a href="/artist/update" class="navbar-brand">Update</a>
    </nav>
@stop

@section('footer')
    <footer class="navbar-fixed-bottom">
        <p class="text-center">
            TechHub © 2017
        </p>
    </footer>
@stop