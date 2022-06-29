<?php echo form_open('voucher/edit/'.$voucher['MAVOUCHER']); ?>

	<div>
		TENMA : 
		<input type="text" name="TENMA" value="<?php echo ($this->input->post('TENMA') ? $this->input->post('TENMA') : $voucher['TENMA']); ?>" />
	</div>
	<div>
		NGAYBD : 
		<input type="text" name="NGAYBD" value="<?php echo ($this->input->post('NGAYBD') ? $this->input->post('NGAYBD') : $voucher['NGAYBD']); ?>" />
	</div>
	<div>
		NGAYKT : 
		<input type="text" name="NGAYKT" value="<?php echo ($this->input->post('NGAYKT') ? $this->input->post('NGAYKT') : $voucher['NGAYKT']); ?>" />
	</div>
	<div>
		TYLE : 
		<input type="text" name="TYLE" value="<?php echo ($this->input->post('TYLE') ? $this->input->post('TYLE') : $voucher['TYLE']); ?>" />
	</div>
	<div>
		TRANGTHAI : 
		<input type="text" name="TRANGTHAI" value="<?php echo ($this->input->post('TRANGTHAI') ? $this->input->post('TRANGTHAI') : $voucher['TRANGTHAI']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>