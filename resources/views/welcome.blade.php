@extends("layouts.app")

@section("content")
    <div class="jumbotron text-center">
        <h1>Welcome</h1>
        <p>{{$title_name}}</p>
        <p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Login</a>
            <a class="btn btn-success btn-lg" href="#" role="button">Register</a>
        </p>
    </div>

@endsection

