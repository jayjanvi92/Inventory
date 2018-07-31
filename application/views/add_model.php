<body>

    <?php include('includes/side_bar.php'); ?>
            <?php if($this->session->flashdata('msg')): ?>
              <p><?php echo $this->session->flashdata('msg'); ?></p>
          <?php endif; ?>

          <?php echo validation_errors('<p class="form_error">','</p>'); ?>
          <h4>Add Model</h4>
        <div class="col-sm-9 col-sm-offset-1 col-md-5 col-md-offset-1 main">
       	
					<form id="login-form" action="<?php echo base_url();?>Model/add_model" method="post" role="form" style="display: block;">
            <?php //print_r($manufac); ?>
              <div class="form-group">
                <div class="col-sm-6">
                <label for="sel1">Select list:</label>
                <select class="form-control" id="manufac" name="manufac">
                  <option value="">Select Manufacturer</option>
                  <?php 
                    foreach ($manufac as $man_name) {
                      ?>
                        <option value="<?php  echo $man_name->id; ?>"><?php  echo $man_name->manufacture_name; ?></option>
                      <?php
                    }
                  ?>
                  </select>
                </div>
                <div class="col-sm-6">
                   <label for="sel1">Model Name:</label>
                  <input type="text" name="modal_name" id="modal_name" tabindex="1" class="form-control" placeholder="Manufacturer" value="<?php echo set_value('modal_name') ?>">
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
               <label for="sel1">Model Quantity:</label>
                  <input type="text" name="quantity" id=quantity" tabindex="1" class="form-control" placeholder="Manufacturer" value="<?php echo set_value('quantity') ?>">
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
               <label for="sel1">Model Color:</label>
                  <input type="text" name="color" id="color" tabindex="1" class="form-control" placeholder="Manufacturer" value="<?php echo set_value('color') ?>">
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
               <label for="sel1">Menufacture Year:</label>
                  <input type="text" name="year" id="year" tabindex="1" class="form-control" placeholder="Manufacturer" value="<?php echo set_value('year') ?>">
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
               <label for="sel1">Registration Number:</label>
                  <input type="text" name="reg_num" id="reg_num" tabindex="1" class="form-control" placeholder="Manufacturer" value="<?php echo set_value('reg_num') ?>">
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
               <label for="sel1">Note:</label>
                  <textarea type="text" name="note" id="note" tabindex="1" class="form-control" placeholder="Manufacturer" value="<?php echo set_value('note') ?>" ></textarea>
                </div>
            </div>
            
            <div class="col-sm-9 col-sm-offset-5 col-md-3 col-md-offset-5 main">
              <br>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">Primary</button>
            </div>
          </div>
        </div>

						
						
					</form>
								
						
					</div>
          
				</div>
			</div>
	

    
  </body>

