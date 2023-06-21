<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-header name="Home"/>
    <h1>Home Page</h1>
    {{URL::current()}}
    <br>
    <a href="{{URL::to('/about')}}">About</a>
    <a href="{{URL::to('/contact')}}">Contact</a>
    @include('inner')
</body>
</html>