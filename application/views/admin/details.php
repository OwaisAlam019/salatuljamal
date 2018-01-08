    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="margin-left: 50%">
        <?= $details->name ?>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol> -->
    </section>


    <!-- Main content -->
    <section class="content">
       <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Reservation Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="row col-md-12">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" disabled value="<?=$details->email?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Contact No.</label>
                    <input type="text" class="form-control" disabled value="<?=$details->phone?>">
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" disabled value="<?=$details->date?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Time</label>
                    <input type="text" class="form-control" disabled value="<?=$details->time?>">
                  </div>
                </div>
                <div class="row form-group col-md-12">
                  <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->facial?"checked":""?> > Facial
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->eyebrow?"checked":""?> > Eyebrows & Eyelashes
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->micro?"checked":""?> > Microdermabrasion

                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->acne?"checked":""?> > Acne Treatments
                    </label>
                  </div>
                </div>
                <div class="row form-group col-md-12">
                  <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->wash?"checked":""?> > Wash

                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->cut_finish?"checked":""?> > Cut & Finish
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->blow?"checked":""?> > Blow Dries
                    </label>
                  </div>
                   <div class="col-md-3">
                    <label>
                      <input type="checkbox" disabled <?= $details->hairclr?"checked":""?> > Hair Colouring & Highlights
                    </label>
                  </div>
                </div>
                 <div class="form-group col-md-12">
                  <label>Note</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled> <?= $details->notes?></textarea>
                </div>
                <div class="form-group col-md-12">
                <a class="btn btn-primary col-md-2" href="<?=base_url()?>admin/reservations">Back</a>  
                </div>
                
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->