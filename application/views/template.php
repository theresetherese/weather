<!doctype html>
<html lang="<?php echo I18n::$lang ?>">
	<head>
		<meta charset="utf-8">
		<title>WeatherApp</title>
		<meta name = "viewport" content = "width = device-width", "initial-scale = 1.0">
		<?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
		<?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
	</head>
	<body>
		<div class="wrapper">
			<h1>WeatherApp</h1>
			<div id="searchForm">
				<h2>Search for a location</h2>
				<?php
					echo Form::open('');
					echo Form::input('searchInput', '', array('id' => 'searchInput'));
					echo Form::submit('searchSubmit', 'Search', array('id' => 'searchSubmitBtn'));
	  				echo Form::close();
				?>
			</div>
			<div id="forecast">
				<?php echo $content ?>
			</div>
			<p class="footer">Weather forecast from yr.no, delivered by the Norwegian Meteorological Institute and the NRK.</p>
		</div>
	</body>
</html>