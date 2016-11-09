<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{Config::get('biorez.main_page_title')}}</title>
    @include('layouts.header')
</head>
<body>
    <div class="menu">
        @include('layouts.menu')
    </div>
    <div class="container">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
