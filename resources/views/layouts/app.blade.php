<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script
  src="https://code.jquery.com/jquery-3.7.0.min.js"
  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
  crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <span class="brand">
            <a href="/">
                <img src="{{ asset('asset/images/logo.png') }}" class="brand" alt="axis bank logo" srcset="">
            </a>
            <h1>Badhti Ka Naam Zindagi</h1>
        </span>
    </nav>
    @yield('content')
    <footer class="footer">

        <p>Copyright 2023 | https://bonuscardss.redeems.co.in</p>

    </footer>
</body>

</html>
