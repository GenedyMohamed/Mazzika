@extends('layout')

@section('content')
        <div class="row">
            <div class="col-md-3 col-md-offset-4">
                <h1>Log in</h1>
                <form method="post">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" placeholder="username" name = "username">
                    </div>

                    <div class="form-group">
                        <label> Password: </label>
                        <input type="text" class="form-control" placeholder="password" name = "password">
                    </div>
                    <div class = "form-group">
                        <label>Log in as: </label>
                        <label class = "radio-inline">
                            <input type="radio" name = "usertype" value = "parent"> user
                        </label>

                        <label class = "radio-inline">
                            <input type="radio" name = "usertype" value = "teacher"> artist
                        </label>
                        <br>
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                    <br>

                    <br>
                </form>
            </div>
        </div>
    @endsection