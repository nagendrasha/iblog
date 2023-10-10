@extends('main')
@section('content')

<div class="container m-5 border">
    <span class="text-success"><b>{{$products->p_category}}</b></span>
    {{$products->p_name}}
{{-- </pre> --}}
    {{-- {{ print_r($products); }} --}}
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 border-end">
                <img src="../images/{{ $products->p_image }}" alt="" width="200px"><br><br>
            </div>
            <div class="col-lg-8">
                <p>Review 4.9/5</p>
                <hr>
                <h3 class="text-danger">Rs. {{$products->p_price}}</h3>
                <hr>
                <div class="row">
                    <h3>Key Specs</h3>
                    <hr>
                    <div class="col">
                        <h5>Design</h5>
                        <ul>
                            <li>Rectangular, Flat Dial</li>
                            <li>Silicon Strap</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Display</h5>
                        <ul>
                            <li>1.75 Inch</li>
                            <li>AMOLED</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Features</h5>
                        <ul>
                            <li>Water proof</li>
                            <li>Receive call</li>
                            <li>Fitness Tracking</li>
                        </ul>
                    </div>
                    <div class="col">
                        <h5>Battery</h5>
                        <ul>
                            <li>300Mah</li>
                            <li>Upto 7 Days battery</li>
                        </ul>
                    </div>
                </div>
                <button class="btn btn-success"> Buy Now </button>
                <br><br>
                <button class="btn btn-primary">Add To Cart</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="container features">
        <div class="">
            <h4>PHOTO ALBUMS</h4>
        </div>
    </div>
</div>


@endsection
