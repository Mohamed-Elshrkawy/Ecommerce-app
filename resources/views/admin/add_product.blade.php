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
                    <h1 class="h5 no-margin-bottom">Add Product</h1>
                </div>
                <div class="div_deg">
                    <form action="{{url('uploadProduct')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-deg">
                            <label>Product Title</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="input-deg">
                            <label>Description</label>
                            <textarea  name="description" required></textarea>
                        </div>
                        <div class="input-deg">
                            <label>Price</label>
                            <input type="text" name="price" required>
                        </div>
                        <div class="input-deg">
                            <label>Quantity</label>
                            <input type="number" name="quantity" required>
                        </div>

                        <div class="input-deg">
                            <label>Product Category</label>
                            <select name="category" required>
                                <option>Select a Option</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->name}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-deg">
                            <label>Product Image</label>
                            <input type="file" name="image" >
                        </div>
                        <div class="input-deg">
                            <input class="btn btn-success" type="submit" value="Add Product">
                        </div>
                    </form>
                </div>


            </div>
        </div>

@include('admin.footer')
