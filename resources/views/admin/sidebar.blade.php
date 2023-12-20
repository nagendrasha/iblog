
    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
        <div class="d-flex justify-content-lg-center flex-column align-items-center align-items-lg-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
            <ul class="nav nav-pills flex-column align-items-center align-items-sm-start"
                id="menu">
                <li class="nav-item nav-bg" id="home" onclick="handleMenu('home')">
                    <a href="#" class="nav-link align-middle px-0">
                        <i class="bi bi-house-door-fill"></i>
                        <span class="ms-1 d-sm-inline text-white">Home</span>
                    </a>
                </li>
                <li class="nav-item nav-bg" id="order" onclick="handleMenu('order')">
                    <a href="/post/all_post" class="nav-link align-middle px-0">

                        <span class="ms-1 d-sm-inline text-white">All Posts</span>
                    </a>
                </li>
                <li class="nav-bg nav-item" id="products" onclick="handleMenu('products')">
                    <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <span class="ms-1  d-sm-inline text-white">Products</span> </a>
                    <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-sm-inline text-white">All
                                    Products</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span
                                    class="d-sm-inline text-white">Categories</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-bg nav-item" id="allclient" onclick="handleMenu('allclient')">
                    <a href="#" class="nav-link px-0 align-middle">
                        <span class="ms-1 d-sm-inline text-white">All Clients</span></a>
                </li>
                <li class="nav-bg nav-item" id="logout" onclick="handleMenu('logout')">
                    <a href="#" class="nav-link px-0 align-middle">
                        <span class="ms-1  d-sm-inline text-white">Logout</span> </a>
                </li>
            </ul>
        </div>
    </div>
    