@extends("layouts.app")


@section("content")
    <h1>Create Post</h1>
    {!! \Collective\Html\FormFacade::open(["action" => '\App\Http\Controllers\PostsController@store', "method"=> "POST", "enctype" => "multipart/form-data"]) !!}
    <div class="form-group">
        {{\Collective\Html\FormFacade::label("title","Title")}}
        {{\Collective\Html\FormFacade::text("title","",["class"=>"form-control","placeholder"=>"Title"])}}
    </div>
    <div class="form-group">
        {{\Collective\Html\FormFacade::label("body","Body")}}
        {{\Collective\Html\FormFacade::textarea("body","",["id" => "article-ckeditor","class"=>"form-control","placeholder"=>"Body"])}}
    </div>
    <div class="form-group">
        {{\Collective\Html\FormFacade::file("cover_image")}}
    </div>
    {{\Collective\Html\FormFacade::submit("submit",["class"=>"btn btn-primary"])}}
    {!! \Collective\Html\FormFacade::close() !!}

@endsection
