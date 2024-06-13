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
                    <h1>Product</h1>
                </div>
                <div class="d-flex">
                    <table class="table">
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        @foreach($product as $products)
                            <tr>
                                <td>{{$products->name}}</td>
                                <td>{!!Str::limit($products->description,20) !!}</td>
                                <td>{{$products->category}}</td>
                                <td>{{$products->price}}</td>
                                <td>{{$products->quantity}}</td>
                                <td>
                                    <img height="100" width="100" src="{{$products->image}}">
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{url('editProduct',$products->id)}}">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('deleteProduct',$products->id)}}">delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div>
                <div class="div_deg">
                    {{$product->links()}}
                </div>


@include('admin.footer')
