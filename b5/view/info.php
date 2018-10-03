<table width="100%" border="1" cellpadding="0" cellspacing="0">
	<caption>Thong tin sinh vien</caption>
	<thead>
		<tr>
			<th>MSV</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Genger</th>
			<th>Money</th>
		</tr>
	</thead>
	<tbody>
		<?php if($result): ?>
			<?php foreach($result as $k => $val): ?>
		    <tr>
			    <td><?= $val['msv']; ?></td>
			    <td><?= $val['name']; ?></td>
			    <td><?= $val['email']; ?></td>
			    <td><?= $val['phone']; ?></td>
			    <td><?= $val['address']; ?></td>
			    <td><?= ($val['gender'] == 0) ? 'Nu' : 'Nam'; ?></td>
			    <td><?= number_format($val['money']); ?></td>
		    </tr>
		    <?php endforeach; ?>
		<?php else: ?>
		<tr>
			<td colspan="7">
				<h3>Not found data</h3>
			</td>
		</tr>
		<?php endif; ?>
	</tbody>
</table>