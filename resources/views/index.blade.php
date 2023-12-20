@extends('layout.main')
@section('content')
<div class="banner container-fluid">
  <div class="container p-5">
    <div class="row">
      <div class="col-lg-8 ">
        <h2 class="text-white">Welcome to iBlogger..</h2>
        <a href="#" class="btn btn-primary rounded-pill mt-5">Start Reading....</a>
      </div>
      <div class="col-lg-4">
        <img src="images/blogs.png" alt="" width="300px" height="300px">
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row p-2">
    @foreach ($posts as $item)
    <div class="col-lg-8 mb-3">
      <div class="card bg-light" style="width: 80%;">
        <img src="{{ asset('images/g1.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-text text-dark">{{ $item->p_title }}</a>
          <p>{{ $item->p_description }}</p>
        </div>
      </div>
    </div>
    @endforeach
   
    <div class="col-lg-4">
      <p class="bg-success w-50 text-center text-white">Latest Blogs</p>
      <div class="latest-blog border">
        <ul>
          <li>Web development</li>
          <li>Web development</li>
          <li>Web development</li>
          <li>Web development</li>
          <li>Web development</li>
        </ul>
      </div>
      <p class="bg-success w-50 mt-3 text-center text-white">Latest Blogs</p>
      <div class="latest-blog border">
        <ul>
          <li>Web development</li>
          <li>Web development</li>
          <li>Web development</li>
          <li>Web development</li>
          <li>Web development</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row mt-3 p-2">
    <div class="col-lg-3">
      <div class="card" style="width: 100%">
        <img src="{{ asset('images/g2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <a href="#" class="card-text text-dark">Crafting Your Content Blueprint for the Rest of 2023 With Cr...</a>
          <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, corporis!</p>
          <span>Auther Name</span><br>
          <span>08-12-23</span>
        </div>
      </div>
    </div>
    <div class="col-lg-3"></div>
    <div class="col-lg-3"></div>
    <div class="col-lg-3"></div>
  </div>
</div>
@endsection
  
