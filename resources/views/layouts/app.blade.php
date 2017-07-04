<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Todo List</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/app.css" />
</head>
<body>

    <div class="wrapper">
        @include('inc/navbar')

        <div class="container content">
            @include('inc.messages')
            
            @yield('content')

        </div>

        <footer id="footer" class="text-center">
            <p>Copyright {{date('Y')}} &copy; Acme </p>
        </footer>
    </div>
</body>
</html>