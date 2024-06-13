<footer class="footer">
    <div class="footer__block block no-margin-bottom">
        <div class="container-fluid text-center">
            <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            <p class="no-margin-bottom">2024 &copy; Your company. Download From
                <a target="_blank" href="https://www.facebook.com/profile.php?id=100022721686870&mibextid=ZbWKwL ">ENG : Mohamed Elshrkawy </a>.</p>
        </div>
    </div>
</footer>
</div>
</div>
<!-- JavaScript files-->
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
<script src="{{url('admin_css/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('admin_css/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{url('admin_css/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('admin_css/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{url('admin_css/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{url('admin_css/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{url('admin_css/js/charts-home.js')}}"></script>
<script src="{{url('admin_css/js/front.js')}}"></script>
</body>
</html>
