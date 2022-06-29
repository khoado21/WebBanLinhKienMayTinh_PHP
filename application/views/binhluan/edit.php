<?php echo form_open('binhluan/edit/'.$binhluan['MABINHLUAN']); ?>

	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo ($this->input->post('MANGUOIDUNG') ? $this->input->post('MANGUOIDUNG') : $binhluan['MANGUOIDUNG']); ?>" />
	</div>
	<div>
		NOIDUNG : 
		<input type="text" name="NOIDUNG" value="<?php echo ($this->input->post('NOIDUNG') ? $this->input->post('NOIDUNG') : $binhluan['NOIDUNG']); ?>" />
	</div>
	<div>
		NGAYTAO : 
		<input type="text" name="NGAYTAO" value="<?php echo ($this->input->post('NGAYTAO') ? $this->input->post('NGAYTAO') : $binhluan['NGAYTAO']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>