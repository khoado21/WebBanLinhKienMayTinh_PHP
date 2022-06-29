<?php echo form_open('donhang/edit/'.$donhang['MADONHANG']); ?>

	<div>
		MAVOUCHER : 
		<input type="text" name="MAVOUCHER" value="<?php echo ($this->input->post('MAVOUCHER') ? $this->input->post('MAVOUCHER') : $donhang['MAVOUCHER']); ?>" />
	</div>
	<div>
		MAGIAOHANG : 
		<input type="text" name="MAGIAOHANG" value="<?php echo ($this->input->post('MAGIAOHANG') ? $this->input->post('MAGIAOHANG') : $donhang['MAGIAOHANG']); ?>" />
	</div>
	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo ($this->input->post('MANGUOIDUNG') ? $this->input->post('MANGUOIDUNG') : $donhang['MANGUOIDUNG']); ?>" />
	</div>
	<div>
		NGAYDAT : 
		<input type="text" name="NGAYDAT" value="<?php echo ($this->input->post('NGAYDAT') ? $this->input->post('NGAYDAT') : $donhang['NGAYDAT']); ?>" />
	</div>
	<div>
		NGAYSHIP : 
		<input type="text" name="NGAYSHIP" value="<?php echo ($this->input->post('NGAYSHIP') ? $this->input->post('NGAYSHIP') : $donhang['NGAYSHIP']); ?>" />
	</div>
	<div>
		TONGDON : 
		<input type="text" name="TONGDON" value="<?php echo ($this->input->post('TONGDON') ? $this->input->post('TONGDON') : $donhang['TONGDON']); ?>" />
	</div>
	<div>
		HOTEN : 
		<input type="text" name="HOTEN" value="<?php echo ($this->input->post('HOTEN') ? $this->input->post('HOTEN') : $donhang['HOTEN']); ?>" />
	</div>
	<div>
		SDT : 
		<input type="text" name="SDT" value="<?php echo ($this->input->post('SDT') ? $this->input->post('SDT') : $donhang['SDT']); ?>" />
	</div>
	<div>
		DIACHI : 
		<input type="text" name="DIACHI" value="<?php echo ($this->input->post('DIACHI') ? $this->input->post('DIACHI') : $donhang['DIACHI']); ?>" />
	</div>
	<div>
		GIOITINH : 
		<input type="text" name="GIOITINH" value="<?php echo ($this->input->post('GIOITINH') ? $this->input->post('GIOITINH') : $donhang['GIOITINH']); ?>" />
	</div>
	<div>
		EMAIL : 
		<input type="text" name="EMAIL" value="<?php echo ($this->input->post('EMAIL') ? $this->input->post('EMAIL') : $donhang['EMAIL']); ?>" />
	</div>
	<div>
		GHICHU : 
		<input type="text" name="GHICHU" value="<?php echo ($this->input->post('GHICHU') ? $this->input->post('GHICHU') : $donhang['GHICHU']); ?>" />
	</div>
	<div>
		SOTHEODOI : 
		<input type="text" name="SOTHEODOI" value="<?php echo ($this->input->post('SOTHEODOI') ? $this->input->post('SOTHEODOI') : $donhang['SOTHEODOI']); ?>" />
	</div>
	<div>
		VANCHUYEN : 
		<input type="text" name="VANCHUYEN" value="<?php echo ($this->input->post('VANCHUYEN') ? $this->input->post('VANCHUYEN') : $donhang['VANCHUYEN']); ?>" />
	</div>
	<div>
		TINHTRANGTHANHTOAN : 
		<input type="text" name="TINHTRANGTHANHTOAN" value="<?php echo ($this->input->post('TINHTRANGTHANHTOAN') ? $this->input->post('TINHTRANGTHANHTOAN') : $donhang['TINHTRANGTHANHTOAN']); ?>" />
	</div>
	<div>
		NGAYTHANHTOAN : 
		<input type="text" name="NGAYTHANHTOAN" value="<?php echo ($this->input->post('NGAYTHANHTOAN') ? $this->input->post('NGAYTHANHTOAN') : $donhang['NGAYTHANHTOAN']); ?>" />
	</div>
	<div>
		NGAYHETHAN : 
		<input type="text" name="NGAYHETHAN" value="<?php echo ($this->input->post('NGAYHETHAN') ? $this->input->post('NGAYHETHAN') : $donhang['NGAYHETHAN']); ?>" />
	</div>
	<div>
		TRANSACTIONID : 
		<input type="text" name="TRANSACTIONID" value="<?php echo ($this->input->post('TRANSACTIONID') ? $this->input->post('TRANSACTIONID') : $donhang['TRANSACTIONID']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>