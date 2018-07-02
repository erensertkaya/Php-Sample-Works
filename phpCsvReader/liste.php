<?php 
$current_dir=__DIR__.'/upload/';
if (is_dir($current_dir)) {
	if ($open_dir=opendir($current_dir)) {
		while (false !== ($dosya = readdir($open_dir))) {
			if ($dosya == "." or $dosya == "..") {
				continue;
			}
			echo "<li><a href='tablo.php?dosya=$dosya'>$dosya</li>";
		}
	}
}
?>