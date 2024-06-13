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
                    <h1>Update Product</h1>
                </div>
                <div class="div_deg">
                    <form action="{{url('updateProduct',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-deg">
                            <label>Product Title</label>
                            <input type="text" name="title" value="{{$data->name}}" required>
                        </div>
                        <div class="input-deg">
                            <label>Description</label>
                            <textarea  name="description"  required>{{$data->description}}</textarea>
                        </div>
                        <div class="input-deg">
                            <label>Price</label>
                            <input type="text" name="price" value="{{$data->price}}" required>
                        </div>
                        <div class="input-deg">
                            <label>Quantity</label>
                            <input type="number" name="quantity" value="{{$data->quantity}}" required>
                        </div>

                        <div class="input-deg">
                            <label>Product Category</label>
                            <select name="category" required>
                                <option>{{$data->category}}</option>
                                @foreach($categories as $category)
                                    <option>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label>Current Image</label>
                            <img height="100" width="100" src="{{$data->image}}" alt="image">
                        </div>
                        <div class="input-deg">
                            <label>New Image</label>
                            <input type="file" name="image"  >
                        </div>
                        <div class="input-deg">
                            <input class="btn btn-success" type="submit" value="Update Product">
                        </div>
                    </form>
                </div>





            </div>
        </div>

@include('admin.footer')
