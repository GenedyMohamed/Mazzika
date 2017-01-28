@extends('/artist/artist')

@section('title')
    Delete Music
@stop

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">Delete Music</h3>

            @if(Session::has('success'))
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> Deleted Music
                    </div>
                @else
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Failed To Delete
                    </div>
                @endif
            @endif

            <form action="/artist/delete" method="POST">
                Music ID:
                <div class="form-group">
                    <input type="number" name="id" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@stop