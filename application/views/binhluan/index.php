<table border="1" width="100%">
    <tr>
		<th>MABINHLUAN</th>
		<th>MANGUOIDUNG</th>
		<th>NOIDUNG</th>
		<th>NGAYTAO</th>
		<th>Actions</th>
    </tr>
	<?php foreach($binhluan as $b){ ?>
    <tr>
		<td><?php echo $b['MABINHLUAN']; ?></td>
		<td><?php echo $b['MANGUOIDUNG']; ?></td>
		<td><?php echo $b['NOIDUNG']; ?></td>
		<td><?php echo $b['NGAYTAO']; ?></td>
		<td>
            <a href="<?php echo site_url('binhluan/edit/'.$b['MABINHLUAN']); ?>">Edit</a> | 
            <a href="<?php echo site_url('binhluan/remove/'.$b['MABINHLUAN']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
