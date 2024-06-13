@include('site.header')
<!-- search area -->
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>Search For:</h3>
                        <input type="text" placeholder="Keywords">
                        <button type="submit">Search <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->
<!-- home page slider -->
@include('site.slider')

<!-- end home page slider -->
<!-- product section -->
@php $total=0; @endphp
<div class="cart-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                        <tr class="table-head-row">
                            <th class="product-remove"></th>
                            <th class="product-image">Product Image</th>
                            <th class="product-name">Name</th>
                            <th class="product-price">Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-total">Total</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($cart as $carts)
                        <tr class="table-body-row">
                            <td class="product-remove"><a onclick="confirmation(event)" href="{{url('deleteCart',$carts->id)}}"><i class="far fa-window-close"></i></a></td>
                            <td class="product-image"><img src="{{url($carts->product->image)}}" alt=""></td>
                            <td class="product-name">{{$carts->product->name}}</td>
                            <td class="product-price">${{$carts->product->price}}</td>
                            <td class="product-quantity"><input type="number" placeholder="0"></td>
                            <td class="product-total">1</td>
                        </tr>
                        @php
                            $total= $total + $carts->product->price;
                        @endphp

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                        <tr class="table-total-row">
                            <th>Total</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="total-data">
                            <td><strong>total: </strong></td>
                            <td>${{$total}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="cart-buttons">
                        <a href="{{url('viewCart')}}" class="boxed-btn">Update Cart</a>
                        <a href="{{url('viewCheckout')}}" class="boxed-btn black">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end cart -->

<!-- end product section -->
<!-- footer -->
@include('site.footer')
