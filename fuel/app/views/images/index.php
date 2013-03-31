

	<?php foreach ($images as $image): ?>

		<table>
			<tr>
				<td>name: </td>
				<td><?= $image->name() ?></td>
			</tr>

			<tr>
				<td>diskConfig: </td>
				<td><?= $image->diskConfig() ?></td>
			</tr>

			<tr>
				<td>created: </td>
				<td><?= $image->created() ?></td>
			</tr>

			<tr>
				<td>id: </td>
				<td><?= $image->id() ?></td>
			</tr>

			<tr>
				<td>links: </td>
				<td><?php // $image->links() ?>method not implemented</td>
			</tr>

			<tr>
				<td>metadata: </td>
				<td><?php // $image->metadata() ?>method not implemented</td>
			</tr>

			<tr>
				<td>minDisk: </td>
				<td><?= $image->minDisk() ?></td>
			</tr>

			<tr>
				<td>minRam: </td>
				<td><?= $image->minRam() ?></td>
			</tr>

			<tr>
				<td>progress: </td>
				<td><?= $image->progress() ?></td>
			</tr>

			<tr>
				<td>status: </td>
				<td><?= $image->status() ?></td>
			</tr>

			<tr>
				<td>updated: </td>
				<td><?= $image->updated() ?></td>
			</tr>

		</table>

		<hr>

	<?php endforeach; ?>