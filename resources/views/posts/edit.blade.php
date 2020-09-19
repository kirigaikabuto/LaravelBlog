@extends("layouts.app")


@section("content")
    <h1>Edit Post</h1>
    {!! \Collective\Html\FormFacade::open(["action" => ['\App\Http\Controllers\PostsController@update',$post->id], "method"=> "POST"]) !!}
    <div class="form-group">
        {{\Collective\Html\FormFacade::label("title","Title")}}
        {{\Collective\Html\FormFacade::text("title",$post->title,["class"=>"form-control","placeholder"=>"Title"])}}
    </div>
    <div class="form-group">
        {{\Collective\Html\FormFacade::label("body","Body")}}
        {{\Collective\Html\FormFacade::textarea("body",$post->body,["id" => "article-ckeditor","class"=>"form-control","placeholder"=>"Body"])}}
    </div>
    {{\Collective\Html\FormFacade::hidden("_method","PUT")}}
    {{\Collective\Html\FormFacade::submit("Update",["class"=>"btn btn-primary"])}}
    {!! \Collective\Html\FormFacade::close() !!}

@endsection
