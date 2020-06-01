@include('/userInterface/userlayout/header')
@include('/userInterface/userlayout/navbar')
    <!-- inner banner -->
    <div class="ibanner_w3 pt-sm-5 pt-3">
		<h4 class="head_agileinfo text-center text-capitalize text-center pt-5">
            <span>TyLo</span>
        </h4>
    </div>

    <div class="container m-5">
        <h5 class="head_agileinfo text-center text-capitalize pb-2">
                <span>P</span>ayment <span>P</span>olicy</h5>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center m-3">
                <div class="d-flex justify-content-center">
                    <h4 class="text-primary">If your product is eligible for a refund, you can choose your preferred refund method based on the table below. The shipping fee is refunded along with the amount paid for your returned product.</h4>
                </div>
            </div>

            <div class="col-md-12 d-flex justify-content-center m-3">
                <div class="d-flex justify-content-center">
                    <h4 class="text-primary">The time required to complete a refund depends on the refund method you have selected. Once we have received your product (2-3 working days) and it has undergone a quality control (1-2 working days), the expected refund processing times are as follows.</h4>   
                </div> 
            </div> 

            <div class="col-md-12 d-flex justify-content-center m-3">
                <table class="table table-sm">
                  <thead>
                    <tr>
                      <th scope="col">Payment Methord</th>
                      <th scope="col">Refund Option</th>
                      <th scope="col">Refund Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <td>All</td>
                      <td>Refund voucher</td>
                      <td>1-2 working days</td>
                    </tr>
                    <tr>
                      <td>Debit or Credit card</td>
                      <td>Debit or Credit card payment reversal</td>
                      <td>9-10 working days</td>
                    </tr>
                    <tr>
                      <td>bKash</td>
                      <td>Bank deposit / mobile payment reversal</td>
                      <td>7 working days</td>
                    </tr>
                    <tr>
                      <td>Cash on delivery (COD)</td>
                      <td>Bank deposit</td>
                      <td>4-5 working days</td>
                    </tr>
                  </tbody>
                  <hr>
                </table>    
            </div>    
        </div>
    </div>
    
    <!-- //inner banner -->
    @include('/userInterface/userlayout/footer')