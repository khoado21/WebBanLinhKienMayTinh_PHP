<?php echo form_open('danhgium/add'); ?>

	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo $this->input->post('MANGUOIDUNG'); ?>" />
	</div>
	<div>
		SOSAO : 
		<input type="text" name="SOSAO" value="<?php echo $this->input->post('SOSAO'); ?>" />
	</div>
	<div>
		NGAYDANHGIA : 
		<input type="text" name="NGAYDANHGIA" value="<?php echo $this->input->post('NGAYDANHGIA'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>