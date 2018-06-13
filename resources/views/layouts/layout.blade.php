<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='{{asset("css/app.css")}}'>
    <link href="https://fonts.googleapis.com/css?family=Exo|Krona+One|Kaushan+Script" rel="stylesheet">
    <title>Portofolio</title>
</head>

<body>
    {{-- pour rajouter les blades --}}
    @include('partials.nav')
{{-- rajouter bout de code du welcome --}}
    @yield('header')

    @yield('content')

    @yield('form')
{{-- pour rajouter les blades --}}
    @include('partials.footer')
<script src='{{asset("js/nav.js")}}'></script>
</body>

</html>