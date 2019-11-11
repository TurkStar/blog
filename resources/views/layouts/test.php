<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name', 'Blogger')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('article-ckeditor');
</script>
</body>
</html>
