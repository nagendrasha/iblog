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
                    <div class="row m-4 mt-4 ">
                       <div class="col-lg-12  border">
                        <div class="row py-2">
                            <div class="col-lg-6">
                                <h2 >All Post</h2>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <a href="/post/add_post" class="btn btn-outline-success">Add New Post</a>
                            </div>
                        </div>
                       <table class="table">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th>id</th>
                                <th>Post Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php for($i = 0; $i < count($posts); $i ++){ ?>
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $posts[$i]->p_title }}</td>
                                    <td>{{ $posts[$i]->p_description }}</td>
                                    <td><img src="/images/g3.jpg" alt="" width="50px" height="50px"></td>
                                    <td>
                                        <div class="row">
                                            <div class="col">
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                             <?php } ?>
                            
                            {{-- @for ($i = 0; $i < $count($posts); $i++)
                                echo $i
                            @endfor --}}
                            
                            {{-- @foreach ($posts as $item)
                            
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->p_title }}</td>
                                <td>{{ $item->p_description }}</td>
                                <td><img src="/images/g3.jpg" alt="" width="50px" height="50px"></td>
                                <td>
                                    <div class="row">
                                        <div class="col">
                                            <a href="#" class="btn btn-primary">Edit</a>
                                            <a href="#" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach --}}

                        </tbody>
                       </table>
                       </div>
                    </div> 
                </div>
                <!-- main-container end -->

            </div>
        </div>
    </div>
@endsection