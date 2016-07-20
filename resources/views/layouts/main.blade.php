<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css" crossorigin="anonymous">
    <style type="text/css">
        .navbar {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-faded">
        <div class="container">
            <a class="navbar-brand" href="#">Activity Feed</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts -->
</body>
</html>
