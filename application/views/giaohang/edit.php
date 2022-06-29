<?php echo form_open('giaohang/edit/'.$giaohang['MAGIAOHANG']); ?>

	<div>
		TENNGUOIGIAO : 
		<input type="text" name="TENNGUOIGIAO" value="<?php echo ($this->input->post('TENNGUOIGIAO') ? $this->input->post('TENNGUOIGIAO') : $giaohang['TENNGUOIGIAO']); ?>" />
	</div>
	<div>
		NGAYGIAO : 
		<input type="text" name="NGAYGIAO" value="<?php echo ($this->input->post('NGAYGIAO') ? $this->input->post('NGAYGIAO') : $giaohang['NGAYGIAO']); ?>" />
	</div>
	<div>
		SDT : 
		<input type="text" name="SDT" value="<?php echo ($this->input->post('SDT') ? $this->input->post('SDT') : $giaohang['SDT']); ?>" />
	</div>
	<div>
		XACNHAN : 
		<input type="text" name="XACNHAN" value="<?php echo ($this->input->post('XACNHAN') ? $this->input->post('XACNHAN') : $giaohang['XACNHAN']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>