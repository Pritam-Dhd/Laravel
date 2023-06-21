<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('bootstrapCss')
    <title>Document</title>
</head>
<body>
    <x-header name="About"/>
    <h1>About Page</h1>
    <div class="alert alert-primary" role="alert">
        This is a primary alert—check it out!
    </div>
    <div class="alert alert-secondary" role="alert">
        This is a secondary alert—check it out!
    </div>
    {{URL::previous()}}
</body>
</html>