<table border="1" width="100%">
    <tr>
		<th>MAQUYEN</th>
		<th>TENQUYEN</th>
		<th>Actions</th>
    </tr>
	<?php foreach($vaitronguoidung as $v){ ?>
    <tr>
		<td><?php echo $v['MAQUYEN']; ?></td>
		<td><?php echo $v['TENQUYEN']; ?></td>
		<td>
            <a href="<?php echo site_url('vaitronguoidung/edit/'.$v['MAQUYEN']); ?>">Edit</a> | 
            <a href="<?php echo site_url('vaitronguoidung/remove/'.$v['MAQUYEN']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
