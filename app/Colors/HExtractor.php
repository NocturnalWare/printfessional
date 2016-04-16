<?php 

namespace App\Colors;

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;


class HExtractor{
	
	public function findColors($userImage, $max){
		if($max < 3){
			$max = 3;
		}
		
		$palette = Palette::fromGD($userImage->getCore());
		// $palette is an iterator on colors sorted by pixel count

		// it offers some helpers too
		$topFive = $palette->getMostUsedColors($max);

		$colorCount = count($palette);

		// $blackCount = $palette->getColorCount(Color::fromHexToInt('#000000'));


		// an extractor is built from a palette
		$extractor = new ColorExtractor($palette);

		// it defines an extract method which return the most “representative” colors
		$colors = $extractor->extract($max);

		$hexColors = [];
		foreach($colors as $co){
			$hexColors[] = Color::fromIntToHex($co);
		};

		$printimage = $userImage->limitColors($max, $hexColors[2]);
		$printimage->save('../public/images/bar.jpg');
		
		return $hexColors;
	}
}
