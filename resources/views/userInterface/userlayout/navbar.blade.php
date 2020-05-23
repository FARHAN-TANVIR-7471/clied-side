<!-- header -->
<header>
    <div class="container">
        <!-- top nav -->
        <nav class="top_nav d-flex pt-3 pb-1">
            <!-- logo -->
            <h1>
                <a class="navbar-brand" href="{{url('/test')}}">
                    <img style="width: 55px; height: 55px" src="images/logo.png">
                </a>
            </h1>
            <!-- //logo -->
            <div class="w3ls_right_nav ml-auto d-flex">
                <!-- search form -->
                <form class="nav-search form-inline my-0 form-control" action="/searchproduct" method="post">
                    @csrf
                    <select class="form-control input-lg" name="category">
                        <option value="all">Search our store</option>
                        <optgroup label="Mens">
                            <option value="1">T-Shirts</option>
                            <option value="2">Shirts</option>
                            <option value="3">Panjabi</option>
                            <option value="4">Plo Shirts</option>
                            <option value="5">Jeans</option>
                            <option value="6">Pant</option>
                        </optgroup>
                        <optgroup label="Womens">
                            <option value="7">Traditional Clothing</option>
                            <option value="8">Saree</option>
                            <option value="9">Shalwar Kameez</option>
                            <option value="10">Kurtis</option>
                            <option value="11">Chothing</option>
                            <option value="12">Women Bags</option>
                        </optgroup>
                    </select>
                    <input class="btn btn-outline-secondary  ml-3 my-sm-0" type="submit" value="Search">
                </form>
                <!-- search form -->
                <div class="nav-icon d-flex">
                    
                    <!-- shopping cart -->
                    <div class="cart-mainf">
                        <div class="hubcart hubcart2 cart cart box_1">    
                            <a href="{{route('cart.index')}}" class="btn  btn-info mt-1">
                                <i class="fas fa-shopping-bag text-white"></i>
                                <span class=" text-white text-bold">{{$totalproduct}}</span>
                            </a>
                        </div>
                    </div>
                    <!-- //shopping cart ends here -->
                </div>
            </div>
        </nav>
        <!-- //top nav -->
        <!-- bottom nav -->
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link  active" href="{{url('/test')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Men's clothing</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/men')}}">Man All Product</a>
                                        <a class="dropdown-item" href="{{url('/user/menproduct/1')}}">T-Shirts</a>
                                        <a class="dropdown-item" href="{{url('/user/menproduct/2')}}">Shirts</a>
                                        <!-- <a class="dropdown-item" href="men.html"></a>
                                        <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="men.html">Jackets</a>
                                        <a class="dropdown-item" href="men.html">Trousers</a> -->
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/menproduct/3')}}">Panjabi & Fatua</a>
                                        <a class="dropdown-item" href="{{url('/user/menproduct/4')}}">Plo Shirts</a>
                                        <!-- <a class="dropdown-item" href="men.html">Shirts</a>
                                        <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="men.html">Coats & Jackets</a>
                                        <a class="dropdown-item" href="men.html">Jackets</a> -->
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/menproduct/5')}}">Jeans</a>
                                        <a class="dropdown-item" href="{{url('/user/menproduct/6')}}">Pant</a>
                                        <!-- <a class="dropdown-item" href="men.html">Shirts</a>
                                        <a class="dropdown-item" href="men.html">Suits & Blazers</a>
                                        <a class="dropdown-item" href="men.html">Jackets</a>
                                        <a class="dropdown-item" href="men.html">Trousers</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Women's clothing</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/women')}}">Women All Product</a>
                                        <a class="dropdown-item" href="{{url('/user/womenproduct/7')}}">Traditional Clothing</a>
                                        <a class="dropdown-item" href="{{url('/user/womenproduct/8')}}">Saree</a>
                                        <!-- <a class="dropdown-item" href="women.html">Skirts</a>
                                        <a class="dropdown-item" href="women.html">Jeans</a>
                                        <a class="dropdown-item" href="women.html">Tunics</a> -->
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/womenproduct/9')}}">Shalwar Kameez</a>
                                        <a class="dropdown-item" href="{{url('/user/womenproduct/10')}}">Kurtis</a>
                                        <!-- <a class="dropdown-item" href="women.html">Tunics</a>
                                        <a class="dropdown-item" href="women.html">Skirts</a>
                                        <a class="dropdown-item" href="women.html">Jeans</a> -->
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/womenproduct/11')}}">Chothing</a>
                                        <a class="dropdown-item" href="{{url('/user/womenproduct/12')}}">Women Bags</a>
                                        <!-- <a class="dropdown-item" href="women.html">Skirts</a>
                                        <a class="dropdown-item" href="women.html">Jeans</a>
                                        <a class="dropdown-item" href="women.html">Tunics</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown has-mega-menu" style="position:static;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Custom clothing</a>
                        <div class="dropdown-menu" style="width:100%">
                            <div class="px-0 container">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/custom')}}">Custom clothing</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/mancustom')}}">Man custom clothing</a>
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <a class="dropdown-item" href="{{url('/user/womencustom')}}">Women custom clothing</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/about')}}">About</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- //bottom nav -->
    </div>
    <!-- //header container -->
</header>
<!-- //header -->

    