<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        {{--Contoh cara mereferensikan gambar di dalam file blade dengan menggunakan pendekatan Vite--}}
        <img class="img-thumbnail" src="{{Vite::asset('resources/images/main.svg') }}" alt="image">
    </div>
    @vite('resources/js/app.js')
</body>
</html>
