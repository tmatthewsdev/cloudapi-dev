
		<?php foreach ($servers as $server): ?>

		<table>
			<tr>
				<td>status: </td>
				<td><?= $server->status() ?></td>
			</tr>

			<tr>
				<td>updated: </td>
				<td><?= $server->updated() ?></td>
			</tr>

			<tr>
				<td>hostId: </td>
				<td><?= $server->hostId() ?></td>
			</tr>

			<tr>
				<td>id</td>
				<td><?= Html::anchor("servers/details/{$server->id()}", $server->id()) ?></td>
			</tr>

			<tr>
				<td>user_id</td>
				<td><?= $server->user_id() ?></td>
			</tr>

			<tr>
				<td>name</td>
				<td><?= $server->name() ?></td>
			</tr>

			<tr>
				<td>created</td>
				<td><?= $server->created() ?></td>
			</tr>

			<tr>
				<td>tenant_id</td>
				<td><?= $server->tenant_id() ?></td>
			</tr>

			<tr>
				<td>accessIPv4</td>
				<td><?= $server->accessIPv4() ?></td>
			</tr>

			<tr>
				<td>accessIPv6</td>
				<td><?= $server->accessIPv6() ?></td>
			</tr>

			<tr>
				<td>progress</td>
				<td><?= $server->progress() ?></td>
			</tr>

		</table>
		<hr>

		<?php endforeach; ?>

		
		