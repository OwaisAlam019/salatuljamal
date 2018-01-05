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
                  <th>no</th>
                  <th>Customer</th>
                  <th>Time</th>
                  <th>date</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($reservations as $row) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['customer']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                        <td><a href=<?php echo base_url()?>admin/details/<?php echo $row['id']?>><button class="btn btn-primary">view details</button></a></td>
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