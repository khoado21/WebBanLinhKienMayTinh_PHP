<?php echo form_open('sanpham/edit/'.$sanpham['MASP']); ?>

	<div>
		BANCHAY : 
		<input type="checkbox" name="BANCHAY" value="1" <?php echo ($sanpham['BANCHAY']==1 ? 'checked="checked"' : ''); ?> />
	</div>
	<div>
		MATHUONGHIEU : 
		<input type="text" name="MATHUONGHIEU" value="<?php echo ($this->input->post('MATHUONGHIEU') ? $this->input->post('MATHUONGHIEU') : $sanpham['MATHUONGHIEU']); ?>" />
	</div>
	<div>
		MADM : 
		<input type="text" name="MADM" value="<?php echo ($this->input->post('MADM') ? $this->input->post('MADM') : $sanpham['MADM']); ?>" />
	</div>
	<div>
		TENSP : 
		<input type="text" name="TENSP" value="<?php echo ($this->input->post('TENSP') ? $this->input->post('TENSP') : $sanpham['TENSP']); ?>" />
	</div>
	<div>
		CHITIET : 
		<input type="text" name="CHITIET" value="<?php echo ($this->input->post('CHITIET') ? $this->input->post('CHITIET') : $sanpham['CHITIET']); ?>" />
	</div>
	<div>
		DONGIA : 
		<input type="text" name="DONGIA" value="<?php echo ($this->input->post('DONGIA') ? $this->input->post('DONGIA') : $sanpham['DONGIA']); ?>" />
	</div>
	<div>
		GIAKM : 
		<input type="text" name="GIAKM" value="<?php echo ($this->input->post('GIAKM') ? $this->input->post('GIAKM') : $sanpham['GIAKM']); ?>" />
	</div>
	<div>
		BAOHANH : 
		<input type="text" name="BAOHANH" value="<?php echo ($this->input->post('BAOHANH') ? $this->input->post('BAOHANH') : $sanpham['BAOHANH']); ?>" />
	</div>
	<div>
		LUOTXEM : 
		<input type="text" name="LUOTXEM" value="<?php echo ($this->input->post('LUOTXEM') ? $this->input->post('LUOTXEM') : $sanpham['LUOTXEM']); ?>" />
	</div>
	<div>
		NGAYDANG : 
		<input type="text" name="NGAYDANG" value="<?php echo ($this->input->post('NGAYDANG') ? $this->input->post('NGAYDANG') : $sanpham['NGAYDANG']); ?>" />
	</div>
	<div>
		SOLUONG : 
		<input type="text" name="SOLUONG" value="<?php echo ($this->input->post('SOLUONG') ? $this->input->post('SOLUONG') : $sanpham['SOLUONG']); ?>" />
	</div>
	<div>
		HINHANH : 
		<input type="text" name="HINHANH" value="<?php echo ($this->input->post('HINHANH') ? $this->input->post('HINHANH') : $sanpham['HINHANH']); ?>" />
	</div>
	<div>
		TINHTRANGSP : 
		<input type="text" name="TINHTRANGSP" value="<?php echo ($this->input->post('TINHTRANGSP') ? $this->input->post('TINHTRANGSP') : $sanpham['TINHTRANGSP']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>