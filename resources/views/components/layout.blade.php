<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar/>
    @if (session('message'))
        <div class="alert alert-success ">
            <p>{{session('message')}}</p>
        </div>
    @endif
    @if (session('errorMessage'))
    <div class="alert alert-danger ">
        <p>{{session('errorMessage')}}</p>
    </div>
@endif
    {{$slot}}
    <x-footer/>
</body>
</html>