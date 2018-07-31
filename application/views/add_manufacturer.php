<body>

    	<?php include('includes/side_bar.php'); ?>
        <div class="col-sm-9 col-sm-offset-1 col-md-4 col-md-offset-1 main">
       	
				<?php if($this->session->flashdata('msg')): ?>
			    <p><?php echo $this->session->flashdata('msg'); ?></p>
			<?php endif; ?>

			<?php echo validation_errors('<p class="form_error">','</p>'); ?>
			<h4>Add Manufacturer</h4>
			<form id="login-form" action="<?php echo base_url();?>Manufacturer/add_manufac" method="post" role="form" style="display: block;">
				<div class="form-group">
					<input type="text" name="manufac" id="manufac" tabindex="1" class="form-control" placeholder="Manufacturer" value="">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Primary</button>
				</div>
				
			</form>
						
				
			</div>
		</div>
	</div>
    
  </body>

