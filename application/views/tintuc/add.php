<?php echo form_open('tintuc/add'); ?>

	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo $this->input->post('MANGUOIDUNG'); ?>" />
	</div>
	<div>
		TIEUDE : 
		<input type="text" name="TIEUDE" value="<?php echo $this->input->post('TIEUDE'); ?>" />
	</div>
	<div>
		NOIDUNG : 
		<input type="text" name="NOIDUNG" value="<?php echo $this->input->post('NOIDUNG'); ?>" />
	</div>
	<div>
		NGAYDANG : 
		<input type="text" name="NGAYDANG" value="<?php echo $this->input->post('NGAYDANG'); ?>" />
	</div>
	<div>
		NGAYSUA : 
		<input type="text" name="NGAYSUA" value="<?php echo $this->input->post('NGAYSUA'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>