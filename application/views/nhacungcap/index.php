<table border="1" width="100%">
    <tr>
		<th>MANCC</th>
		<th>TENNCC</th>
		<th>DIACHI</th>
		<th>THANHPHO</th>
		<th>SDT</th>
		<th>TINHTRANGXACNHAN</th>
		<th>Actions</th>
    </tr>
	<?php foreach($nhacungcap as $n){ ?>
    <tr>
		<td><?php echo $n['MANCC']; ?></td>
		<td><?php echo $n['TENNCC']; ?></td>
		<td><?php echo $n['DIACHI']; ?></td>
		<td><?php echo $n['THANHPHO']; ?></td>
		<td><?php echo $n['SDT']; ?></td>
		<td><?php echo $n['TINHTRANGXACNHAN']; ?></td>
		<td>
            <a href="<?php echo site_url('nhacungcap/edit/'.$n['MANCC']); ?>">Edit</a> | 
            <a href="<?php echo site_url('nhacungcap/remove/'.$n['MANCC']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
