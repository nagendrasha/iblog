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
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">All Posts</a>
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
                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-lg-8 card p-5">
                            <form action="{{ route('post.add_post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputText1" class="form-label">Post Title</label>
                                  <input type="text" name="p_title" class="form-control" id="exampleInputText1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText1" class="form-label">Post Category</label>
                                    <input type="text" name="p_category" class="form-control" id="exampleInputText1" required>
                                  </div>
                                <div class="mb-3">
                                    <label for="exampleInputText2" class="form-label">Post Description</label>
                                    <textarea name="p_description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputText2" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputText2">
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
                <!-- main-container end -->

            </div>
        </div>
    </div>
@endsection