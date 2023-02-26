<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPD8</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ url('tema/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    @yield('style')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('_layout.nav')
        @yield('content')
        @include('_layout.footer')
    </div>
    <script src="{{ url('tema\js\script.js') }}"></script>
    @yield('script')
</body>

</html>
