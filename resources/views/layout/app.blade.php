<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="{{asset('./resources/css/style.css')}}"> -->
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
</head>
<body>

    <ul>
        <li>
            <a href="/">Home</a>
        </li>
        <li>
            <a href="{{route('groceries.create')}}">Hello, There</a>
        </li>
    </ul>

    @yield('content')

</body>
</html>

