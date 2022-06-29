<table border="1" width="100%">
    <tr>
		<th>MAGIAOHANG</th>
		<th>TENNGUOIGIAO</th>
		<th>NGAYGIAO</th>
		<th>SDT</th>
		<th>XACNHAN</th>
		<th>Actions</th>
    </tr>
	<?php foreach($giaohang as $g){ ?>
    <tr>
		<td><?php echo $g['MAGIAOHANG']; ?></td>
		<td><?php echo $g['TENNGUOIGIAO']; ?></td>
		<td><?php echo $g['NGAYGIAO']; ?></td>
		<td><?php echo $g['SDT']; ?></td>
		<td><?php echo $g['XACNHAN']; ?></td>
		<td>
            <a href="<?php echo site_url('giaohang/edit/'.$g['MAGIAOHANG']); ?>">Edit</a> | 
            <a href="<?php echo site_url('giaohang/remove/'.$g['MAGIAOHANG']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
