  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header -->
            <div class="box-body">
            <!-- <?php var_dump($msg_details) ?>  -->

           <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title center">Client Message Details</h3>
            </div>
            <!-- /.box-header -->
        
                 
            <div class="box-body">
              
        <div class="row">
             <div class="col-md-6">
              <form role="form">
                <!-- text input -->
                 
                <div class="form-group">
                  <label>Client Name</label>
                  <input type="text" class="form-control" value=" <?= $msg_details->name ?>" disabled >
                </div>
                <div class="form-group">
                  <label>Client phone number</label>
                  <input type="text" class="form-control" value=" <?= $msg_details->phone ?>" disabled>
                </div>
                <div class="form-group">
                  <label>Client Email</label>
                  <input type="text" class="form-control" value=" <?= $msg_details->email ?>"  disabled>
                </div>
                 </form>
               </div>
  </form>

                
                <div class="col-md-6">   

                  <form role="form">
                    <div class="form-group">
                  <label>Message Subject</label>
                  <input type="text" class="form-control" value=" <?= $msg_details->subject ?>" disabled >
                  </div>
                   <div class="form-group">
                  <label>Client Message</label>
                  <textarea class="form-control" rows="5" name =" <?= $msg_details->msg ?>" disabled> <?= $msg_details->msg ?>
                    </textarea>

                     </div>
                      </form>
                 </div> 
</div>
                 </div>
                </div> 

                <!-- input states -->
           
          <!-- /.box -->
            

            <a href=<?php echo base_url()?>admin/msg_delete/<?= $msg_details->msg_id ?>><button class="btn btn-primary">Delete</button></a>
            <a href=<?php echo base_url()?>admin/client_message><button class="btn btn-primary"><i class="fa fa-arrow"></i>Back</button></a>
         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

