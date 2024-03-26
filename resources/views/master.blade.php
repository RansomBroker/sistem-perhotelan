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
<body class="flex min-h-screen min-w-screen items-stretch">

    @include('includes.sidebar')

    <script src="{{ asset('src/js/jquery-3.7.1.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.sidebar-btn').click(function() {
               if ($('.sidebar').hasClass('active')) {
                   $('.sidebar').removeClass('active')
               } else {
                   $('.sidebar').addClass('active')
               }
            });
        })
    </script>
</body>
</html>
