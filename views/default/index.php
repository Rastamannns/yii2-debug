<?php
/**
 * @var DefaultController $this
 * @var array $manifest
 */

$this->pageTitle = 'Available Debug Data - Yii Debugger';
?>
<div class="default-index">
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<div class="yii2-debug-toolbar-block title">
					Yii Debugger
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row-fluid">
			<h1>Available Debug Data</h1>
			<table class="table table-condensed table-bordered table-striped table-hover table-filtered" style="table-layout: fixed;">
				<thead>
				<tr>
					<th style="width: 160px;">Time</th>
					<th style="width: 120px;">IP</th>
					<th style="width: 60px;">Method</th>
					<th style="width: 40px;">Code</th>
					<th>URL</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach ($manifest as $tag => $data): ?>
					<tr>
						<td><?= CHtml::link(date('Y-m-d h:i:s', $data['time']), array('view', 'tag' => $tag)) ?></td>
						<td><?= $data['ip'] ?></td>
						<td><?= $data['method'] ?></td>
						<td><?= isset($data['code']) ? $data['code'] : '' ?></td>
						<td style="word-break:break-all;"><?= $data['url'] ?></td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
