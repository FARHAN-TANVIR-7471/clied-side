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
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Men's Clothing</li>
		</ol>
	</nav>
	<!-- //breadcrumbs -->
	<!-- Shop -->
	<div class="innerf-pages section">
		<div class="fh-container mx-auto">
			<div class="row my-lg-5 mb-5">
				<!-- grid left -->
				<div class="side-bar col-lg-3">
					<!--preference -->
					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head font-weight-bold  text-white bg-info">
							Categories</h3>
						<ul>
							<li>
								<!-- <input type="checkbox" class="checked" name="cat1" id="cat1">
								<label for="cat1">Fashion</label> -->
								<button id="allbtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">All Product</button>
							</li>
							<li>
								<!-- <input type="checkbox" class="checked" name="cat2" id="cat2">
								<label for="cat2">Popular</label> -->
								<button id="custombtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">Custom</button>
							</li>
							<li>
								<!-- <input type="checkbox" class="checked" name="cat3" id="cat3">
								<label for="cat3">Trending</label> -->
								<button id="trendbrn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">Trending</button>
							</li>
							<!-- <li>
								<button type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">Sort by popularity</button>
							</li> -->

						</ul>
					</div>

					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head font-weight-bold text-white bg-info">
							Size</h3>
						<ul>
							<li>
								<button id="sbtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">S</button>
							</li>
							<li>
								<button id="mbtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">M</button>
							</li>
							<li>
								<button id="lbtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">L</button>
							</li>
							<li>
								<button id="xlbtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">XL</button>
							</li>
							<li>
								<button id="xxlbtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">XXL</button>
							</li>

							<li>
								<button id="xxxlbtn" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">XXXL</button>
							</li>

						</ul>
					</div>

					<div class="left-side">
						<h3 class="shopf-sear-headits-sear-head font-weight-bold text-white bg-info">
							Discount</h3>
						<ul>
							<li>
								<button id="discountBtnOne" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">0%  -  10%</button>
							</li>
							<li>
								<button id="discountBtnTwo" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">10%  -  20%</button>
							</li>
							<li>
								<button id="discountBtnThree" type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">20%  -  30%</button>
							</li>
							<!-- <li>
								<button type="button" class="btn btn-outline-info w-100 border-top-0 border-right-0 border-left-0">15%  -  20%</button>
							</li> -->

						</ul>
					</div>
					<!-- // preference -->
					<!-- <div class="search-hotel">
						<h3 class="shopf-sear-headits-sear-head">
							<span>Brand</span> in focus</h3>
						<form action="#" method="post">
							<input type="search" placeholder="search here" name="search" required="">
							<input type="submit" value="Search">
						</form>
					</div> -->
					<!-- price range -->
					<!-- <div class="range">
						<h3 class="shopf-sear-headits-sear-head">
							<span>Price</span> range</h3>
						<ul class="dropdown-menu6">
							<li>

								<div id="slider-range"></div>
								<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
							</li>
						</ul>
					</div> -->
					<!-- //price range -->
					<!--preference -->
					<!-- <div class="left-side">
						<h3 class="shopf-sear-headits-sear-head">
							<span>latest</span> arrivals</h3>
						<ul>
							<li>
								<input type="checkbox" class="checked" name="arr1" id="arr1">
								<label for="arr1">last 30 days</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr2" id="arr2">
								<label for="arr2">last 90 days</label>
							</li>
							<li>
								<input type="checkbox" class="checked" name="arr3" id="arr3">
								<label for="arr3">last 150 days</label>
							</li>

						</ul>
					</div> -->
					<!-- // preference -->
				</div>
				<!-- //grid left -->
				<!-- grid right -->
				<div class="col-lg-9 mt-lg-0 mt-5 right-product-grid">
					<div id="allProduct">
						<h4 class="font-weight-bold text-info p-2">All Products</h4>
						<hr>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
							
	                		@if($user->data->gender_id == 1)

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
					<!-- All Product end -->

					<!-- Custom start -->
					<div id="custom">
						<h4 class="font-weight-bold text-info p-2">Custom Products</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->custom == 'Yes')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Custom end -->

					<!-- Trending start -->
					<div id="trending">
						<h4 class="font-weight-bold text-info p-2">Trending Products</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->trend == 'yes')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Trending end -->

					<!-- Size S Start -->
					<div id="sizeS">
						<h4 class="font-weight-bold text-info p-2">Size S</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->size == 'S')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Size S end -->


					<!-- Size M Start -->
					<div id="sizeM">
						<h4 class="font-weight-bold text-info p-2">Size M</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->size == 'M')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Size M end -->


					<!-- Size L Start -->
					<div id="sizeL">
						<h4 class="font-weight-bold text-info p-2">Size L</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->size == 'L')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Size L end -->


					<!-- Size XL start -->
					<div id="sizeXL">
						<h4 class="font-weight-bold text-info p-2">Size XL</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->size == 'XL')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Size XL end -->

					<!-- Size XXL Start -->
					<div  id="sizeXXL">
						<h4 class="font-weight-bold text-info p-2">Size XXL</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->size == 'XXL')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Size XXl end -->

					<!-- Size XXXL start -->
					<div id="sizeXXXL">
						<h4 class="font-weight-bold text-info p-2">Size XXXL</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->size == 'XXXL')

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Size XXXL end -->


					<!-- Discount 0-10 start -->
					<div id="discountOne">
						<h4 class="font-weight-bold text-info p-2">Discount 0% - 10%</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1)
	                		@if($user->data->discount = 0 || $user->data->discount <= 10)
							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Discount 0-10 end -->


					<!-- Discount 10-20 start -->
					<div id="discountTwo">
						<h4 class="font-weight-bold text-info p-2">Discount 10% - 20%</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1 && $user->data->size == 'M')
	                		@if($user->data->discount > 10 || $user->data->discount <= 20)
							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Discount 10-20 end -->

					<!-- Discount 20-30 start -->
					<div id="discountThree">
						<h4 class="font-weight-bold text-info p-2">Discount 20% - 30%</h4>
						<!-- card group  -->
						<div class="card-group">
							@foreach ($results->data as $user)
	                		@if($user->data->gender_id == 1)
	                		@if($user->data->discount > 20 || $user->data->discount <= 30)

							<!-- card size-->
							<div class="col-lg-3 col-sm-6 p-2">
								<div class="card product-men p-3">
									<div class="men-thumb-item">
										<img src="{{$user->data->image}}" alt="img" class="card-img-top">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{'/user/mens/' . $user->data->id}}" class="link-product-add-cart">Quick View</a>
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
	                                    <form action="#" method="post">
	                                        <input type="hidden" name="cmd" value="_cart">
	                                        <input type="hidden" name="add" value="1">
	                                        <input type="hidden" name="hub_item" value="{{$user->data->name}}">
	                                        <input type="hidden" name="amount" value="{{ $user->data->totalPrice }}">
	                                        <button type="submit" class="hub-cart phub-cart btn">
	                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>
	                                        </button>
	                                        <a href="#" data-toggle="modal" data-target="#myModal1"></a>
	                                    </form>
	                                </div>
								</div>
							</div>
							@endif
							@endif
	                		@endforeach
							<!-- //card -->
						</div>
					</div>
					<!-- Discount 20-30 end -->
				</div>

			</div>
		</div>
		<!--// Shop -->
 	</div>
		<!-- //smoothscroll -->
 @include('/userInterface/userlayout/footer')

 <script>
    $(document).ready(function(){

        $("#custom").hide();
        $("#trending").hide();
        $("#sizeS").hide();
        $("#sizeM").hide();
        $("#sizeL").hide();
        $("#sizeXL").hide();
        $("#sizeXXL").hide();
        $("#sizeXXXL").hide();
        $("#discountOne").hide();
        $("#discountTwo").hide();
        $("#discountThree").hide();

        $("#allbtn ").click(function(){
       
            $("#allProduct").show();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });
       

         $("#custombtn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").show();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#trendbrn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").show();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });  

        $("#sbtn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").show();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#mbtn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").show();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#lbtn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").show();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#xlbtn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").show();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#xxlbtn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").show();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#xxxlbtn").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").show();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#discountBtnOne").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").show();
	        $("#discountTwo").hide();
	        $("#discountThree").hide();
        });

        $("#discountBtnTwo").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").show();
	        $("#discountThree").hide();
        });

        $("#discountBtnThree").click(function(){
       
            $("#allProduct").hide();
            $("#custom").hide();
	        $("#trending").hide();
	        $("#sizeS").hide();
	        $("#sizeM").hide();
	        $("#sizeL").hide();
	        $("#sizeXL").hide();
	        $("#sizeXXL").hide();
	        $("#sizeXXXL").hide();
	        $("#discountOne").hide();
	        $("#discountTwo").hide();
	        $("#discountThree").show();
        });
    });
</script>

 