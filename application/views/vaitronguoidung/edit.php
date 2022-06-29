<?php echo form_open('vaitronguoidung/edit/'.$vaitronguoidung['MAQUYEN']); ?>

	<div>
		TENQUYEN : 
		<input type="text" name="TENQUYEN" value="<?php echo ($this->input->post('TENQUYEN') ? $this->input->post('TENQUYEN') : $vaitronguoidung['TENQUYEN']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>