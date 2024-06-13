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
                    <h1 class="h5 no-margin-bottom">Update Category</h1>
                </div>
                <div class="div_deg">
                    <form action="{{url('updateCategory',$data->id)}}" method="post">
                        @csrf
                        <div>
                            <input  type="text" name="category" value="{{$data->name}}" >
                            <input class="btn btn-primary" type="submit" value="update category">
                        </div>
                    </form>
                </div>





            </div>
        </div>

@include('admin.footer')
