  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Client Message's List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <!-- <th>no</th> -->
                  <th>Customer Name</th>
                  <th>Email</th>
                  <!-- <th>Phone number</th> -->
                  <th>Message Subject</th>
                  <!-- <th>Message</th> -->
                   <th>Show</th>
                </tr>
                </thead>
                <tbody>

                    <?php foreach($clientmessage as $row) : ?>
                    <tr>
                        <!-- <td><?php echo $row['msg_id']; ?></td> -->
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <!-- <td><?php echo $row['phone']; ?></td> -->
                        <td><?php echo $row['subject']; ?></td>
                         <!-- <td><?php echo $row['msg']; ?></td> -->
                         <td><a href=<?php echo base_url()?>admin/msg_details/<?php echo $row['msg_id']?>><button class="btn btn-primary">view details</button></a></td>
                      
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                
              </table>
                <a href=<?php echo base_url()?>admin/logout><button class="btn btn-primary">Logout</button></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>