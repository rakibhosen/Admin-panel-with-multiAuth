@extends('frontend.layout.master')
@section('content')
<div class="container">

    <div class="col-lg-12 col-md-12 mt-12 section-padding">
        <div class="card content-top-space message_show_section">
            <img src="{{ asset('image/message/'.$message->image) }}" class="message_show_img ">
                <div class="card-body ">
                <h4 class="card-title ">{{ $message->title }}</h4>
                <p class="card-text ">{{ $message->description }}</p>
 
        </div>
  
        </div>
     
  
</div>
</div>
@endsection
