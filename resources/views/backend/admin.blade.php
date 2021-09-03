@include('backend.modal')
<div class="container d-flex">
    <div class="left-panel w-25">
        <div class="left-header text-center mt-3">
            <i class="far fa-user"></i>
            <span>Recovery Centre</span>
        </div>
        <div class="dropdowns">
            <button id="btnMainPage" class="btn-admin-dropdown">Main page <i class="fas fa-chevron-down float-right" aria-hidden="true"></i></button>
            <ul id="mainList" class="d-none">
                <li><a class="link-admin-menu" href='/admin/cover'>Cover photo/Video</a></li>
                <li><a class="link-admin-menu" href='/admin/partners'>Partners</a></li>
                <li><a class="link-admin-menu" href='/admin/team'>Our team</a></li>
                <li><a class="link-admin-menu" href='/admin/orders'>Orders</a></li>
                <li><a class="link-admin-menu" href='/admin/users'>Signed users</a></li>
                <li><a class="link-admin-menu" href='/admin/analytic'>Analytic</a></li>
                <li><a class="link-admin-menu" href='/admin/reviews'>Reviews</a></li>
            </ul>
            <button id="btnAddItems" class="btn-admin-dropdown">Add items <i class="fas fa-chevron-down float-right" aria-hidden="true"></i></button>
            <ul id="itemList" class="d-none">
                <li><a class="link-admin-menu" href='/admin/products'>Add Products</a></li>
                <li><a class="link-admin-menu" href='/admin/projects'>Add Projects</a></li>
                <li><a class="link-admin-menu" href='/admin/events'>Add Events</a></li>
            </ul>
        </div>
    </div>
    <div class="admin-body w-75">
        <header class="admin-header">
            <button id="adminLogout" type="button" class="btn btn-outline-primary float-right">Log out</button>
            <i class="far fa-bell float-right"></i>
        </header>
        <div class="admin-panel">
            @yield('content')
        </div>
    </div>
</div>
