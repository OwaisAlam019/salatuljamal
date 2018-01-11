<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Customer Message Details
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Messages</a></li>
        <li class="active">Details</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <form role="form" action="" method="POST">
              <div class="box-body">
                  <!-- text input -->           
                  <div class="form-group col-md-4">
                    <label>Name</label>
                    <input type="text" class="form-control" value=" <?= $msg_details->name ?>" disabled >
                  </div>
                  <div class="form-group col-md-4">
                    <label>Contact</label>
                    <input type="text" class="form-control" value=" <?= $msg_details->phone ?>" disabled>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Email</label>
                    <input type="text" class="form-control" value=" <?= $msg_details->email ?>"  disabled>
                  </div>
                  <div class="form-group col-md-12">
                    <label>Message Subject</label>
                    <input type="text" class="form-control" value=" <?= $msg_details->subject ?>" disabled >
                  </div>
                  <div class="form-group col-md-12">
                    <label>Client Message</label>
                    <textarea class="form-control" rows="5" name =" <?= $msg_details->msg ?>" disabled> <?= $msg_details->msg ?>
                      </textarea>
                  </div>
                  <div class=" form-group col-md-12">
                  <button class="col-md-3 btn btn-primary" onclick="return delete_record(<?=$msg_details->msg_id?>)"> Delete</button>
                 <a  class="col-md-3 btn btn-primary" style="margin-left: 10px;" href=<?php echo base_url()?>messages>Back</a>
                 </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
