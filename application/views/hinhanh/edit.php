<?php echo form_open('hinhanh/edit/'.$hinhanh['MAANH']); ?>

	<div>
		MASP : 
		<input type="text" name="MASP" value="<?php echo ($this->input->post('MASP') ? $this->input->post('MASP') : $hinhanh['MASP']); ?>" />
	</div>
	<div>
		LINKANH : 
		<input type="text" name="LINKANH" value="<?php echo ($this->input->post('LINKANH') ? $this->input->post('LINKANH') : $hinhanh['LINKANH']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>