<?php echo form_open('thuonghieu/edit/'.$thuonghieu['MATHUONGHIEU']); ?>

	<div>
		TENTHUONGHIEU : 
		<input type="text" name="TENTHUONGHIEU" value="<?php echo ($this->input->post('TENTHUONGHIEU') ? $this->input->post('TENTHUONGHIEU') : $thuonghieu['TENTHUONGHIEU']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>