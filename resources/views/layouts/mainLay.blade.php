<html>

<head>
    <title> @yield('title') </title>
</head>

<body>
    
    @include('include.header')
    @yield('body')
    @include('include.footer')
</body>


</html>