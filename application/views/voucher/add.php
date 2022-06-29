<?php echo form_open('voucher/add'); ?>

	<div>
		TENMA : 
		<input type="text" name="TENMA" value="<?php echo $this->input->post('TENMA'); ?>" />
	</div>
	<div>
		NGAYBD : 
		<input type="text" name="NGAYBD" value="<?php echo $this->input->post('NGAYBD'); ?>" />
	</div>
	<div>
		NGAYKT : 
		<input type="text" name="NGAYKT" value="<?php echo $this->input->post('NGAYKT'); ?>" />
	</div>
	<div>
		TYLE : 
		<input type="text" name="TYLE" value="<?php echo $this->input->post('TYLE'); ?>" />
	</div>
	<div>
		TRANGTHAI : 
		<input type="text" name="TRANGTHAI" value="<?php echo $this->input->post('TRANGTHAI'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>