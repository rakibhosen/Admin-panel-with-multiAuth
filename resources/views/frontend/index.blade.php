@extends('frontend.layout.master')
@section('content')

    <!--====== slider start ======-->
    @include('frontend.partials.slider')
    <!--====== slider end ======-->

    <!--====== slider start ======-->
    @include('frontend.partials.message_slider')
    <!--====== slider end ======-->

    <!--====== about section start ======-->
    @include('frontend.partials.mission')
    <!--====== about section end ======-->


    <!--====== about section start ======-->
    @include('frontend.partials.brand')
    <!--====== about section end ======-->


    <!--====== my client section start ======-->
        @include('frontend.partials.client')
    <!--====== client section end ======-->


    <!--====== my client section start ======-->
        @include('frontend.partials.growth')
    <!--====== client section end ======-->
    

    <!--====== blog section start ======-->
    @include('frontend.partials.events')
    <!--====== blog section end======-->


    
    @endsection