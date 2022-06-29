<table border="1" width="100%">
    <tr>
		<th>MADONHANG</th>
		<th>MAVOUCHER</th>
		<th>MAGIAOHANG</th>
		<th>MANGUOIDUNG</th>
		<th>NGAYDAT</th>
		<th>NGAYSHIP</th>
		<th>TONGDON</th>
		<th>HOTEN</th>
		<th>SDT</th>
		<th>DIACHI</th>
		<th>GIOITINH</th>
		<th>EMAIL</th>
		<th>GHICHU</th>
		<th>SOTHEODOI</th>
		<th>VANCHUYEN</th>
		<th>TINHTRANGTHANHTOAN</th>
		<th>NGAYTHANHTOAN</th>
		<th>NGAYHETHAN</th>
		<th>TRANSACTIONID</th>
		<th>Actions</th>
    </tr>
	<?php foreach($donhang as $d){ ?>
    <tr>
		<td><?php echo $d['MADONHANG']; ?></td>
		<td><?php echo $d['MAVOUCHER']; ?></td>
		<td><?php echo $d['MAGIAOHANG']; ?></td>
		<td><?php echo $d['MANGUOIDUNG']; ?></td>
		<td><?php echo $d['NGAYDAT']; ?></td>
		<td><?php echo $d['NGAYSHIP']; ?></td>
		<td><?php echo $d['TONGDON']; ?></td>
		<td><?php echo $d['HOTEN']; ?></td>
		<td><?php echo $d['SDT']; ?></td>
		<td><?php echo $d['DIACHI']; ?></td>
		<td><?php echo $d['GIOITINH']; ?></td>
		<td><?php echo $d['EMAIL']; ?></td>
		<td><?php echo $d['GHICHU']; ?></td>
		<td><?php echo $d['SOTHEODOI']; ?></td>
		<td><?php echo $d['VANCHUYEN']; ?></td>
		<td><?php echo $d['TINHTRANGTHANHTOAN']; ?></td>
		<td><?php echo $d['NGAYTHANHTOAN']; ?></td>
		<td><?php echo $d['NGAYHETHAN']; ?></td>
		<td><?php echo $d['TRANSACTIONID']; ?></td>
		<td>
            <a href="<?php echo site_url('donhang/edit/'.$d['MADONHANG']); ?>">Edit</a> | 
            <a href="<?php echo site_url('donhang/remove/'.$d['MADONHANG']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
