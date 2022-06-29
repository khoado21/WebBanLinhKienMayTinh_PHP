<?php echo form_open('danhgium/edit/'.$danhgium['MADANHGIA']); ?>

	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo ($this->input->post('MANGUOIDUNG') ? $this->input->post('MANGUOIDUNG') : $danhgium['MANGUOIDUNG']); ?>" />
	</div>
	<div>
		SOSAO : 
		<input type="text" name="SOSAO" value="<?php echo ($this->input->post('SOSAO') ? $this->input->post('SOSAO') : $danhgium['SOSAO']); ?>" />
	</div>
	<div>
		NGAYDANHGIA : 
		<input type="text" name="NGAYDANHGIA" value="<?php echo ($this->input->post('NGAYDANHGIA') ? $this->input->post('NGAYDANHGIA') : $danhgium['NGAYDANHGIA']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>