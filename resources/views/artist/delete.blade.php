@extends('/artist/artist')

@section('title')
    Delete Music
@stop

@section('content')
    <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="text-center">Delete Music</h3>

                <form action="/artist/delete" method="POST">
                    Music ID:
                    <div class="form-group">
                        <input type="number" name="id" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </div>
                </form>
            </div>
    </div>
@stop