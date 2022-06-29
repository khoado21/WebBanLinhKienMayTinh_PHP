<?php echo form_open('binhluan/add'); ?>

	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo $this->input->post('MANGUOIDUNG'); ?>" />
	</div>
	<div>
		NOIDUNG : 
		<input type="text" name="NOIDUNG" value="<?php echo $this->input->post('NOIDUNG'); ?>" />
	</div>
	<div>
		NGAYTAO : 
		<input type="text" name="NGAYTAO" value="<?php echo $this->input->post('NGAYTAO'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>