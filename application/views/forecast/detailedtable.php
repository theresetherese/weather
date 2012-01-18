<h2 id="forecastTitle"><?php echo Text::ucfirst($city) . ', ' . Text::ucfirst($region) . ', ' . Text::ucfirst($country); ?></h2>
<?php 
	$date = date('l', $forecasts->fromTime);
	$fromTime = date('H:i', $forecasts->fromTime);
	$toTime = date('H:i', $forecasts->toTime);
?>

<h3><?php echo "$date, $fromTime - $toTime"; ?></h3>
<table>
	
	<?php 
			$period = $forecasts->period;
			$symbol = $forecasts->symbol;
			$newsymbol = $symbol;
			$symbolName = $forecasts->symbolName;
			$temperature = $forecasts->temperature;
			$precipitation = $forecasts->precipitation;
			$pressure = $forecasts->pressure;
			$windDirectionDeg = $forecasts->windDirectionDeg;
			$windDirection = $forecasts->windDirection;
			$windSpeed = $forecasts->windSpeed;

			if($symbol < 10)
			{
				$newsymbol = '0' . $symbol;
			}
			
			if($symbol < 4 OR $symbol > 4 AND $symbol < 9)
			{
				if($period === 3)
				{
					$newsymbol = $newsymbol . 'n';
				}
				else
				{
					$newsymbol = $newsymbol . 'd';	
				}
			}
			
			$symbol = $newsymbol;
			
			
			echo "
				<p><img src='" . URL::base('http') . "media/icons/$symbol.png' alt='$symbolName' /> $temperature &deg; C</p>
				<p>Precipitation: $precipitation</p>
				<p>Pressure: $pressure</p>
				<p>Wind: $windSpeed mps, $windDirectionDeg &deg; $windDirection</p>
			";
	?>
</table>
<p><a href="#" id='<?php echo "$country/$region/$city"; ?>' class="goBackLink">Go back</a></p>