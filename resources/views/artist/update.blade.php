@extends('/artist/artist')

@section('title')
    Update Music
@stop


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">Update Music</h3>

            <form action="/artist/update" method="POST">
                Music ID:
                <div class="form-group">
                    <input type="number" name="id" class="form-control">
                </div>
                New Name:
                <div class="form-group">
                    <input type="text" name="name" class="form-control">
                </div>
                New Link:
                <div class="form-group">
                    <input type="text" name="link" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@stop
