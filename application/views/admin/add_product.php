 <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Reservation List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
               <form  class=" m-ajax-form" action="<?=base_url()?>admin/add_product" method="post">
            <label for="name" >name</label>
			<br/>
			<input type="text" name="name" id="name">
			<br/>
			<label for="price">Price</label>
			<br/>
			<input type="number" name="price" id="price">
			<br/>
            <label for="description">Description</label>
			<br/>
            <textarea type="text" name="description" id="description"></textarea>
			<br/>
			<button type="submit">Add</button>
			<br/>
            </form>
            </div>
              
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            

            <a href=<?php echo base_url()?>reservations><button class="btn btn-primary"><i class="fa fa-arrow"></i>go back</button></a>
         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>