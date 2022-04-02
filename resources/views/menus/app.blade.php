<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <meta http-equiv="X-ua-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @include("menus.nav")
    @yield('content')
</body>
</html>
