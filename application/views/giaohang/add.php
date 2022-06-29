<?php echo form_open('giaohang/add'); ?>

	<div>
		TENNGUOIGIAO : 
		<input type="text" name="TENNGUOIGIAO" value="<?php echo $this->input->post('TENNGUOIGIAO'); ?>" />
	</div>
	<div>
		NGAYGIAO : 
		<input type="text" name="NGAYGIAO" value="<?php echo $this->input->post('NGAYGIAO'); ?>" />
	</div>
	<div>
		SDT : 
		<input type="text" name="SDT" value="<?php echo $this->input->post('SDT'); ?>" />
	</div>
	<div>
		XACNHAN : 
		<input type="text" name="XACNHAN" value="<?php echo $this->input->post('XACNHAN'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>