@extends('main')
@section('content')

<div class="container text-center mt-5 ">
    <h2>Shop</h2>
    <div class="row">
        @foreach ($data as $item)
        <div class="col-lg-3 col-sm-3 m-2 card">
            <div class="card-body p_card">
                <h4 class="p_name">{{ $item->p_name }}</h4>
                <p class="p_price"> <span><sup style="font-size: 0.8rem;">₹</sup></span>{{ $item->p_price }} </p>
                <img src="images/{{ $item->p_image }}" alt="" width="100px"><br><br>
                <span>Free Delivery in 2 Days</span>
                <a href="#" class="btn btn-outline-success btn-rounded  mt-3">Buy Now</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
