@include('/userInterface/userlayout/header')
@include('/userInterface/userlayout/navbar')

<div class="banner-text">
    <div class="callbacks_container">
        <div class="slider-wrapper">
            <div class="pr-5 pl-5">
              <div class="slider-item">
                <img style="width: 100%; height: 400px;" src="{{URL::asset('images/MenBanner.jpg')}}">
              </div>
            </div>
            <div class="pr-5 pl-5">
              <div class="slider-item">
                <img style="width: 100%; height: 400px;" src="{{URL::asset('images/WomenBanner.jpg')}}">
              </div>
            </div>
        </div>
    </div>
</div>
    <!-- //banner -->
    
<!-- about -->
<div class="row no-gutters pb-5">
    <div class="col-sm-3 d-flex justify-content-center p-3">
        <div class="hovereffect w-100">
            <img class="w-100" src="images/a1.jpg" alt="">
            <div class="overlay">
                <h5>women's fashion</h5>
                <a class="info" href="{{url('/user/women')}}">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 d-flex justify-content-center p-3">
        <div class="hovereffect w-100">
            <img class="w-100" src="images/a2.jpg" alt="">
            <div class="overlay">
                <h5>men's fashion</h5>
                <a class="info" href="{{url('/user/men')}}">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 d-flex justify-content-center p-3">
        <div class="hovereffect w-100">
            <img class="w-100" src="images/a1.jpg" alt="">
            <div class="overlay">
                <h5>women's custom product</h5>
                <a class="info" href="{{url('/user/womencustom')}}">Shop Now</a>
            </div>
        </div>
    </div>
    <div class="col-sm-3 d-flex justify-content-center p-3">
        <div class="hovereffect w-100">
            <img class="w-100" src="images/a2.jpg" alt="">
            <div class="overlay">
                <h5>men's custom product</h5>
                <a class="info" href="{{url('/user/mancustom')}}">Shop Now</a>
            </div>
        </div>
    </div>
    
</div>
<!-- //about -->


<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
<h5 class="head_agileinfo text-center text-capitalize pb-5">
    <span>Custom </span> Products</h5>
<div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
    <!-- card group  -->
    <div class="card-group">
        <?php 
            $count = 0;
        ?>
        @foreach ($results->data as $user)
        @if($user->data->custom == 'Yes')
        <?php
            $count++
        ?>
        <!-- card -->
        <div class="col-lg-2 col-sm-6 p-2">
            <div class="card product-men p-3">
                <div class="men-thumb-item">
                    <div class="example example-cover example-sm example-cover-sm">
                        <img src="{{$user->data->image}}" alt="img" class="card-img-top w-100 img-responsiv">
                    </div>
                    
                    <div class="men-cart-pro">
                        <div class="inner-men-cart-pro">
                            <a href="{{'/user/description/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
                        </div>
                    </div>
                </div>
                <!-- card body -->
                <div class="card-body  py-3 px-2">
                    <h5 class="card-title text-capitalize">{{$user->data->name}}</h5>
                    <div class="card-text d-flex justify-content-between">
                        <p class="text-dark font-weight-bold">৳{{ $user->data->totalPrice }}</p>
                        <p class="line-through">৳{{ $user->data->price }}</p>
                    </div>
                </div>
                <!-- card footer -->
                <!-- <p>{{ $_COOKIE['user'] }}</p> -->
                <div class="card-footer d-flex justify-content-end">
                    <form action="{{route('cart.add')}}" method="post">
                        {{csrf_field()}}
                        <div class="quantity">
                            <input type="hidden" name="qty" value="1">
                            <input type="hidden" name="userId" value="{{ $_COOKIE['user'] }}">
                            <input type="hidden" name="pdtId" value="{{ $user->data->id }}">
                            <input type="hidden" name="pdtName" value="{{$user->data->name}}">
                            <input type="hidden" name="pdtPrice" value="{{ $user->data->totalPrice }}">
                        </div>
                        <button type="submit" class="hub-cart phub-cart btn">
                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        </button>
                    </form>
                        
                </div>
            </div>
        </div>
        
        @endif
       
        @if ($count == 18)
            @break
        @endif
        @endforeach
        
        <!-- //card -->
    </div>
</div>
</section>

<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>Men</span> clothing</h5>
    <div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
        <!-- card group  -->
        <div class="card-group">
            <?php 
                $count = 0;
            ?>
            @foreach ($results->data as $user)
            @if($user->data->gender_id == 1)
            <?php
                $count++
            ?>
            

            <!-- card -->
            <div class="col-lg-2 col-sm-6 p-2">
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <div class="example example-cover example-sm example-cover-sm">
                            <img src="{{$user->data->image}}" alt="img" class="card-img-top w-100 img-responsiv">
                        </div>
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{'/user/description/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">{{$user->data->name}}</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">৳{{ $user->data->totalPrice }}</p>
                            <p class="line-through">৳{{ $user->data->price }}</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="{{route('cart.add')}}" method="post">
                            {{csrf_field()}}
                            <div class="quantity">
                                <input  type="hidden" name="qty" value="1">
                                <input type="hidden" name="userId" value="{{ $_COOKIE['user'] }}">
                                <input type="hidden" name="pdtId" value="{{ $user->data->id }}">
                                <input  type="hidden" name="pdtName" value="{{$user->data->name}}">
                                <input type="hidden" name="pdtPrice" value="{{ $user->data->totalPrice }}">
                            </div>
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </form>   
                    </div>
                </div>
            </div>
            
            @endif
            @if ($count == 18)
                @break
            @endif
            @endforeach
            
            <!-- //card -->
        </div>
    </div>
</section>

<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>Women</span> clothing</h5>
    <div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
        <!-- card group  -->
        <div class="card-group">
            <?php 
                $count = 0;
            ?>
            @foreach ($results->data as $user)
            @if($user->data->gender_id == 2)
            <?php
                $count++
            ?>
            <!-- card -->
            <div class="col-lg-2 col-sm-6 p-2">
                <div class="card product-men p-3">
                    <div class="men-thumb-item">
                        <div class="example example-cover example-sm example-cover-sm">
                            <img src="{{$user->data->image}}" alt="img" class="card-img-top w-100 img-responsiv">
                        </div>
                        <div class="men-cart-pro">
                            <div class="inner-men-cart-pro">
                                <a href="{{'/user/description/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
                            </div>
                        </div>
                    </div>
                    <!-- card body -->
                    <div class="card-body  py-3 px-2">
                        <h5 class="card-title text-capitalize">{{$user->data->name}}</h5>
                        <div class="card-text d-flex justify-content-between">
                            <p class="text-dark font-weight-bold">৳{{ $user->data->totalPrice }}</p>
                            <p class="line-through">৳{{ $user->data->price }}</p>
                        </div>
                    </div>
                    <!-- card footer -->
                    <div class="card-footer d-flex justify-content-end">
                        <form action="{{route('cart.add')}}" method="post">
                            {{csrf_field()}}
                            <div class="quantity">
                                <input  type="hidden" name="qty" value="1">
                                <input type="hidden" name="userId" value="{{ $_COOKIE['user'] }}">
                                <input type="hidden" name="pdtId" value="{{ $user->data->id }}">
                                <input  type="hidden" name="pdtName" value="{{$user->data->name}}">
                                <input type="hidden" name="pdtPrice" value="{{ $user->data->totalPrice }}">
                            </div>
                            <button type="submit" class="hub-cart phub-cart btn">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </button>
                        </form>
                            
                    </div>
                </div>
            </div>
            @endif
            @if ($count == 18)
                @break
            @endif
            @endforeach
            <!-- //card -->
        </div>
    </div>

    
    <div class="fb-customerchat"
 page_id="1829760867340607"
 minimized="false">
</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '912333495590130',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };
(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</section>  

<div class="fb-customerchat"
 page_id="1829760867340607"
 minimized="false">
</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '912333495590130',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };
(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


@include('/userInterface/userlayout/footer')

<div class="fb-customerchat"
 page_id="1829760867340607"
 minimized="false">
</div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '912333495590130',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };
(function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

