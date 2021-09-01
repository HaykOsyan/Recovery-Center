@include('backend.modal')
<div class="container d-flex">
    <div class="left-panel w-25">
        <div class="left-header text-center`">
            <i class="far fa-user"></i>
            <span>Recovery Centre</span>
        </div>
        <button class="btn-admin-dropdown">Main page</button>
        <ul>

            <li>Cover photo/Video</li>
            <li>Partners</li>
            <li>Our team</li>
            <li>Orders</li>
            <li>Signed users</li>
            <li>Analytic</li>
            <li>Reviews</li>
        </ul>
        <button class="btn-admin-dropdown">Add items</button>
        <ul>
            <li>Add Products</li>
            <li>Add Projects</li>
            <li>Add Events</li>
        </ul>
    </div>
    <div class="admin-body w-75">
        <header class="admin-header">
            <button type="button" class="btn btn-outline-primary float-right">Log out</button>
            <i class="far fa-bell float-right"></i>
        </header>
        <div class="admin-panel">
            @yield('content')
        </div>
    </div>
</div>
