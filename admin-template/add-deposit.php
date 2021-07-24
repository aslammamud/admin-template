<?php $page = "add-deposit"; ?>
<?php include('header.php')?>
<!--close-top-serch-->
<?php include('sidebar-menu.php')?>
<!--main-container-part-->

<!--end-main-container-part-->
<!--main-container-part-->
<div id="content">
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <h4>Add Deposit : </h4>
    <hr>

    <div class="row-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-9 m-auto">
                    <div class="card bg-light mb-5">
                        <div class="card-header bg-info text-white h4">Deposit Form</div>
                        <div class="card-body">
                            <form id="form-wizard" class="form-horizontal ui-formwizard" method="post" novalidate="novalidate">
                                <div class="col-md-9 m-auto">
                                    <div id="form-wizard-1" class="step ui-formwizard-content" style="display: block;">

                                    <div class="form-group">
                                        <label class="h6">ID/Mobile Number</label>
                                        <input style="height: 45px" type="number" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="Member id/mobile number">
                                    </div>

                                    <div class="form-group">
                                        <label class="h6">Pay Amount</label><br>
                                        <select style="height: 45px" class="form-select form-select-lg mb-3 text-dark h6 span11 m-wrap ui-wizard-content input-default" aria-label=".form-select-lg example">
                                            <option class="text-dark h6" selected>Open This Pay Amount</option>
                                            <option class="text-dark h6" value="1">500 Tk</option>
                                            <option class="text-dark h6" value="2">1000 TK</option>
                                            <option class="text-dark h6" value="3">2000 TK</option>
                                            <option class="text-dark h6" value="3">5000 TK</option>
                                            <option class="text-dark h6" value="3">10,000 TK</option>
                                            <option class="text-dark h6" value="3">50,000 TK</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="h6">Payment Method</label><br>
                                        <select style="height: 45px" class="form-select form-select-lg mb-3 text-dark h6 span11 m-wrap ui-wizard-content input-default" aria-label=".form-select-lg example">
                                            <option class="text-dark h6" selected>Select payment Method</option>
                                            <option class="text-dark h6" value="1"> Bkash </option>
                                            <option class="text-dark h6" value="2"> Rocket </option>
                                            <option class="text-dark h6" value="3"> DBBL </option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="h6">Transaction Account Number</label>
                                        <input style="height: 45px" type="number" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="01 XXXXXXXXX">
                                    </div>

                                    <div class="form-group">
                                        <label class="h6">Pay By</label><br>
                                        <input style="height: 45px" type="number" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="Enter your Member ID">
                                    </div>

                                    <div class="form-group">
                                        <label class="h6">Payment Date</label>
                                        <input style="height: 45px" type="date" class="form-control span11 m-wrap ui-wizard-content input-default">
                                    </div>

                                    <div class="form-group">
                                        <label class="h6">Pay For Month</label><br>
                                        <select style="height: 45px" class="form-select form-select-lg mb-3 text-dark h6 span11 m-wrap ui-wizard-content input-default" aria-label=".form-select-lg example">
                                            <option class="text-dark h6" selected>Select month For this deposit</option>
                                            <option class="text-dark h6" value="1">January</option>
                                            <option class="text-dark h6" value="1">February</option>
                                            <option class="text-dark h6" value="1">March</option>
                                            <option class="text-dark h6" value="1">April</option>
                                            <option class="text-dark h6" value="1">May</option>
                                            <option class="text-dark h6" value="1">June</option>
                                            <option class="text-dark h6" value="1">July</option>
                                            <option class="text-dark h6" value="1">August</option>
                                            <option class="text-dark h6" value="1">September</option>
                                            <option class="text-dark h6" value="1">October</option>
                                            <option class="text-dark h6" value="1">November</option>
                                            <option class="text-dark h6" value="1">December</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Deposit</button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <div class="header mb-4">
                        <h3>Transaction History : </h3>
                    </div>
                    <table class="table bg-light table-bordered">
                        <thead>
                            <tr>
                            <th scope="col-1"><h6>Member ID</h6></th>
                            <th scope="col-3"><h6>Payment Method</h6></th>
                            <th scope="col-2"><h6>Transaxction ID</h6></th>
                            <th scope="col-2"><h6>Payment Date</h6></th>
                            <th scope="col-1"><h6>Payment Amount</h6></th>
                            <th scope="col-1"><h6>View Details</h6></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Bkash</td>
                                <td>TXWESRQ345EW</td>
                                <td>21-02-2021</td>
                                <td>10,000 TK</td>
                                <td>
                                    <a href="#">
                                    <i class="fa fa-eye fa-2x ml-4 mt-2" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>Bkash</td>
                                <td>TXWESRQ345EW</td>
                                <td>21-02-2021</td>
                                <td>10,000 TK</td>
                                <td>
                                    <a href="#">
                                    <i class="fa fa-eye fa-2x ml-4 mt-2" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>Rocket</td>
                                <td>TXWESRQ345EW</td>
                                <td>21-02-2021</td>
                                <td>10,000 TK</td>
                                <td>
                                    <a href="#">
                                    <i class="fa fa-eye fa-2x ml-4 mt-2" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>Bkash</td>
                                <td>TXWESRQ345EW</td>
                                <td>21-02-2021</td>
                                <td>10,000 TK</td>
                                <td>
                                    <a href="#">
                                    <i class="fa fa-eye fa-2x ml-4 mt-2" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td>01</td>
                                <td>DBBL</td>
                                <td>TXWESRQ345EW</td>
                                <td>21-02-2021</td>
                                <td>10,000 TK</td>
                                <td>
                                    <a href="#">
                                    <i class="fa fa-eye fa-2x ml-4 mt-2" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

  </div>
</div>
<!--main-container-part-->

<!--Footer-part-->


<?php include('footer.php')?>


