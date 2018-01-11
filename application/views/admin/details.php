<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Reservation Details
        <small><?= $details->name ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li><a href="#">Reservations</a></li>
        <li class="active">Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $details->name ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url()?>reservations/update/<?=$details->reservation_id?>" method="POST">
              <div class="box-body">
                <input type="hidden" name="customer_id" value="<?=$details->customer_id?>">
               <div class="col-md-12"> 
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Email</label>
                  <input  disabled type="email" name="email" class="form-control .class" value="<?=$details->email?>" placeholder="Enter email">
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword1">Contact</label>
                  <input  disabled type="text" class="form-control" name="phone" value="<?=$details->phone?>" placeholder="Contact No.">
                </div>
              </div>
              <div class="form-group col-md-12">
                <!-- time Picker -->
              <div class="bootstrap-timepicker col-md-6">
                <div class="form-group">
                  <label>Time:</label>
                  <div class="input-group">
                    <input  disabled type="text" name="time" placeholder="Reservation Time" id="timepicker" value="<?=$details->time?>" class="form-control editable timepicker">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
              </div>

               <div class="form-group col-md-6">
                <label>Date:</label>

                <div class="input-group date" id="datepicker">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input  disabled="true" type="text" name="date" placeholder="Reservation Date" value="<?=$details->date?>" class="form-control pull-right editable " >
                </div>
                <!-- /.input group -->
              </div>
            </div>
                 <div class="row form-group col-md-12 " style="margin-left: 4PX;">
                  <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->facial?"checked":""?> > Facial
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->eyebrow?"checked":""?> > Eyebrows & Eyelashes
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->micro?"checked":""?> > Microdermabrasion

                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->acne?"checked":""?> > Acne Treatments
                    </label>
                  </div>
                </div>
                <div class="row form-group col-md-12" style="margin-left: 4PX;">
                  <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->wash?"checked":""?> > Wash

                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->cut_finish?"checked":""?> > Cut & Finish
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->blow?"checked":""?> > Blow Dries
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled="true" <?= $details->hairclr?"checked":""?> > Hair Colouring & Highlights
                    </label>
                  </div>
                </div>

                <div class="form-group col-md-12">
                  <label>Note</label>
                  <textarea class="form-control" name="notes"  placeholder="Enter ..." disabled="true"> <?= $details->notes?></textarea>
                  <input type="hidden" value="<?= $details->notes?>" name="notes">
                </div>
                <div class="form-group col-md-12">
                  <a class=" form-group btn btn-primary col-md-2" href="<?=base_url()?>reservations">Back</a>  
                  <input type="button" class=" form-group btn btn-info col-md-2" id="edit-btn" value="Edit" style="margin-left:10px" >
                    <button type="Submit" id="edit-submit" class="btn btn-primary col-md-2" style="margin-left:10px; display:none;">Submit</button>
                    <input type="button" class=" form-group btn btn-success col-md-2" onclick="return completed(<?=$details->reservation_id?>)" id="completed-btn" value="Completed" style="margin-left:10px" > 
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
             
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
