<?php echo form_open('nguoidung/edit/'.$nguoidung['MANGUOIDUNG']); ?>

	<div>
		TRANGTHAI : 
		<input type="checkbox" name="TRANGTHAI" value="1" <?php echo ($nguoidung['TRANGTHAI']==1 ? 'checked="checked"' : ''); ?> />
	</div>
	<div>
		MADANHGIA : 
		<input type="text" name="MADANHGIA" value="<?php echo ($this->input->post('MADANHGIA') ? $this->input->post('MADANHGIA') : $nguoidung['MADANHGIA']); ?>" />
	</div>
	<div>
		MAQUYEN : 
		<input type="text" name="MAQUYEN" value="<?php echo ($this->input->post('MAQUYEN') ? $this->input->post('MAQUYEN') : $nguoidung['MAQUYEN']); ?>" />
	</div>
	<div>
		USERNAME : 
		<input type="text" name="USERNAME" value="<?php echo ($this->input->post('USERNAME') ? $this->input->post('USERNAME') : $nguoidung['USERNAME']); ?>" />
	</div>
	<div>
		PASSWORD : 
		<input type="text" name="PASSWORD" value="<?php echo ($this->input->post('PASSWORD') ? $this->input->post('PASSWORD') : $nguoidung['PASSWORD']); ?>" />
	</div>
	<div>
		PASSWORD RESET : 
		<input type="text" name="PASSWORD_RESET" value="<?php echo ($this->input->post('PASSWORD_RESET') ? $this->input->post('PASSWORD_RESET') : $nguoidung['PASSWORD_RESET']); ?>" />
	</div>
	<div>
		HOTEN : 
		<input type="text" name="HOTEN" value="<?php echo ($this->input->post('HOTEN') ? $this->input->post('HOTEN') : $nguoidung['HOTEN']); ?>" />
	</div>
	<div>
		NGAYSINH : 
		<input type="text" name="NGAYSINH" value="<?php echo ($this->input->post('NGAYSINH') ? $this->input->post('NGAYSINH') : $nguoidung['NGAYSINH']); ?>" />
	</div>
	<div>
		EMAIL : 
		<input type="text" name="EMAIL" value="<?php echo ($this->input->post('EMAIL') ? $this->input->post('EMAIL') : $nguoidung['EMAIL']); ?>" />
	</div>
	<div>
		NGAYTAO : 
		<input type="text" name="NGAYTAO" value="<?php echo ($this->input->post('NGAYTAO') ? $this->input->post('NGAYTAO') : $nguoidung['NGAYTAO']); ?>" />
	</div>
	<div>
		NGAYSUA : 
		<input type="text" name="NGAYSUA" value="<?php echo ($this->input->post('NGAYSUA') ? $this->input->post('NGAYSUA') : $nguoidung['NGAYSUA']); ?>" />
	</div>
	<div>
		VAITRO : 
		<input type="text" name="VAITRO" value="<?php echo ($this->input->post('VAITRO') ? $this->input->post('VAITRO') : $nguoidung['VAITRO']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>