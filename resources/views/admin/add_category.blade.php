@include('admin.head')
<body>
<header class="header">
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        @include('admin.sideBar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <h1 class="h5 no-margin-bottom">Add Category</h1>
                </div>
                <div class="div_deg">
                    <form action="{{url('addCategory')}}" method="post">
                        @csrf
                        <div>
                            <input  type="text" name="category" >
                            <input class="btn btn-primary" type="submit" value="Add category">
                        </div>
                    </form>
                </div>
            </div>
        </div>

@include('admin.footer')
