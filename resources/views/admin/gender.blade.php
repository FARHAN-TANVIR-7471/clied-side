@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <div class="breadcrumb mb-4 col-md-12 ">
                        	<h5>Gender Dashboard</h5>
                        	<!-- <button type="button" class="btn btn-info m-1" id="addbtn"> Add Product</button>
							<button type="button" class="btn btn-info m-1" id="showbtn">Show Product</button> -->
                        </div>                        
                        
                        <div class="card mb-4" id="datatable">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Product DataTable</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Name</th>
                                                
                                                <!-- <th>Actions</th> -->
                                            </tr>
                                        </thead>
                                        
                                        <tbody>

                                        	@foreach ($gender as $user)
										        <!-- {{ $user->name }} -->
										        <tr>
	                                                <td>{{ $user->id }}</td>
	                                                <td>{{ $user->name }}</td>
	                                                
	                                                <!-- <td>
														<a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a>
							                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>
							                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i style="color: #E34724;" class="material-icons">&#xE872;</i></a>
							                        </td> -->
	                                            </tr>
										    @endforeach
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="card" id="inputfild">
                        	<div class="card-header"><i class="fas fa-table mr-1"></i>Add Product</div>
							<div class="card-body">
						    	<form>
								  	<div class="form-row">
									    <div class="form-group col-md-6">
									        <label for="exampleFormControlInput1">Product Name: </label>
											<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
									    </div>
									    <div class="form-group col-md-6">
									      <label for="exampleFormControlSelect1">Gender</label>
											<select class="form-control" id="exampleFormControlSelect1">
												<option>Male</option>
												<option>Female</option>
																		      
											</select>
									    </div>
								  	</div>

								  	<div class="form-row">
									    <div class="form-group col-md-6">
									        <label for="exampleFormControlSelect1">Product Type</label>

										    <select class="form-control" id="exampleFormControlSelect1">
										      	<option>1</option>
										      	<option>2</option>
										      	<option>3</option>
										      	<option>4</option>			
										    </select>
									    </div>
									    <div class="form-group col-md-6">
									      	<label for="exampleFormControlInput1">Product Color: </label>
									    	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
									    </div>
								  	</div>

									<div class="form-group">
									    <label for="exampleFormControlTextarea1">Product Discount</label>
									    <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea> -->
									    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount">
									</div>

									<div class="form-group">
								        <label>Upload Image</label>
								        <div class="input-group">
								            <span class="input-group-btn">
								                <span class="btn btn-default btn-file">
								                    <input type="file" id="imgInp">
								                </span>
								            </span>							
								        </div>
								    </div>

									<button type="submit" class="btn btn-primary">Submit</button>

								</form>
						  	</div>
						</div>

                    </div>
                </main>



@include('/admin/partials/future')

<script>
	$(document).ready(function(){

		$("#showbtn").hide();
		$("#inputfild").hide();

		 $("#addbtn").click(function(){
		  	$("#addbtn").hide();
		  	$("#datatable").hide();
		  	$("#showbtn").show();
			$("#inputfild").show();
		});

		$("#showbtn").click(function(){
		    $("#addbtn").show();
		  	$("#datatable").show();
		  	$("#showbtn").hide();
			$("#inputfild").hide();
		});
	});
</script>