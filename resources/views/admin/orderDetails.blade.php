
@include('/admin/partials/header')
@include('/admin/partials/nav')
@include('/admin/partials/sidebar')

<div id="layoutSidenav_content">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active font-weight-bold">Order Details</li>
    </ol>
@foreach ($results->orders as $order)
<div class="container">
    @if($order->id == $order_id)
        <p><samp class="font-weight-bold mr-2">Name:</samp>{{$order->name}}</p>
        <p><samp class="font-weight-bold mr-2">Email:</samp>{{$order->email}}</p>
        <p><samp class="font-weight-bold mr-2">Phone:</samp>{{$order->phone}}</p>
        <p><samp class="font-weight-bold mr-2">Address:</samp>{{$order->address}}</p>

       

        <div class="container pb-2">
            <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>product_id</th>
                        <th>order_id</th>
                        <th>product_quantity</th>
                        <th>total_amount</th>
                      </tr>
                    </thead>
                     
                    <tbody>
                        <?php
                            $sl = 1;
                        ?>
                        @foreach($order->orderitems as $order)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td>{{$order->product_id}}</td>
                                <td>{{$order->order_id}}</td>
                                <td>{{$order->product_quantity}}</td>
                                <td>{{$order->total_amount}}</td>
                            </tr>
                        @endforeach
                        <hr>

                        <!-- <tr>
                            <td colspan="3"> </td>
                            <td> Total Amount: </td>
                            <td> $s2</td>
                        </tr> -->
                    </tbody>
                </table>
            </div> 
        </div> 
        <a href="/admin/order" class="btn btn-warning pl-3 pr-3 font-weight-bold text-white">Go Order List</a>
    @endif
</div>

<!-- <div class="container">
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>product_id</th>
                <th>order_id</th>
                <th>product_quantity</th>
                <th>total_amount</th>
              </tr>
            </thead>
                <tbody>
                    <?php
                        $sl = 1;
                    ?>
                    
                        <tr>
                            <th scope="row">{{ $sl++ }}</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    
                    <tr>
                        <td colspan="3"> </td>
                        <td> Total Amount: </td>
                        <td> </td>
                    </tr> 
                </tbody>
          </table>
    </div> 
</div> -->
@endforeach

@include('/admin/partials/future')
