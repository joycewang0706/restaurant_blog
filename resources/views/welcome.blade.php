<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>restaurant in asia</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{--@include('link')--}}



    </head>
    <body >
    <div class="container" style="width: 1920px;height: 1080px;">
        <div class="bar">
            @include('layouts.inc.navbar')
            <div class="panel">
                <div class="background" style="background:#3B3B3C;
                width: 1920px;
                height: 1080px;
                position: absolute;
                left: 0px;
                top: 50px;">
                </div>
                <div class="restaurant_table">
                @include('res_table')
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">

        </div>
        {{--@yield('content')--}}
        {{--@yield('bar')--}}
    </div>
    {{--@include('footer')--}}
    </body>
</html>
