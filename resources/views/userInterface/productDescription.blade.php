@include('/userInterface/userlayout/header')
@include('/userInterface/userlayout/navbar')
    
    <!-- Single -->
<div class="innerf-pages section ">
    <div class="container">
            
        <div class="row my-sm-5">
            <div class="col-lg-4 single-right-left">
                <div class="grid images_3_of_2">
                    <div class="flexslider1">
                        <ul class="slides">
                            <li data-thumb="images/ms1.jpg">
                                <div class="thumb-image">
                                    <img src="{{$results->data->image}}" data-imagezoom="true" alt=" " class="img-fluid">
                                </div>
                            </li>
                                <!-- <li data-thumb="images/ms2.jpg">
                                    <div class="thumb-image">
                                        <img src="{{URL::asset('images/ms2.jpg')}}" data-imagezoom="true" alt=" " class="img-fluid"> 
                                    </div>
                                </li>
                                <li data-thumb="images/ms3.jpg">
                                    <div class="thumb-image">
                                        <img src="{{URL::asset('images/ms3.jpg')}}" data-imagezoom="true" alt=" " class="img-fluid"> 
                                    </div>
                                </li> -->
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-5 single-right-left simpleCart_shelfItem">
                    <h3>{{$results->data->name}}</h3>
                    </h3>
                    <div class="caption">

                        <ul class="rating-single">
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="fa fa-star yellow-star" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                        <h6>${{ $results->data->totalPrice }}</h6>
                        <h4><del>${{ $results->data->price }}</del></h4>
                    </div>
                    <div class="desc_single">
                        <h5>Description</h5>
                        <p>${{ $results->data->description }}</p>
                    </div>

                    <div class="occasion-cart mt-2 mb-5">
                        <div class="">
                            <form action="{{route('cart.add')}}" method="post">
                                {{csrf_field()}}
                                <div class="quantity">
                                    <input  type="hidden" name="qty" value="1">
                                    <input type="hidden" name="pdtId" value="{{ $results->data->id }}">
                                    <input  type="hidden" name="pdtName" value="{{$results->data->name}}">
                                    <input type="hidden" name="pdtPrice" value="{{ $results->data->totalPrice }}">
                                </div>
                                <button type="submit" class="hub-cart phub-cart btn">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                            </form>
                            <!-- <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="hub_item" value="{{$results->data->name}}">
                                        <input type="hidden" name="amount" value="{{ $results->data->totalPrice }}">
                                        <button type="submit" class="hub-cart phub-cart btn">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </button>
                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form> -->
                        </div>
                    </div>

                    <div class="d-sm-flex justify-content-between">
                        <div class="occasional">
                            <h5 class="sp_title mb-3">Highlights</h5>
                            <ul class="single_specific">
                                <li>
                                    <span>Fabric: </span> Poly-Viscose</li>
                                <li>
                                    <span>Pattern :</span> Solid</li>
                                <li>
                                    <span>Type :</span> Single Breasted</li>
                                <li>
                                    <span>Fit :</span> Slim</li>
                            </ul>

                        </div>
                        <div class="color-quality mt-sm-0 mt-4">
                            <h5 class="sp_title mb-3">services</h5>
                            <ul class="single_serv">
                                <li>
                                    <a href="#">30 Day Return Policy</a>
                                </li>
                                <li class="mt-2">
                                    <a href="#">Cash on Delivery available</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="description">
                        <h5>Check delivery, payment options and charges at your location</h5>
                        <form action="#" method="post">
                            <input type="text" placeholder="Enter pincode" required />
                            <input type="submit" value="Check">
                        </form>
                    </div> -->
                    
                </div>
            </div>
            
        </div>
    </div>
    <!-- /new_arrivals -->
    
    
    <!-- signin Modal -->
    <!-- js -->
    <script src="{{URL::asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
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

    <!-- FlexSlider -->
    <script src="{{URL::asset('js/jquery.flexslider.js')}}"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider1').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
    <!-- cart-js -->
    <script src="{{URL::asset('js/minicart.js')}}"></script>
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
    <!-- zoom -->
    <script src="{{URL::asset('js/imagezoom.js')}}"></script>
    <!-- zoom-->

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

@include('/userInterface/userlayout/footer')
