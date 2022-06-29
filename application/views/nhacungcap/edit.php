<?php echo form_open('nhacungcap/edit/'.$nhacungcap['MANCC']); ?>

	<div>
		TENNCC : 
		<input type="text" name="TENNCC" value="<?php echo ($this->input->post('TENNCC') ? $this->input->post('TENNCC') : $nhacungcap['TENNCC']); ?>" />
	</div>
	<div>
		DIACHI : 
		<input type="text" name="DIACHI" value="<?php echo ($this->input->post('DIACHI') ? $this->input->post('DIACHI') : $nhacungcap['DIACHI']); ?>" />
	</div>
	<div>
		THANHPHO : 
		<input type="text" name="THANHPHO" value="<?php echo ($this->input->post('THANHPHO') ? $this->input->post('THANHPHO') : $nhacungcap['THANHPHO']); ?>" />
	</div>
	<div>
		SDT : 
		<input type="text" name="SDT" value="<?php echo ($this->input->post('SDT') ? $this->input->post('SDT') : $nhacungcap['SDT']); ?>" />
	</div>
	<div>
		TINHTRANGXACNHAN : 
		<input type="text" name="TINHTRANGXACNHAN" value="<?php echo ($this->input->post('TINHTRANGXACNHAN') ? $this->input->post('TINHTRANGXACNHAN') : $nhacungcap['TINHTRANGXACNHAN']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>