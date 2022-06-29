<?php echo form_open('tintuc/edit/'.$tintuc['MATINTUC']); ?>

	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo ($this->input->post('MANGUOIDUNG') ? $this->input->post('MANGUOIDUNG') : $tintuc['MANGUOIDUNG']); ?>" />
	</div>
	<div>
		TIEUDE : 
		<input type="text" name="TIEUDE" value="<?php echo ($this->input->post('TIEUDE') ? $this->input->post('TIEUDE') : $tintuc['TIEUDE']); ?>" />
	</div>
	<div>
		NOIDUNG : 
		<input type="text" name="NOIDUNG" value="<?php echo ($this->input->post('NOIDUNG') ? $this->input->post('NOIDUNG') : $tintuc['NOIDUNG']); ?>" />
	</div>
	<div>
		NGAYDANG : 
		<input type="text" name="NGAYDANG" value="<?php echo ($this->input->post('NGAYDANG') ? $this->input->post('NGAYDANG') : $tintuc['NGAYDANG']); ?>" />
	</div>
	<div>
		NGAYSUA : 
		<input type="text" name="NGAYSUA" value="<?php echo ($this->input->post('NGAYSUA') ? $this->input->post('NGAYSUA') : $tintuc['NGAYSUA']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>