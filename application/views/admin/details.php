  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reservation List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                    
                    
                </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td><b>NAME</b></td>
                        <td><?php echo $details->name ?></td>
                        <td><b>EMAIL</b></td>
                        <td><?php echo $details->email ?></td>
                    </tr>
                    
                    <tr>
                        <td><b>FACIAL</b>:</td>
                        <td><?php if($details->facial==1){ echo("yes");}else{echo("no");}?></td>
                        <td><b>EYEBROWS</b></td>
                        <td><?php if($details->eyebrow==1){ echo("yes");}else{echo("no");}?></td>
                    </tr>
                    
                    <tr>
                        <td><b>MICRODERMABRASION</b></td>
                        <td><?php if($details->micro==1){ echo("yes");}else{echo("no");}?></td>
                        <td><b>ACNE TREATMENT</b></td>
                        <td><?php if($details->acne==1){ echo("yes");}else{echo("no");}?></td>
                    </tr>
                    
                    <tr>
                        <td><b>WASH</b></td>
                        <td><?php if($details->wash==1){ echo("yes");}else{echo("no");}?></td>
                        <td><b>CUT FINISH</b></td>
                        <td><?php if($details->cut_finish==1){ echo("yes");}else{echo("no");}?></td>
                    </tr>
                    
                    <tr>
                        <td><b>BLOW DRYING</b></td>
                        <td><?php if($details->blow==1){ echo("yes");}else{echo("no");}?></td>
                        <td><b>HAIR COLOURING</b></td>
                        <td><?php if($details->hairclr==1){ echo("yes");}else{echo("no");}?></td>
                    </tr>
                    
                  </tbody>
                  
                
              </table>
                <br>
                  <legend>Notes:</legend>
                  <p><?php echo $details->notes?></p>
            </div>
              
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            

            <a href=<?php echo base_url()?>admin/res_complete/<?php echo $row_id ?>><button class="btn btn-primary">mark as completed</button></a>
            <a href=<?php echo base_url()?>admin/reservations><button class="btn btn-primary"><i class="fa fa-arrow"></i>go back</button></a>
         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>