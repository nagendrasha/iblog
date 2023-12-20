@extends('admin.main')
@section('content')
    <div class="container-fluid" style="background-color: #FAF9F7;">
        <div class="row flex-nowrap">
            <!-- sidebar -->
			@include('admin.sidebar')
            <!-- sidebar end -->
            <div class="col w-100 g-0">
                <div class="container-fluid py-3 shadow" style="background-color: white;">
                    <div class="row ms-3">
                        <div class="col">
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">All Orders</a>
                        </div>
                        <div class="col">
                            <div class="nav float-end">
                                <div class="dropdown">
                                    <a href="#"
                                        class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
                                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30"
                                            class="rounded-circle">
                                        <span class="d-none d-sm-inline mx-1">User</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                        <li><a class="dropdown-item" href="#">New project...</a></li>
                                        <li><a class="dropdown-item" href="#">Settings</a></li>
                                        <li><a class="dropdown-item" href="#">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main-container -->
                <div class="container">
                    <div class="row ms-4 mt-4 ">
                        <div class="col">
                            <h6 class="ms-3">Overview</h6>
                        </div>
                        <div class="col me-5">
                            <div class="dropdown float-end">
                                <button class="btn btn-outlined-secondary w-100 dropdown-toggle active ps-3 pe-3"
                                    type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Lifetime
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row ms-5 mt-4">
                        <div class="col-lg-4 pb-2 card-bg">
                            <div class="row p-2">
                                <div class="col"><b>TOP products</b></div>
                                <div class="col"> <b style="margin-left: 100px;">Count</b> </div>
                            </div>
                            <div class="mt-2 ps-2 pe-4"
                                style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
                                <div>01 Tv Stand</div>
                                <div> 6,000 </div>
                            </div>
                            <div class="mt-2 ps-2 pe-4"
                                style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
                                <div>01 Tv Stand</div>
                                <div> 6,000 </div>
                            </div>
                            <div class="mt-2 ps-2 pe-4"
                                style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
                                <div>01 Tv Stand</div>
                                <div> 6,000 </div>
                            </div>
                            <div class="mt-2 ps-2 pe-4"
                                style="display: flex; justify-content: space-between; align-items: center; flex-direction: row;">
                                <div>01 Tv Stand</div>
                                <div> 6,000 </div>
                            </div>

                        </div>

                        <div class="col-lg-7 ms-5 pb-2 card-bg">
                            <div class="row p-2">
                                <div class="col">TOTAL SALES</div>
                                <div class="col float-end">
                                    <span>Lifetime</span>
                                    <h2>350 Orders</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5 ms-5 mt-4">
                        <h6>Notifications</h6>
                        <div class="col-lg-7 pt-2 pb-2 card-bg">
                            <table class="table">
                                <thead class="table-light">
                                    <th width="10%">S no.</th>
                                    <th width="20%">Title</th>
                                    <th width="50%">Message</th>
                                    <th width="20%">Sent to</th>
                                </thead>
                                <tbody>
                                    <td>1</td>
                                    <td>Offer</td>
                                    <td>Lorem ipsum dolor sit amet, consectetuer adipi- scing elit, sed diam nonummy
                                        nibh</td>
                                    <td class="text-success">client!</td>
                                </tbody>
                            </table>

                        </div>
                        <div class="col-lg-4 ms-5 pb-2">
                            <h6>Orders</h6>
                            <div class="row card-bg p-2" style="height: 100px;">
                                <p class="fw-bold">10 Accepted Order</p>
                            </div>
                            <div class="row mt-3 card-bg p-2" style="height: 100px;">
                                <p class="fw-bold">10 Order Shipping</p>
                            </div>
                            <div class="row mt-3 card-bg p-2" style="height: 100px;">
                                <p class="fw-bold">1 Pending Order</p>
                            </div>
                            <div class="row mt-3 card-bg p-2" style="height: 100px;">
                                <p class="fw-bold">0 Order Ship</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- main-container end -->

            </div>
        </div>
    </div>
@endsection