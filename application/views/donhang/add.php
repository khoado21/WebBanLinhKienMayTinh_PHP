<?php echo form_open('donhang/add'); ?>

	<div>
		MAVOUCHER : 
		<input type="text" name="MAVOUCHER" value="<?php echo $this->input->post('MAVOUCHER'); ?>" />
	</div>
	<div>
		MAGIAOHANG : 
		<input type="text" name="MAGIAOHANG" value="<?php echo $this->input->post('MAGIAOHANG'); ?>" />
	</div>
	<div>
		MANGUOIDUNG : 
		<input type="text" name="MANGUOIDUNG" value="<?php echo $this->input->post('MANGUOIDUNG'); ?>" />
	</div>
	<div>
		NGAYDAT : 
		<input type="text" name="NGAYDAT" value="<?php echo $this->input->post('NGAYDAT'); ?>" />
	</div>
	<div>
		NGAYSHIP : 
		<input type="text" name="NGAYSHIP" value="<?php echo $this->input->post('NGAYSHIP'); ?>" />
	</div>
	<div>
		TONGDON : 
		<input type="text" name="TONGDON" value="<?php echo $this->input->post('TONGDON'); ?>" />
	</div>
	<div>
		HOTEN : 
		<input type="text" name="HOTEN" value="<?php echo $this->input->post('HOTEN'); ?>" />
	</div>
	<div>
		SDT : 
		<input type="text" name="SDT" value="<?php echo $this->input->post('SDT'); ?>" />
	</div>
	<div>
		DIACHI : 
		<input type="text" name="DIACHI" value="<?php echo $this->input->post('DIACHI'); ?>" />
	</div>
	<div>
		GIOITINH : 
		<input type="text" name="GIOITINH" value="<?php echo $this->input->post('GIOITINH'); ?>" />
	</div>
	<div>
		EMAIL : 
		<input type="text" name="EMAIL" value="<?php echo $this->input->post('EMAIL'); ?>" />
	</div>
	<div>
		GHICHU : 
		<input type="text" name="GHICHU" value="<?php echo $this->input->post('GHICHU'); ?>" />
	</div>
	<div>
		SOTHEODOI : 
		<input type="text" name="SOTHEODOI" value="<?php echo $this->input->post('SOTHEODOI'); ?>" />
	</div>
	<div>
		VANCHUYEN : 
		<input type="text" name="VANCHUYEN" value="<?php echo $this->input->post('VANCHUYEN'); ?>" />
	</div>
	<div>
		TINHTRANGTHANHTOAN : 
		<input type="text" name="TINHTRANGTHANHTOAN" value="<?php echo $this->input->post('TINHTRANGTHANHTOAN'); ?>" />
	</div>
	<div>
		NGAYTHANHTOAN : 
		<input type="text" name="NGAYTHANHTOAN" value="<?php echo $this->input->post('NGAYTHANHTOAN'); ?>" />
	</div>
	<div>
		NGAYHETHAN : 
		<input type="text" name="NGAYHETHAN" value="<?php echo $this->input->post('NGAYHETHAN'); ?>" />
	</div>
	<div>
		TRANSACTIONID : 
		<input type="text" name="TRANSACTIONID" value="<?php echo $this->input->post('TRANSACTIONID'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>