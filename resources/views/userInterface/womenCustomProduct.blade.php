@include('/userInterface/userlayout/header')
@include('/userInterface/userlayout/navbar')

<!-- inner banner -->
<div class="ibanner_w3 pt-sm-5 pt-3">
    <h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
        <span>f</span>ashion
        <span>h</span>ub</h4>
</div>
<!-- //inner banner -->
<!-- breadcrumbs -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Women Custom Clothing</li>
    </ol>
</nav>
<!-- //breadcrumbs -->
<section class="tabs_pro py-md-5 pt-sm-3 pb-5">
    <h5 class="head_agileinfo text-center text-capitalize pb-5">
        <span>Custom </span> Products</h5>
    <div class="col-lg-12 mt-lg-0 mt-5 right-product-grid">
        <!-- card group  -->
        <div class="card-group">
            
            @foreach ($results->data as $user)
            @if($user->data->gender_id == 2 && $user->data->custom == 'Yes')

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
            @endforeach
            <!-- //card -->
        </div>
    </div>
</section>
@include('/userInterface/userlayout/footer')