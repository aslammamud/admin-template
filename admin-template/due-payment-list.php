<?php $page = "due-payment-list"; ?>
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
      <h4>Due Payment List : </h4>
    <hr>

    <div class="row-fluid">

        <div class="col-md-11 m-auto">
            <div class="card bg-light mb-3">
            <div class="card-header h5">Payment Due : </div>
                <div class="col-md-8 m-auto">
                    <div class="form-group mt-4">
                        <label class="h6"><strong>Select Checking Month</strong></label><br>
                        <select style="height: 45px" class="form-select form-select-lg mb-3 text-dark h6 span11 m-wrap ui-wizard-content input-default" aria-label=".form-select-lg example">
                            <option class="text-dark h6" selected>Select payment due month</option>
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

                <div class="col-md-12 my-4">
                    <table class="table bg-light table-bordered">
                        <thead>
                            <tr>
                            <th scope="col-1"><h6>Users ID</h6></th>
                            <th scope="col-3"><h6>Due Month</h6></th>
                            <th scope="col-2"><h6>Due Amount</h6></th>
                            <th scope="col-2"><h6>Late fee</h6></th>
                            <th scope="col-1"><h6>Pay Now</h6></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center h6">1</td>
                                <td class="text-center h6">January</td>
                                <td class="text-center h6">5000 TK</td>
                                <td class="text-center h6"><span class="badge badge-warning p-2">120 TK</span></td>
                                <td class="text-center h6">
                                    <a class="btn btn-sm btn-success h6" href="#">pay now</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center h6">7</td>
                                <td class="text-center h6">January</td>
                                <td class="text-center h6">5000 TK</td>
                                <td class="text-center h6"><span class="badge badge-warning p-2">120 TK</span></td>
                                <td class="text-center h6">
                                    <a class="btn btn-sm btn-success h6" href="#">pay now</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center h6">6</td>
                                <td class="text-center h6">January</td>
                                <td class="text-center h6">5000 TK</td>
                                <td class="text-center h6"><span class="badge badge-warning p-2">120 TK</span></td>
                                <td class="text-center h6">
                                    <a class="btn btn-sm btn-success h6" href="#">pay now</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center h6">5</td>
                                <td class="text-center h6">January</td>
                                <td class="text-center h6">5000 TK</td>
                                <td class="text-center h6"><span class="badge badge-warning p-2">120 TK</span></td>
                                <td class="text-center h6">
                                    <a class="btn btn-sm btn-success h6" href="#">pay now</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center h6">4</td>
                                <td class="text-center h6">January</td>
                                <td class="text-center h6">5000 TK</td>
                                <td class="text-center h6"><span class="badge badge-warning p-2">120 TK</span></td>
                                <td class="text-center h6">
                                    <a class="btn btn-sm btn-success h6" href="#">pay now</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center h6">9</td>
                                <td class="text-center h6">January</td>
                                <td class="text-center h6">5000 TK</td>
                                <td class="text-center h6"><span class="badge badge-warning p-2">120 TK</span></td>
                                <td class="text-center h6">
                                    <a class="btn btn-sm btn-success h6" href="#">pay now</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center h6">10</td>
                                <td class="text-center h6">January</td>
                                <td class="text-center h6">5000 TK</td>
                                <td class="text-center h6"><span class="badge badge-warning p-2">120 TK</span></td>
                                <td class="text-center h6">
                                    <a class="btn btn-sm btn-success h6" href="#">pay now</a>
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


