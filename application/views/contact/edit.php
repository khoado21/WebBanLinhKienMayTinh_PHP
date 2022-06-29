<?php echo form_open('contact/edit/'.$contact['MALH']); ?>

	<div>
		HOTEN : 
		<input type="text" name="HOTEN" value="<?php echo ($this->input->post('HOTEN') ? $this->input->post('HOTEN') : $contact['HOTEN']); ?>" />
	</div>
	<div>
		EMAIL : 
		<input type="text" name="EMAIL" value="<?php echo ($this->input->post('EMAIL') ? $this->input->post('EMAIL') : $contact['EMAIL']); ?>" />
	</div>
	<div>
		NOIDUNG : 
		<input type="text" name="NOIDUNG" value="<?php echo ($this->input->post('NOIDUNG') ? $this->input->post('NOIDUNG') : $contact['NOIDUNG']); ?>" />
	</div>
	<div>
		TINHTRANGDON : 
		<input type="text" name="TINHTRANGDON" value="<?php echo ($this->input->post('TINHTRANGDON') ? $this->input->post('TINHTRANGDON') : $contact['TINHTRANGDON']); ?>" />
	</div>
	<div>
		NGAYGUI : 
		<input type="text" name="NGAYGUI" value="<?php echo ($this->input->post('NGAYGUI') ? $this->input->post('NGAYGUI') : $contact['NGAYGUI']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>