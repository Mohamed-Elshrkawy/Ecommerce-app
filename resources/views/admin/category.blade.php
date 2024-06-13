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
                    <h1 class="h5 no-margin-bottom">Category</h1>
                </div>

                <table class="table_deg">
                    <tr>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    @foreach($data as $data)
                        <tr>
                            <td>{{$data->name}}</td>
                            <td>
                                <a class="btn btn-success" href="{{url('editCategory',$data->id)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('deleteCategory',$data->id)}}">delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

@include('admin.footer')
