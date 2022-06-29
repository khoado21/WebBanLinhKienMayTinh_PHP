<?php echo form_open('hinhanh/add'); ?>

	<div>
		MASP : 
		<input type="text" name="MASP" value="<?php echo $this->input->post('MASP'); ?>" />
	</div>
	<div>
		LINKANH : 
		<input type="text" name="LINKANH" value="<?php echo $this->input->post('LINKANH'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>