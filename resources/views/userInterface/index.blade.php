@include('/userInterface/userlayout/header')
@include('/userInterface/userlayout/navbar')



<div class="banner-text">
        <div class="callbacks_container">
            <ul class="rslides" id="slider3"  style="">
                <li class="banner">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>f</span>ashion
                            <span>h</span>ub
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>w</span>omen's
                                <span>f</span>ashion</h4>
                            <div class="bnr_clip position-relative">
                                <!-- <h4>get up to
                                    <span class="px-2">45% </span>
                                </h4> -->
                                <!-- <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                    <div class="bg-flex-item">
                                        <span>O</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                    </div>
                                </div> -->
                                <p class="text-uppercase py-2">on special sale</p>
                                <!-- <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a> -->
                            </div>
                        </div>
                    </div>
                </li>
                <li class="banner banner2">
                    <div class="container">
                        <h3 class="agile_btxt">
                            <span>f</span>ashion
                            <span>h</span>ub
                        </h3>
                        <h4 class="w3_bbot">shop exclusive clothing</h4>
                        <div class="slider-info mt-sm-5">
                            <h4 class="bn_right">
                                <span>m</span>en's
                                <span>f</span>ashion</h4>
                            <div class="bnr_clip position-relative">
                                <!-- <h4>get up to
                                    <span class="px-2">35% </span>
                                </h4> -->
                                <!-- <div class="d-inline-flex flex-column banner-pos position-absolute text-center">
                                    <div class="bg-flex-item">
                                        <span>O</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F</span>
                                    </div>
                                    <div class="bg-flex-item">
                                        <span>F
                                        </span>
                                    </div>
                                </div> -->
                                <p class="text-uppercase py-2">on special sale</p>
                                <!-- <a class="btn btn-primary mt-3 text-capitalize" href="shop.html" role="button">shop now</a> -->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //banner -->
    
    <!-- about -->
    <div class="row no-gutters pb-5">
        <div class="col-md-6">
            
        </div>
        <div class="col-sm-3 d-flex justify-content-center">
            <div class="hovereffect w-100">
                <img class="w-100" src="images/a1.jpg" alt="">
                <div class="overlay">
                    <h5>women's fashion</h5>
                    <a class="info" href="women.html">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3 d-flex justify-content-center">
            <div class="hovereffect w-100">
                <img class="w-100" src="images/a2.jpg" alt="">
                <div class="overlay">
                    <h5>men's fashion</h5>
                    <a class="info" href="men.html">Shop Now</a>
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
                                    <img src="{{$user->data->image}}" alt="img" class="card-img-top">
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
                                        <p class="text-dark font-weight-bold">${{ $user->data->totalPrice }}</p>
                                        <p class="line-through">${{ $user->data->price }}</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="{{route('cart.add')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="quantity">
                                            <input  type="hidden" name="qty" value="1">
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
                                    <img src="{{$user->data->image}}" alt="img" class="card-img-top">
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
                                        <p class="text-dark font-weight-bold">${{ $user->data->totalPrice }}</p>
                                        <p class="line-through">${{ $user->data->price }}</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="{{route('cart.add')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="quantity">
                                            <input  type="hidden" name="qty" value="1">
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
                                    <img src="{{$user->data->image}}" alt="img" class="card-img-top">
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
                                        <p class="text-dark font-weight-bold">Tk{{ $user->data->totalPrice }}</p>
                                        <p class="line-through">Tk{{ $user->data->price }}</p>
                                    </div>
                                </div>
                                <!-- card footer -->
                                <div class="card-footer d-flex justify-content-end">
                                    <form action="{{route('cart.add')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="quantity">
                                            <input  type="hidden" name="qty" value="1">
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
    
    
    @include('/userInterface/userlayout/footer')