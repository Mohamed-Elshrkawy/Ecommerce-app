<!-- Sidebar Navigation-->
<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center"></div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active"><a href="{{url('admin/dashboard')}}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{url('viewCategory')}}"> <i class="icon-grid"></i>category </a></li>
        <li><a href="{{url('viewProduct')}}"> <i class="fa fa-bar-chart"></i>product </a></li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="icon-windows"></i>Add Category & Product </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="{{url('createCategory')}}">Add Category</a></li>
                <li><a href="{{url('addProduct')}}">Add Product</a></li>
                <li><a href="#">Page</a></li>
            </ul>
        </li>
        <li><a href="{{url('viewOrder')}}"> <i class="icon-grid"></i>Order </a></li>


</nav>
