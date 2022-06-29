<table border="1" width="100%">
    <tr>
		<th>MANGUOIDUNG</th>
		<th>TRANGTHAI</th>
		<th>MADANHGIA</th>
		<th>MAQUYEN</th>
		<th>USERNAME</th>
		<th>PASSWORD</th>
		<th>PASSWORD RESET</th>
		<th>HOTEN</th>
		<th>NGAYSINH</th>
		<th>EMAIL</th>
		<th>NGAYTAO</th>
		<th>NGAYSUA</th>
		<th>VAITRO</th>
		<th>Actions</th>
    </tr>
	<?php foreach($nguoidung as $n){ ?>
    <tr>
		<td><?php echo $n['MANGUOIDUNG']; ?></td>
		<td><?php echo $n['TRANGTHAI']; ?></td>
		<td><?php echo $n['MADANHGIA']; ?></td>
		<td><?php echo $n['MAQUYEN']; ?></td>
		<td><?php echo $n['USERNAME']; ?></td>
		<td><?php echo $n['PASSWORD']; ?></td>
		<td><?php echo $n['PASSWORD_RESET']; ?></td>
		<td><?php echo $n['HOTEN']; ?></td>
		<td><?php echo $n['NGAYSINH']; ?></td>
		<td><?php echo $n['EMAIL']; ?></td>
		<td><?php echo $n['NGAYTAO']; ?></td>
		<td><?php echo $n['NGAYSUA']; ?></td>
		<td><?php echo $n['VAITRO']; ?></td>
		<td>
            <a href="<?php echo site_url('nguoidung/edit/'.$n['MANGUOIDUNG']); ?>">Edit</a> | 
            <a href="<?php echo site_url('nguoidung/remove/'.$n['MANGUOIDUNG']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
