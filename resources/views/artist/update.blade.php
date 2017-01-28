@extends('/artist/artist')

@section('title')
    Update Music
@stop


@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3 class="text-center">Update Music</h3>

            @if(Session::has('success'))
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        <strong>Success!</strong> Updated Music
                    </div>
                @else
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Failed To Update
                    </div>
                @endif
            @endif

            <form action="/artist/update" method="POST">
                Music ID:
                <div class="form-group">
                    <input type="number" name="id" class="form-control" required>
                </div>
                New Name:
                <div class="form-group">
                    <input type="text" name="name" class="form-control">
                </div>
                New Link:
                <div class="form-group">
                    <input type="text" name="link" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@stop
