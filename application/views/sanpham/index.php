<table border="1" width="100%">
    <tr>
		<th>MASP</th>
		<th>BANCHAY</th>
		<th>MATHUONGHIEU</th>
		<th>MADM</th>
		<th>TENSP</th>
		<th>CHITIET</th>
		<th>DONGIA</th>
		<th>GIAKM</th>
		<th>BAOHANH</th>
		<th>LUOTXEM</th>
		<th>NGAYDANG</th>
		<th>SOLUONG</th>
		<th>HINHANH</th>
		<th>TINHTRANGSP</th>
		<th>Actions</th>
    </tr>
	<?php foreach($sanpham as $s){ ?>
    <tr>
		<td><?php echo $s['MASP']; ?></td>
		<td><?php echo $s['BANCHAY']; ?></td>
		<td><?php echo $s['MATHUONGHIEU']; ?></td>
		<td><?php echo $s['MADM']; ?></td>
		<td><?php echo $s['TENSP']; ?></td>
		<td><?php echo $s['CHITIET']; ?></td>
		<td><?php echo $s['DONGIA']; ?></td>
		<td><?php echo $s['GIAKM']; ?></td>
		<td><?php echo $s['BAOHANH']; ?></td>
		<td><?php echo $s['LUOTXEM']; ?></td>
		<td><?php echo $s['NGAYDANG']; ?></td>
		<td><?php echo $s['SOLUONG']; ?></td>
		<td><?php echo $s['HINHANH']; ?></td>
		<td><?php echo $s['TINHTRANGSP']; ?></td>
		<td>
            <a href="<?php echo site_url('sanpham/edit/'.$s['MASP']); ?>">Edit</a> | 
            <a href="<?php echo site_url('sanpham/remove/'.$s['MASP']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
