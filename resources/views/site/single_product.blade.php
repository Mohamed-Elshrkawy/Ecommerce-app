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
<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{url($data->image)}}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{$data->name}}</h3>
                    <p class="single-product-pricing"> ${{$data->price}}</p>
                    <p>{{$data->description}}.</p>
                    <div class="single-product-form">
                        <form action="{{url('home')}}">
                            <input type="number" placeholder="0">
                        </form>
                        <a href="{{url('addCart',$data->id)}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        <p><strong>Categories: </strong>{{$data->category}}</p>
                    </div>
                    <h4>Share:</h4>
                    <ul class="product-share">
                        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->


<!-- end product section -->
<!-- footer -->
@include('site.footer')
