<table border="1" width="100%">
    <tr>
		<th>MAANH</th>
		<th>MASP</th>
		<th>LINKANH</th>
		<th>Actions</th>
    </tr>
	<?php foreach($hinhanh as $h){ ?>
    <tr>
		<td><?php echo $h['MAANH']; ?></td>
		<td><?php echo $h['MASP']; ?></td>
		<td><?php echo $h['LINKANH']; ?></td>
		<td>
            <a href="<?php echo site_url('hinhanh/edit/'.$h['MAANH']); ?>">Edit</a> | 
            <a href="<?php echo site_url('hinhanh/remove/'.$h['MAANH']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
