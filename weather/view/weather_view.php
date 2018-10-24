
<?php if(isset($data['list']) && !empty($data['list'])) : ?>
	<?php foreach($data['list'] as $key => $item): ?>
		<div style="border-bottom: 1px solid #ccc; margin-bottom: 10px;">
			<p> Date : <?= $item['dt_txt']; ?> </p>
			<div style="margin-left: 20px;">
				<p> Nhiet do: <?= ceil($item['main']['temp']); ?> C</p>
				<p> Muc nuoc bien: <?= $item['main']['sea_level']; ?> </p>
				<p> Do am: <?= $item['main']['humidity']; ?> %</p>
				<p> Mieu ta: <?= $item['weather'][0]['description']; ?> </p>
				<p> Toc do gio: <?= $item['wind']['speed']; ?> m/s</p>
			</div>
		</div>
	<?php endforeach; ?>
<?php else : ?>
	<h3> Not Found data </h3>
<?php endif; ?>