@extends('frontend.layout.master')
@section('content')
<div class="container">

    <div class="col-lg-12 col-md-12 mt-12 section-padding">
        <div class="card content-top-space event_show_section">
            <img src="{{ asset('image/event/'.$event->image) }}" class="event_show_img ">
                <div class="card-body ">
                <h4 class="card-title ">{{ $event->title }}</h4>
                <p class="card-text ">{{ $event->description }}</p>
 
        </div>
  
        </div>
     
  
</div>
</div>
@endsection
