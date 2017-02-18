<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{Config::get('biorez.main_page_title')}}</title>
    @include('layouts.header')
</head>
<body>
    <div class="container-full">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu">
                    @include('fragments.menu')
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @yield('content')
            </div>
        </div>
    </div>

    @include('layouts.footer')
</body>
</html>
