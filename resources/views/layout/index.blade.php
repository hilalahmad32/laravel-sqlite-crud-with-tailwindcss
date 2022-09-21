<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-red-600 p-10">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-white">Laravel and Sqlite Crud</h1>
        </div>
    </div>
   @yield('content')
</body>
</html>