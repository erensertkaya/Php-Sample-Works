<?php 
if ($_GET['dosya']) {
	$dosya=$_GET['dosya'];
	$path='upload/'.$dosya;
	$content=file_get_contents($path);
	$lines=explode("\n", $content);

	echo '<table>';
	foreach ($lines as $key => $val) {
		echo '<tr>';
		$values= explode(",", $val);
		foreach ($values as $value) {
			if ($key) {
				echo '<td>' . $value .$key. '</td>';
			}
			else
			{
				echo '<th>' . $value .$key. '</th>';
			}
		}
		echo '</tr>';
	}
}
echo '</table>';
?>