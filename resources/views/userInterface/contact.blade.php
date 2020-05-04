@include('/userInterface/userlayout/header')
@include('/userInterface/userlayout/navbar')

	<div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
			<span>f</span>ashion
			<span>h</span>ub</h4>
	</div>
	<!-- //inner banner -->
    <!-- breadcrumbs -->
    <!-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav> -->
    <!-- //breadcrumbs -->
    <!-- contact -->
    <section class="wthree-row pt-3 pb-sm-5 w3-contact">
        <div class="container py-sm-5 pb-5">
            <h5 class="head_agileinfo text-center text-capitalize pb-2">
                <span>C</span>ontact us</h5>
            <div class="row contact-form pt-lg-5">
                <div class="col-lg-6 wthree-form-left">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h5 class="text-dark mb-4 text-capitalize">send us a note</h5>
                        <form action="{{url('user-contact')}}" method = "POST" class="f-color">
                            @csrf
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control" id="contactusername" name="contactusername" required>
                            </div>
                            <div class="form-group">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" id="contactemail" name="contactemail" required>
                            </div>
                            <div class="form-group">
                                <label for="contactcomment">Your Message</label>
                                <textarea class="form-control" rows="5" id="contactcomment" name="contactcomment" required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block">Submit</button>
                            </div>
                            
                        </form>
                    </div>
                    <!--  //contact form grid ends here -->
                </div>
                <!-- contact details -->
                <div class="col-lg-6 contact-bottom pl-5 mt-lg-0 mt-5">
                    <!-- contact details grid1-->
                    <div class="address">
                        <h5 class="pb-3 text-capitalize">Address</h5>
                        <address>
                            <p class="c-txt">90 Street, City, State 34789.</p>
                            <p class="c-txt">76 Street, City, State 34789.</p>
                        </address>
                    </div>
                    <!-- contact details grid2-->
                    <div class="address my-5">
                        <h5 class="pb-3 text-capitalize">phone</h5>
                        <p>
                            +10 234 5678</p>
                        <p>
                            +11 222 333</p>
                        <p>
                            +12 222 333</p>
                    </div>
                    <!-- contact details grid3 -->
                    <div class="address mt-md-0 mt-3">
                        <h5 class="pb-3 text-capitalize">Email</h5>
                        <p>
                            <a href="mailto:info@example.com">mail@communal.com</a>
                        </p>
                        <p>
                            <a href="mailto:info@example.com">mail@communalinfo.com</a>
                        </p>
                    </div>
                    <!-- //contact details row ends here -->
                </div>
            </div>
            <!-- //contact details container -->
        </div>

@include('/userInterface/userlayout/footer')