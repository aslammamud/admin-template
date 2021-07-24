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
      <h4>Edit profile : </h4>
    <hr>

    <div class="row-fluid">
        <div class="col-md-12 m-auto">
            <div class="row my-4">
                <div class="col-md-8 m-auto">
                    <div class="card bg-light mb-5">
                        <div class="card-header bg-info text-white h4">Edit profile Information</div>
                            <div class="card-body">
                                <form id="form-wizard" class="form-horizontal ui-formwizard" method="post" novalidate="novalidate">
                                    <div class="col-md-9 m-auto">
                                        <div id="form-wizard-1" class="step ui-formwizard-content" style="display: block;">

                                        <div class="form-group">
                                            <label class="h6">Name : </label>
                                            <input style="height: 45px" type="text" class="form-control span11 m-wrap ui-wizard-content input-default" value="Saiful Islam Sobuj">
                                        </div>

                                        <div class="form-group">
                                            <label class="h6">Change profile iamge : </label>
                                            <input style="height: 45px" type="file" class="form-control span11 m-wrap ui-wizard-content input-default">
                                        </div>

                                        <div class="form-group">
                                            <label class="h6">Change Contact Number : </label>
                                            <input style="height: 45px" type="number" class="form-control span11 m-wrap ui-wizard-content input-default" value="01856987555">
                                        </div>

                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Change</button>
                                    </div>
                                    </div>
                                </form>
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


