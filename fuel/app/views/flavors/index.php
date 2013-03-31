

	<?php foreach ($flavors as $flavor): ?>

		<table>
			<tr>
				<td>name: </td>
				<td><?= $flavor->name() ?></td>
			</tr>

			<tr>
				<td>ram: </td>
				<td><?= $flavor->ram() ?></td>
			</tr>

			<tr>
				<td>vcpus: </td>
				<td><?= $flavor->vcpus() ?></td>
			</tr>

			<tr>
				<td>swap: </td>
				<td><?= $flavor->swap() ?></td>
			</tr>

			<tr>
				<td>rxtx_factor: </td>
				<td><?= $flavor->rxtx_factor() ?></td>
			</tr>

			<tr>
				<td>disk: </td>
				<td><?= $flavor->disk() ?></td>
			</tr>

			<tr>
				<td>id: </td>
				<td><?= $flavor->id() ?></td>
			</tr>

		</table>

		<hr>

	<?php endforeach; ?>