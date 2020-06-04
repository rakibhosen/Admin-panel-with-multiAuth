@extends('frontend.layout.master')
@section('content')
<div class="container">

    <div class="col-lg-12 col-md-12 mt-12 section-padding">
        <div class="card content-top-space notice_show_section">
                <div class="card-body ">
                <h4 class="card-title ">{{ $notice->title }}</h4>
                <p class="card-text ">{{ $notice->description }}</p>
 
        </div>
  
        </div>
     
  
</div>
</div>
@endsection
