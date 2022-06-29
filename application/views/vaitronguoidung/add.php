<?php echo form_open('vaitronguoidung/add'); ?>

	<div>
		TENQUYEN : 
		<input type="text" name="TENQUYEN" value="<?php echo $this->input->post('TENQUYEN'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>