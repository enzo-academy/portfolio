<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header>
        <div class="wrapper">
            <nav>
                <ul>
                    <li><a href="{{ url('') }}">Home</a></li>
                    <li><a href="{{ url('projects') }}">Projects</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('body')

    <footer>
        <div class="wrapper">
            <span>All rights reserved</span>
            <span><a href="{{ url('legal-notices') }}">Legal notices</a></span>
        </div>
    </footer>
</body>

</html>
