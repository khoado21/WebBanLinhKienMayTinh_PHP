<?php echo form_open('nhacungcap/add'); ?>

	<div>
		TENNCC : 
		<input type="text" name="TENNCC" value="<?php echo $this->input->post('TENNCC'); ?>" />
	</div>
	<div>
		DIACHI : 
		<input type="text" name="DIACHI" value="<?php echo $this->input->post('DIACHI'); ?>" />
	</div>
	<div>
		THANHPHO : 
		<input type="text" name="THANHPHO" value="<?php echo $this->input->post('THANHPHO'); ?>" />
	</div>
	<div>
		SDT : 
		<input type="text" name="SDT" value="<?php echo $this->input->post('SDT'); ?>" />
	</div>
	<div>
		TINHTRANGXACNHAN : 
		<input type="text" name="TINHTRANGXACNHAN" value="<?php echo $this->input->post('TINHTRANGXACNHAN'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>