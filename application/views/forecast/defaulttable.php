<h2 id="forecastTitle"><?php echo Text::ucfirst($city) . ', ' . Text::ucfirst($region) . ', ' . Text::ucfirst($country); ?></h2>
<p class="addFavorite"><a href="#" class="addFavoriteLink" id="<?php echo "$country/$region/$city"; ?>">Add favorite</a></p>
<dl>
	<?php 
		foreach ($forecasts as $f)
		{
			$date = date('l', $f->getFromTime());
			$fulldate = date('Ymd', $f->getFromTime());
			$fromTime = date('H:i', $f->getFromTime());
			$toTime = date('H:i', $f->getToTime());
			$period = $f->getPeriod();
			$symbol = $f->getSymbol();
			$newsymbol = $symbol;

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
			
			$symbolName = $f->getSymbolName();
			$temperature = $f->getTemperature();
			echo "
				<dt>$date $fromTime - $toTime</dt>
				<dd><p><img src='" . URL::base('http') . "media/icons/$symbol.png' alt='$symbolName' /> <span class='temperature'>$temperature &deg; C</span><a href='#' id='$country/$region/$city/$fulldate/$period' class='detailsLink'>Details</a></p></dd>
			";
		}
	?>
</dl>
