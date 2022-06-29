<?php echo form_open('danhmuc/edit/'.$danhmuc['MADM']); ?>

	<div>
		TENDM : 
		<input type="text" name="TENDM" value="<?php echo ($this->input->post('TENDM') ? $this->input->post('TENDM') : $danhmuc['TENDM']); ?>" />
	</div>
	<div>
		 MOTA : 
		<input type="text" name="_MOTA" value="<?php echo ($this->input->post('_MOTA') ? $this->input->post('_MOTA') : $danhmuc['_MOTA']); ?>" />
	</div>
	<div>
		HINHANH : 
		<input type="text" name="HINHANH" value="<?php echo ($this->input->post('HINHANH') ? $this->input->post('HINHANH') : $danhmuc['HINHANH']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>