<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    @vite('resources/css/app.css')
</head>
<body class="flex min-h-screen w-full items-stretch">
    <main class="min-h-0 flex-1 flex overflow-hidden">
        @include('includes.sidebar')
        <div class="p-4 lg:p-10 w-full">
            @include('includes.navbar')
            <h1>Test</h1>
        </div>
    </main>

    <script src="{{ asset('src/js/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $('.sidebar-close').click(function() {
                $('.sidebar').addClass('active')
            });

            $('.sidebar-open').click(function() {
                $('.sidebar').removeClass('active')
            });
        })
    </script>
</body>
</html>
