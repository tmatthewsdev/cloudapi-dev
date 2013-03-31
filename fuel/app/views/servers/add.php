	<table>
		<tr>
			<td>name</td>
			<td><input name="name" type="text"></td>
		</tr>

		<tr>
			<td>image</td>
			<td>
				<select name="image">
					<?php foreach ($images as $image): ?>
					<option value=""><?= $image->name() ?></option>
					<?php endforeach; ?>
				</select>
				<?= Html::anchor('servers/images', 'details', ['target' => '_blank']) ?>
			</td>
		</tr>

		<tr>
			<td>flavor</td>
			<td>
				<select name="flavor">
					<?php foreach ($flavors as $flavor): ?>
					<option value=""><?= $flavor->name() ?></option>
					<?php endforeach; ?>
				</select>
				<?= Html::anchor('servers/flavors', 'details', ['target' => '_blank']) ?>
			</td>
		</tr>
	</table>