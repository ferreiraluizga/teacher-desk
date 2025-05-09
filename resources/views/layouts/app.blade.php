<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Teacher Desk</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>