<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('admin') }}">Dashboard</a></li>
                <li><a href="{{ url('admin/projects') }}">Projects</a></li>
                <li><a href="{{ url('admin/projects/add') }}">Add project</a></li>
                <li><a href="{{ url('') }}">Logout</a></li>
            </ul>
        </nav>
    </header>

    @yield('body')

    <footer>
        <div>
            <span>All rights reserved</span>
        </div>
    </footer>
</body>

</html>
