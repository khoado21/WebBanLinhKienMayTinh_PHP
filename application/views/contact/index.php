<table border="1" width="100%">
    <tr>
		<th>MALH</th>
		<th>HOTEN</th>
		<th>EMAIL</th>
		<th>NOIDUNG</th>
		<th>TINHTRANGDON</th>
		<th>NGAYGUI</th>
		<th>Actions</th>
    </tr>
	<?php foreach($contact as $c){ ?>
    <tr>
		<td><?php echo $c['MALH']; ?></td>
		<td><?php echo $c['HOTEN']; ?></td>
		<td><?php echo $c['EMAIL']; ?></td>
		<td><?php echo $c['NOIDUNG']; ?></td>
		<td><?php echo $c['TINHTRANGDON']; ?></td>
		<td><?php echo $c['NGAYGUI']; ?></td>
		<td>
            <a href="<?php echo site_url('contact/edit/'.$c['MALH']); ?>">Edit</a> | 
            <a href="<?php echo site_url('contact/remove/'.$c['MALH']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
