<?php $page = "add-investment"; ?>
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
      <a class="btn btn-success btn-lg ml-2" href="investment.php">All Investment</a>
    <hr>

    <div class="row-fluid">
        <div class="col-md-12 m-auto">
            <div class="row my-4">

                <div class="col-md-10 m-auto">
                    <div class="card mb-4">
                        <div class="card-header h4">
                            Add Investment Offer
                        </div>
                        <div class="card-body">
                            <div class="col-md-8 m-auto">
                                <form>
                                    <div class="form-group">
                                        <label class="h5">Add Banner Image : </label>
                                        <input style="height: 45px" type="file" class="form-control span11 m-wrap ui-wizard-content input-default">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5">Discrition Line One : </label>
                                        <input style="height: 45px" type="text" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="Discription line 01:">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5">Discrition Line Two : </label>
                                        <input style="height: 45px" type="text" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="Discription line 02:">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5">Discrition Line Three : </label>
                                        <input style="height: 45px" type="text" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="Discription line 03:">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5">Discrition Line Four : </label>
                                        <input style="height: 45px" type="text" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="Discription line 04:">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5">Discrition Line Five : </label>
                                        <input style="height: 45px" type="text" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="If you want null:">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5">Discrition Line Six : </label>
                                        <input style="height: 45px" type="text" class="form-control span11 m-wrap ui-wizard-content input-default" placeholder="If you want null:">
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary">Add Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

  </div>
</div>
<!--main-container-part-->

<!--Footer-part-->


<?php include('footer.php')?>


