@extends('main')
@section('content')
<div class="container m-5 border">
    <span class="text-success"><b>Watch</b></span>
    <h2>{{ $data->name }}</h2>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 border-end">
                <img class="p-2" src="images/boat-rockerz-370-138107-large-1.jpeg" alt="" width="200px">
            </div>
            <div class="col-lg-8">
                <p>Review 4.9/5</p>
                <hr>
                <h3 class="text-danger">Rs. 4,499</h3>
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
