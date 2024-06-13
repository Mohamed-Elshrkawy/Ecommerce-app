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
                    <h1 class="h5 no-margin-bottom">Order</h1>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Product Title</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Payment Status</th>
                            <th>status</th>
                            <th>Change Status</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $datas)
                        <tr>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->rec_address}}</td>
                            <td>{{$datas->phone}}</td>
                            <td>{{$datas->product->name}}</td>
                            <td>{{$datas->product->price}}</td>
                            <td>
                                <img width="100" height="100" src="{{$datas->product->image}}">
                            </td>
                            <td>{{$datas->payment_status}}</td>
                            <td>
                                @if($datas->status == 'in-progress')
                                    <span style="color: red">{{$datas->status}}</span>
                                @elseif($datas->status == 'On the way')
                                    <span style="color: skyblue">{{$datas->status}}</span>
                                @else
                                    <span style="color: yellow">{{$datas->status}}</span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{url('onTheWay',$datas->id)}}">On The Way</a>
                                <a class="btn btn-success" href="{{url('Delivered',$datas->id)}}">Delivered</a>

                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@include('admin.footer')
