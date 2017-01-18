<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('includes.head')
</head>
<body>


    

    <div id="wrapper">
        
            @include('layouts.sidebar')

            

            <div id="page-content-wrapper">
            <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
            <header class="row">
            @include('includes.header')
             </header>
            @yield('content')
            </div>
                </div>
            </div>
        </div>
            

    </div>


</body>
</html>

