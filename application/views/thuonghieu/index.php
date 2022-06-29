<table border="1" width="100%">
    <tr>
		<th>MATHUONGHIEU</th>
		<th>TENTHUONGHIEU</th>
		<th>Actions</th>
    </tr>
	<?php foreach($thuonghieu as $t){ ?>
    <tr>
		<td><?php echo $t['MATHUONGHIEU']; ?></td>
		<td><?php echo $t['TENTHUONGHIEU']; ?></td>
		<td>
            <a href="<?php echo site_url('thuonghieu/edit/'.$t['MATHUONGHIEU']); ?>">Edit</a> | 
            <a href="<?php echo site_url('thuonghieu/remove/'.$t['MATHUONGHIEU']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
