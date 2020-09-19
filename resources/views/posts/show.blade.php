@extends("layouts.app")


@section("content")
    <a href="/posts">Go Back</a>
    <h3>{{$post->title}}</h3>
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on{{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!! \Collective\Html\FormFacade::open(["action" => ["\App\Http\Controllers\PostsController@destroy",$post->id],"method"=>"POST", "class"=>"pull-right"]) !!}
    {{ \Collective\Html\FormFacade::hidden("_method","DELETE") }}
    {{ \Collective\Html\FormFacade::submit("Delete",["class"=>"btn btn-danger"]) }}
    {!! \Collective\Html\FormFacade::close() !!}
@endsection
