@extends('main')
@section('content')

{{-- slider  --}}

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/b3.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/b1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/b2.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  {{-- slider end --}}

<div class="container text-center mt-5">
    <h2 class="text-center">Featured Products</h2>
    <div class="row mt-5">
        @foreach ($data as $item)
        <div class="col-lg-3 col-sm-3 card">
            <div class="card-body p_card">
                <a href="detail/{{$item->id}}"<h4 class="p_name">{{ $item->p_name }}</h4></a>
                <p class="p_price"> <span><sup style="font-size: 0.8rem;">₹</sup></span>{{ $item->p_price }} </p>
                <img src="images/{{ $item->p_image }}" alt="" width="80px"><br><br>
                <span>Free Delivery in 2 Days</span>
                <a href="detail/{{$item->id}}" class="btn btn-outline-success btn-rounded  mt-3">Buy Now</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
{{-- ads section  --}}
<div class="container d-flex justify-content-evenly mt-2 mb-2">
    <div class="row text-center">
        <div class="col-lg-6">
            <img src="/images/watch_ad.jpg" alt="" width="100%">
        </div>
        <div class="col-lg-6">
            <img src="/images/headphone_ad.jpeg" alt="" width="100%">
        </div>
    </div>
</div>
{{-- ads section end --}}

@endsection
