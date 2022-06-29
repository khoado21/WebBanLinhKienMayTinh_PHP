<?php echo form_open('contact/add'); ?>

	<div>
		HOTEN : 
		<input type="text" name="HOTEN" value="<?php echo $this->input->post('HOTEN'); ?>" />
	</div>
	<div>
		EMAIL : 
		<input type="text" name="EMAIL" value="<?php echo $this->input->post('EMAIL'); ?>" />
	</div>
	<div>
		NOIDUNG : 
		<input type="text" name="NOIDUNG" value="<?php echo $this->input->post('NOIDUNG'); ?>" />
	</div>
	<div>
		TINHTRANGDON : 
		<input type="text" name="TINHTRANGDON" value="<?php echo $this->input->post('TINHTRANGDON'); ?>" />
	</div>
	<div>
		NGAYGUI : 
		<input type="text" name="NGAYGUI" value="<?php echo $this->input->post('NGAYGUI'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>