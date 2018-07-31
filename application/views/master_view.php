<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css
">

<body>
<?php include('includes/side_bar.php'); ?>
          <div class="col-sm-9  col-md-8 main">
       	      
              <table id="example" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Sr.No.</th>
                <th>Manufacture Name</th>
                <th>Model Name</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php 
          $i= 1;
          foreach ($all_data as $row) {
            ?>
              <tr>
                <th><?php echo $i; ?></th>
                <th><?php echo $row->manufacture_name; ?></th>
                <th><?php echo $row->model_name; ?></th>
                <th><?php echo $row->quantity; ?></th>
                <th>
                  <!-- <a href="" class="label label-primary" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">view</a> -->
                  <a href="#" type="button" class="label label-primary" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">view</a>

                  <!-- <label class="label label-danger">delete</label> -->
                  <!-- Modal -->
                  <div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          
                          <table class="table">
    
                          <tbody>
                              <tr>
                                <td>Manufacture Name</td>
                                <td><?php echo $row->manufacture_name; ?></td>
                              </tr>
                              <tr>
                                <td>Model Name</td>
                                <td><?php echo $row->model_name; ?></td>
                              </tr>
                              <tr>
                                <td>Quantity</td>
                                <td><?php echo $row->quantity; ?></td>
                              </tr>
                              <tr>
                                <td>Color</td>
                                <td><?php echo $row->color; ?></td>
                              </tr>
                              <tr>
                                <td>Manufacutrer Year</td>
                                <td><?php echo $row->year; ?></td>
                              </tr>
                              <tr>
                                <td>Registration Number</td>
                                <td><?php echo $row->reg_number; ?></td>
                              </tr>

                            </tbody>
                          </table>

                        </div>
                        <div class="modal-footer">
      <a type="button" class="btn btn-danger" onclick="sold_model_(<?php echo $row->quantity; ?>,<?php echo $row->mid; ?>)" >Sold</a>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      <input type="hidden" id="base" value="<?php echo base_url(); ?>">
                    </div>
                  </div>
                </th>
              </tr>

              
            <?php
            $i++;
          } ?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Sr.No.</th>
                <th>Manufacture Name</th>
                <th>Model Name</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
 
						
					</div>
				</div>
			</div>
	

    
  </body>
