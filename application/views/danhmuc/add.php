<?php echo form_open('danhmuc/add'); ?>

	<div>
		TENDM : 
		<input type="text" name="TENDM" value="<?php echo $this->input->post('TENDM'); ?>" />
	</div>
	<div>
		 MOTA : 
		<input type="text" name="_MOTA" value="<?php echo $this->input->post('_MOTA'); ?>" />
	</div>
	<div>
		HINHANH : 
		<input type="text" name="HINHANH" value="<?php echo $this->input->post('HINHANH'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>