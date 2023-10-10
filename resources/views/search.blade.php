@extends('main')
@section('content')

<div class="container text-center mt-5">
    <h2 class="text-center">Found Products</h2>
    <div class="row mt-5">
        @foreach ($products as $item)
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

@endsection
