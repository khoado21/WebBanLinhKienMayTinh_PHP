<table border="1" width="100%">
    <tr>
		<th>MAVOUCHER</th>
		<th>TENMA</th>
		<th>NGAYBD</th>
		<th>NGAYKT</th>
		<th>TYLE</th>
		<th>TRANGTHAI</th>
		<th>Actions</th>
    </tr>
	<?php foreach($voucher as $v){ ?>
    <tr>
		<td><?php echo $v['MAVOUCHER']; ?></td>
		<td><?php echo $v['TENMA']; ?></td>
		<td><?php echo $v['NGAYBD']; ?></td>
		<td><?php echo $v['NGAYKT']; ?></td>
		<td><?php echo $v['TYLE']; ?></td>
		<td><?php echo $v['TRANGTHAI']; ?></td>
		<td>
            <a href="<?php echo site_url('voucher/edit/'.$v['MAVOUCHER']); ?>">Edit</a> | 
            <a href="<?php echo site_url('voucher/remove/'.$v['MAVOUCHER']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
