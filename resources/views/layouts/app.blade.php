<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Education</title>
    <link rel="stylesheet" href="{{ URL::asset('mdbootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('mdbootstrap/css/mdb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('mdbootstrap/css/mdb.lite.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('uikit-3.3.1/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('uikit-3.3.1/css/uikit-rtl.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/svg-with-js.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fontawesome/css/v4-shims.css') }}">
    <style>
        body {
            font-family: Catamaran;
        }

        @font-face {
            font-family: Catamaran;
            src: url("{{ URL::asset('fonts/Catarman/Catamaran-Medium.ttf') }}");
        }
    </style>
    @yield('style')
</head>
<body>
<!-- navbar -->
    @include('included.navbar')
<!-- /. navbar -->

<!-- sections -->
    @yield('home')
    @yield('information')
    @yield('group')
    @yield('teacher')
<!-- /. sections -->



<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('mdbootstrap/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('mdbootstrap/js/mdb.js') }}"></script>
<script src="{{ URL::asset('uikit-3.3.1/js/uikit.js') }}"></script>
<script src="{{ URL::asset('mdbootstrap/js/popper.js') }}"></script>
</body>
</html>
