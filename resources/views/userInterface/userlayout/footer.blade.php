<!-- footer -->
<footer>
    <div class="footerv2-w3ls">
        <div class="footer-w3lagile-innerr">
            <!-- footer-top -->
            <div class="container-fluid">
                <div class="row  footer-v2grids w3-agileits">
                    <!-- services -->
                    <div class="col-lg-4 col-sm-6 footer-v2grid">
                        <h4>Support</h4>
                        <ul>
                            <li>
                                <a href="{{url('/user/payment')}}">Payment</a>
                            </li>
                            <li>
                                <a href="{{url('/user/shipping')}}">Shipping</a>
                            </li>
                            <li>
                                <a href="{{url('/user/returnpolicy')}}">Cancellation & Returns</a>
                            </li>
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                        </ul>
                    </div>
                    <!-- //services -->
                    <!-- latest posts -->
                    <div class="col-lg-5 col-sm-6 footer-v2grid mt-sm-0 mt-5">
                        <h4>Latest Blog</h4>
                        <div class="footer-v2grid1 row">
                            <div class="col-4 footer-v2grid1-left">
                                <a href="#">
                                    <img src="{{URL::asset('images/bl2.jpg')}}" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="col-8 footer-v2grid1-right p-0">
                                <a href="#">eveniie arcet ut moles morbi dapiti</a>
                            </div>
                        </div>
                        <div class="footer-v2grid1 row my-2">
                            <div class="col-4 footer-v2grid1-left">
                                <a href="#">
                                    <img src="{{URL::asset('images/bl1.jpg')}}" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="col-8 footer-v2grid1-right p-0">
                                <a href="#">earum rerum tenmorbi dapiti et</a>
                            </div>
                        </div>
                        <div class="footer-v2grid1 row">
                            <div class="col-4 footer-v2grid1-left">
                                <a href="#">
                                    <img src="{{URL::asset('images/bl3.jpg')}}" alt=" " class="img-fluid">
                                </a>
                            </div>
                            <div class="col-8 footer-v2grid1-right p-0">
                                <a href="#">morbi dapiti eveniet ut molesti</a>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- popular tags -->
                    <div class="col-lg-3  footer-v2grid mt-sm-0 mt-5">
                        <h4>popular tags</h4>
                        <ul >
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="{{url('/user/about')}}">About Us</a>
                            </li>
                            <!-- <li>
                                <a href="shop.html">Shop</a>
                            </li> -->
                            <li>
                                <a href="{{url('/user/contact')}}">Contact</a>
                            </li>

                        </ul>
                    </div>
                    <!-- //popular tags -->
                </div>
            </div>
            <!-- //footer-top -->
            <div class="footer-bottomv2 py-2">
                <div class="container">
                    <h3 class="text-center follow">Follow Us</h3>
                    <ul class="social-iconsv2 agileinfo">
                        <li>
                            <a href="https://www.facebook.com/tylobd/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid py-5 footer-copy_w3ls">
            <div class="d-lg-flex justify-content-between">
                <div class="mt-2 sub-some align-self-lg-center">
                    
                </div>
                <div class="cpy-right align-self-center">
                    <!-- <h2 class="agile_btxt">
                        <a href="index.html">
                            <span>f</span>ashion
                            <span>h</span>ub</a>
                    </h2> -->
                    <p>© 2020 Tylo. All rights reserved | Design by Softify Digital
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- //footer -->

<!-- sign up Modal -->
<div class="modal fade" id="myModal_btn" tabindex="-1" role="dialog" aria-labelledby="myModal_btn" aria-hidden="true">
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body  pt-3 pb-5 px-sm-5">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <img src="{{URL::asset('images/p3.png')}}" class="img-fluid" alt="login_image" />
                    </div>
                    <div class="col-md-6">
                        <form action="/userlogin" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="email" class="form-control" placeholder=" " name="email" id="recipient-name" required="">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <input type="password" class="form-control" placeholder=" " name="password" required="">
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Login">
                            </div>
                        </form>
                        <p class="text-center mt-3">If you have no accout?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                Sinup Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //signup modal -->
<!-- signin Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="agilemodal-dialog modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register Now</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pt-3 pb-5 px-sm-5">
                <div class="row">
                    <div class="col-md-6 mx-auto align-self-center">
                        <img src="{{URL::asset('images/p3.png')}}" class="img-fluid" alt="login_image" />
                    </div>
                    <div class="col-md-6">
                        <form action="/usercreate" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name " name="name" id="recipient-name1" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email " name="email" id="recipient-email" required="">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Phone Number " name="phone" id="recipient-number" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password " name="assword" id="password1" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password " name="password" id="password2" required="">
                            </div>
                            <div class="sub-w3l">
                                <div class="sub-agile">
                                    <input type="checkbox" id="brand2" value="">
                                    <label for="brand2" class="mb-3">
                                        <span></span>I Accept to the Terms & Conditions</label>
                                </div>
                            </div>
                            <div class="right-w3l">
                                <input type="submit" class="form-control" value="Register">
                            </div>
                        </form>
                        <p class="text-center mt-3">Already a member?
                            <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark login_btn">
                                Login Now</a>
                        </p>
                        <hr>
                        
                        <!-- <p class="text-center m-3 text-info">*Register Facebook or Google</p>
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-info btn-sm btn-block"><i class="fab fa-facebook-square mr-2"></i>facebook</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger btn-sm btn-block"><i class="fab fa-google mr-2"></i>Google</button>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- signin Modal -->

<!-- js -->
<script type="text/javascript">
    /*$("#myModal_btn").hide();*/
    
    $("#loginbtn ").click(function(){
        $("#myModal_btn").modal();
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script type="module">
  var slider = tns({ 
    "container": ".slider-wrapper",
    "autoHeight": false,
    "items": 1,
    "mouseDrag": true,
    "speed": 500,
    "controls":false,
    "nav":false,
    "autoplay": true
  });
</script>
<script src="//widget.manychat.com/371031223550886.js" async="async"></script>
<script src="{{URL::asset('js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!-- script for show signin and signup modal -->
<!-- <script>
    $(document).ready(function () {
        $("#myModal_btn").modal();
    });
</script> -->
<!-- //script for show signin and signup modal -->
<!-- smooth dropdown -->
<script>
    $(document).ready(function () {
        $('ul li.dropdown').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
        });
    });
</script>
<!-- //smooth dropdown -->
<!-- script for password match -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- script for password match -->
<!-- Banner Responsiveslides -->
<script src="{{URL::asset('js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: false,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- // Banner Responsiveslides -->
<!-- Product slider Owl-Carousel-JavaScript -->
<script src="{{URL::asset('js/owl.carousel.js')}}"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 4,
        loop: false,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        responsive: {
            320: {
                items: 1,
            },
            568: {
                items: 2,
            },
            991: {
                items: 3,
            },
            1050: {
                items: 4
            }
        }
    });
</script>
<!-- //Product slider Owl-Carousel-JavaScript -->
<!-- cart-js -->
<script src="{{URL::asset('js/minicart.js')}}">
</script>
<script>
    hub.render();

    hub.cart.on('new_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
<!-- start-smooth-scrolling -->
<script src="{{URL::asset('js/move-top.js')}}"></script>
<script src="{{URL::asset('js/easing.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear' 
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="{{URL::asset('js/SmoothScroll.min.js')}}"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{URL::asset('js/bootstrap.js')}}"></script>

<!-- ManyChat -->
<script src="//widget.manychat.com/371031223550886.js" async="async"></script>

<script src="{{URL::asset('js/productCategories.js')}}"></script>

</body>

</html>