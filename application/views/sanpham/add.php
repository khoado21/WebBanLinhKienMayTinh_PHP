<?php echo form_open('sanpham/add'); ?>

	<div>
		BANCHAY : 
		<input type="checkbox" name="BANCHAY" value="1" />
	</div>
	<div>
		MATHUONGHIEU : 
		<input type="text" name="MATHUONGHIEU" value="<?php echo $this->input->post('MATHUONGHIEU'); ?>" />
	</div>
	<div>
		MADM : 
		<input type="text" name="MADM" value="<?php echo $this->input->post('MADM'); ?>" />
	</div>
	<div>
		TENSP : 
		<input type="text" name="TENSP" value="<?php echo $this->input->post('TENSP'); ?>" />
	</div>
	<div>
		CHITIET : 
		<input type="text" name="CHITIET" value="<?php echo $this->input->post('CHITIET'); ?>" />
	</div>
	<div>
		DONGIA : 
		<input type="text" name="DONGIA" value="<?php echo $this->input->post('DONGIA'); ?>" />
	</div>
	<div>
		GIAKM : 
		<input type="text" name="GIAKM" value="<?php echo $this->input->post('GIAKM'); ?>" />
	</div>
	<div>
		BAOHANH : 
		<input type="text" name="BAOHANH" value="<?php echo $this->input->post('BAOHANH'); ?>" />
	</div>
	<div>
		LUOTXEM : 
		<input type="text" name="LUOTXEM" value="<?php echo $this->input->post('LUOTXEM'); ?>" />
	</div>
	<div>
		NGAYDANG : 
		<input type="text" name="NGAYDANG" value="<?php echo $this->input->post('NGAYDANG'); ?>" />
	</div>
	<div>
		SOLUONG : 
		<input type="text" name="SOLUONG" value="<?php echo $this->input->post('SOLUONG'); ?>" />
	</div>
	<div>
		HINHANH : 
		<input type="text" name="HINHANH" value="<?php echo $this->input->post('HINHANH'); ?>" />
	</div>
	<div>
		TINHTRANGSP : 
		<input type="text" name="TINHTRANGSP" value="<?php echo $this->input->post('TINHTRANGSP'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>