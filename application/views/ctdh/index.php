<table border="1" width="100%">
    <tr>
		<th>MASP</th>
		<th>MADONHANG</th>
		<th>DONGIA</th>
		<th>SOLUONG</th>
		<th>Actions</th>
    </tr>
	<?php foreach($ctdh as $c){ ?>
    <tr>
		<td><?php echo $c['MASP']; ?></td>
		<td><?php echo $c['MADONHANG']; ?></td>
		<td><?php echo $c['DONGIA']; ?></td>
		<td><?php echo $c['SOLUONG']; ?></td>
		<td>
            <a href="<?php echo site_url('ctdh/edit/'.$c['MASP']); ?>">Edit</a> | 
            <a href="<?php echo site_url('ctdh/remove/'.$c['MASP']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
