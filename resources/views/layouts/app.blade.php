<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}}</title>
</head>
<body>
@include("inc.navbar")
<div class="container">
    @include("inc.messages")
    @yield("content")
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#article-ckeditor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
