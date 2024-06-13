<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">About us</h2>
                    <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                        <li>support@fruitkha.com</li>
                        <li>+00 111 222 3333</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">Pages</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="services.html">Shop</a></li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">Subscribe</h2>
                    <p>Subscribe to our mailing list to get the latest updates.</p>
                    <form action="index.html">
                        <input type="email" placeholder="Email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2024 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
                    Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                </p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->
<script type="text/javascript">
    function confirmation(ev)
    {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title:"Are You Sure to Delete This",
            text:"This Delete Will be parmanent",
            icon:"warning",
            buttons:true,
            dangerMode:true,
        })
            .then((willCancel)=>{
                if(willCancel)
                {
                    window.location.href=urlToRedirect;
                }
            })
    }

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- jquery -->
<script src="{{url('site_css/assets/js/jquery-1.11.3.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{url('site_css/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- count down -->
<script src="{{url('site_css/assets/js/jquery.countdown.js')}}"></script>
<!-- isotope -->
<script src="{{url('site_css/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
<!-- waypoints -->
<script src="{{url('site_css/assets/js/waypoints.js')}}"></script>
<!-- owl carousel -->
<script src="{{url('site_css/assets/js/owl.carousel.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{url('site_css/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- mean menu -->
<script src="{{url('site_css/assets/js/jquery.meanmenu.min.js')}}"></script>
<!-- sticker js -->
<script src="{{url('site_css/assets/js/sticker.js')}}"></script>
<!-- main js -->
<script src="{{url('site_css/assets/js/main.js')}}"></script>

</body>
</html>
