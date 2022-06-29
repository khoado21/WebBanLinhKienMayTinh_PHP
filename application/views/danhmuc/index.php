<table border="1" width="100%">
    <tr>
		<th>MADM</th>
		<th>TENDM</th>
		<th> MOTA</th>
		<th>HINHANH</th>
		<th>Actions</th>
    </tr>
	<?php foreach($danhmuc as $d){ ?>
    <tr>
		<td><?php echo $d['MADM']; ?></td>
		<td><?php echo $d['TENDM']; ?></td>
		<td><?php echo $d['_MOTA']; ?></td>
		<td><?php echo $d['HINHANH']; ?></td>
		<td>
            <a href="<?php echo site_url('danhmuc/edit/'.$d['MADM']); ?>">Edit</a> | 
            <a href="<?php echo site_url('danhmuc/remove/'.$d['MADM']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
