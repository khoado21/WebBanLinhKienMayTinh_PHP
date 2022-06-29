<?php echo form_open('ctdh/edit/'.$ctdh['MASP']); ?>

	<div>
		DONGIA : 
		<input type="text" name="DONGIA" value="<?php echo ($this->input->post('DONGIA') ? $this->input->post('DONGIA') : $ctdh['DONGIA']); ?>" />
	</div>
	<div>
		SOLUONG : 
		<input type="text" name="SOLUONG" value="<?php echo ($this->input->post('SOLUONG') ? $this->input->post('SOLUONG') : $ctdh['SOLUONG']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>