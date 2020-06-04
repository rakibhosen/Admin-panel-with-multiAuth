<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.partials.style')


</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!--===============================================================================-->

    <!--====== nav Start ======-->

    @include('frontend.partials.nav')
    <!--====== nav End ======-->

    @yield('content')



    

    <!--====== footer section end======-->
    @include('frontend.partials.top_footer')
    <!--====== footer section end======-->


    <!--====== footer section end======-->
    @include('frontend.partials.footer')
    <!--====== footer section end======-->



    <!--====== footer section end======-->
    @include('frontend.partials.script')
    <!--====== footer section end======-->


    </body>
</html>
