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
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>


        <div class="row">
            @foreach($product as $products)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{url('single_product',$products->id)}}"><img width="100px" height="150px" src="{{$products->image}}" alt=""></a>
                    </div>
                    <h3>{{$products->name}}</h3>
                    <p class="product-price">$ {{$products->price}} </p>
                    <a href="{{url('addCart',$products->id)}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    <a href="{{url('single_product',$products->id)}}" class="cart-btn"> Detials</a>

                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- end product section -->



<!-- footer -->
@include('site.footer')
