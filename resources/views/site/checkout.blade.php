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

<!-- check out section -->
<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="card single-accordion">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Billing Address
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="billing-address-form">

                                        <form action="{{url('makeOrder')}}" method="post">
                                            @csrf
                                            <p><input type="text" placeholder="Name" name="name" value="{{Auth::user()->name}}"></p>
                                            <p><input type="text" placeholder="Address" name="address" value="{{Auth::user()->address}}"></p>
                                            <p><input type="text" placeholder="Phone" name="phone" value="{{Auth::user()->phone}}"></p>
                                            <input type="submit" value="Place Order">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card single-accordion">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Shipping Address
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="shipping-address-form">
                                        <p>Your shipping address form is here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card single-accordion">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Card Details
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="card-details">
                                        <p>Your card details goes here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="order-details-wrap">
                    <table class="order-details">
                        <thead>
                        <tr>
                            <th>  </th>
                            <th>Your order Details</th>
                            <th>Price</th>
                        </tr>
                        </thead>
                        <tbody class="order-details-body">
                        @php $total=0; @endphp
                        @foreach($cart as $carts)
                        <tr>
                            <td class="product-remove"><a onclick="confirmation(event)" href="{{url('deleteCart',$carts->id)}}"><i class="far fa-window-close"></i></a></td>
                            <td>{{$carts->product->name}}</td>
                            <td>{{$carts->product->price}}</td>
                        </tr>
                        @php $total= $total + $carts->product->price; @endphp
                        @endforeach

                        <tbody class="checkout-details">
                        <tr>
                            <td>  </td>
                            <td>total</td>
                            <td>${{$total}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="{{url('stripe',$total)}}" class="boxed-btn black">Pay Using Card</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end check out section -->



<!-- end product section -->
<!-- footer -->
@include('site.footer')
