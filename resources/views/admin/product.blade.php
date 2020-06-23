@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Dashboard</h1>
            <div class="breadcrumb mb-4 col-md-12 ">
                <button type="button" class="btn btn-info m-1" id="addbtn"> Add Product</button>
                <button type="button" class="btn btn-info m-1" id="showbtn">Show Product</button>
            </div>
            
            
            <div class="card mb-4" id="datatable">
                <div class="card-header"><i class="fas fa-table mr-1"></i>Product DataTable</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Product Type</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Coler</th>
                                    <th>Size</th>
                                    <th>Trend</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Product Type</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Color</th>
                                    <th>Size</th>
                                    <th>Trend</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>

                                @foreach ($results->data as $user)
                                
                                <tr>
                                    <td>{{ $user->data->id }}</td>
                                    <td>{{ $user->data->name }}</td>
                                    <td>{{ $user->data->gender_id }}</td>
                                    <td>{{ $user->data->price }}</td>
                                    <td>{{ $user->data->totalPrice }}</td>
                                    <td>{{ $user->data->discount }}%</td>
                                    <td>{{ $user->data->color }}</td>
                                    <td>{{ $user->data->size }}</td>
                                    <td>{{ $user->data->trend }}</td>
                                    <td>
                                        <img style="width: 30%; height:15%" src="{{ $user->data->image }}">
                                    </td>
                                    <td class="text-center">
                                        <!-- <a href="#" class="view" title="View" data-toggle="tooltip"><i style="color: #03A9F4" class="material-icons">&#xE417;</i></a> -->
                                        <a href="{{'/admin/productupdate/' . $user->data->id}}" class="edit" title="Edit" data-toggle="tooltip"><i style="color: #FFC107;" class="material-icons">&#xE254;</i></a>                                    
                                    </td>
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
                    
                    <form action="/productinsert" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlInput1">Product Brand: </label>
                            
                                <input type="text" name="brand" class="form-control" placeholder="Product Name">
                            </div>
                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Gender</label>

                                <select name="gender" class="form-control" id="exampleFormControlSelect1">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                                          
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                {{csrf_field()}}
                              <label for="exampleFormControlSelect1">Cuntom</label>

                                <select name="custom" class="form-control" id="exampleFormControlSelect1">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                                          
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                {{csrf_field()}}
                                <label for="exampleFormControlSelect1">Product Type</label>

                                <select name="product_type" class="form-control">
                                    <option value="1">T-Shirts</option>
                                    <option value="2">Shirts</option>
                                    <option value="3">Panjabi</option>
                                    <option value="4">Plo Shirts</option>
                                    <option value="5">Jeans</option>
                                    <option value="6">Pant</option>
                                    <option value="7">Traditional Clothing</option>
                                    <option value="8">Saree</option>
                                    <option value="9">Shalwar Kameez</option>
                                    <option value="10">Kurtis</option>
                                    <option value="11">Chothing</option>
                                    <option value="12">Women Bags</option>                                                      
                                </select>
                                
                            </div>
                            <div class="form-group col-md-3">
                                <label for="exampleFormControlInput1">Price: </label>
                                {{csrf_field()}}
                                <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleFormControlTextarea1">Discount</label>
                                <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea> -->
                                {{csrf_field()}}
                                <input type="number" name="discount" class="form-control" id="exampleFormControlInput1" placeholder="Product Discount">
                            </div>
                            
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Number: </label>
                                {{csrf_field()}}
                                <input type="text" name="number" class="form-control" id="exampleFormControlInput1" placeholder="number">
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Product Color: </label>
                                {{csrf_field()}}
                                <input type="text" name="color" class="form-control" id="exampleFormControlInput1" placeholder="Product Color">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleFormControlInput1">Size: </label>
                                {{csrf_field()}}
                                <input type="text" name="size" class="form-control" id="exampleFormControlInput1" placeholder="size..">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="exampleFormControlInput1">Season: </label>
                                {{csrf_field()}}
                                <!-- <input type="text" name="season" class="form-control" id="exampleFormControlInput1" placeholder="Season"> -->
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group" {{ $errors->has('image') ? 'has-error' : '' }}>
                                <label for="image">Image : </label>
                                <input type="file" name="image" id="image" class="form-control">
                                <span class="text-danger"> {{ $errors->first('image') }}</span>
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