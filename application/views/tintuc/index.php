<table border="1" width="100%">
    <tr>
		<th>MATINTUC</th>
		<th>MANGUOIDUNG</th>
		<th>TIEUDE</th>
		<th>NOIDUNG</th>
		<th>NGAYDANG</th>
		<th>NGAYSUA</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tintuc as $t){ ?>
    <tr>
		<td><?php echo $t['MATINTUC']; ?></td>
		<td><?php echo $t['MANGUOIDUNG']; ?></td>
		<td><?php echo $t['TIEUDE']; ?></td>
		<td><?php echo $t['NOIDUNG']; ?></td>
		<td><?php echo $t['NGAYDANG']; ?></td>
		<td><?php echo $t['NGAYSUA']; ?></td>
		<td>
            <a href="<?php echo site_url('tintuc/edit/'.$t['MATINTUC']); ?>">Edit</a> | 
            <a href="<?php echo site_url('tintuc/remove/'.$t['MATINTUC']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
