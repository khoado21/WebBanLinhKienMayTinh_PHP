<table border="1" width="100%">
    <tr>
		<th>MADANHGIA</th>
		<th>MANGUOIDUNG</th>
		<th>SOSAO</th>
		<th>NGAYDANHGIA</th>
		<th>Actions</th>
    </tr>
	<?php foreach($danhgia as $d){ ?>
    <tr>
		<td><?php echo $d['MADANHGIA']; ?></td>
		<td><?php echo $d['MANGUOIDUNG']; ?></td>
		<td><?php echo $d['SOSAO']; ?></td>
		<td><?php echo $d['NGAYDANHGIA']; ?></td>
		<td>
            <a href="<?php echo site_url('danhgium/edit/'.$d['MADANHGIA']); ?>">Edit</a> | 
            <a href="<?php echo site_url('danhgium/remove/'.$d['MADANHGIA']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
