<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        @import "UTF-8";

        body {
            min-height: 100vh;
            padding-bottom: 100px;
            position: relative;
            background-color: rgba(0, 0, 0, 0.658);
        }

        header {
            background-color: #fff;
            border-bottom: 1px solid #ccc;
        }

        h1 {
            color: #c3e6cb
        }

        .row {
            margin: 0;
        }

        .btn-primary {
            background-color: #f2a340;
            border: 2px solid #c28008;
        }

        .btn-primary:hover {
            background-color: #c28008;
            border-color: #c28008;
        }

        .msg {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            width: 70%;
            margin-bottom: 0;
            text-align: center;
            padding: 10px;

        }

        /* navbar */
        #navbar {
            justify-content: space-between;
            padding: 5px 0;
        }

        #navbar a {
            font-size: 14px;
            color: #757575;
        }

        #navbar a:hover {
            color: #f2a340;
        }

        /* footer */

        footer {
            text-align: center;
            background-color: #353e48;
            color: #fff;
            padding: 30px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin-bottom: 0;
        }

    </style>

    @livewireStyles
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/api/ricks" class="nav-link">Listar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/api/ricks/3" class="nav-link">Filtar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')
    {{ $slot }}

    @livewireScripts
    <footer>
        <p>Kelvin &copy; 2022</p>
    </footer>
</body>

</html>
