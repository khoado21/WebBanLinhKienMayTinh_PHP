<?php echo form_open('ctdh/add'); ?>

	<div>
		DONGIA : 
		<input type="text" name="DONGIA" value="<?php echo $this->input->post('DONGIA'); ?>" />
	</div>
	<div>
		SOLUONG : 
		<input type="text" name="SOLUONG" value="<?php echo $this->input->post('SOLUONG'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>