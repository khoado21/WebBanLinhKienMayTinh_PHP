<?php echo form_open('thuonghieu/add'); ?>

	<div>
		TENTHUONGHIEU : 
		<input type="text" name="TENTHUONGHIEU" value="<?php echo $this->input->post('TENTHUONGHIEU'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>