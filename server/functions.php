<?
function read_directory($dir, $default, $link_text)
{
	echo "<div id='gallery'>
	<a href='".$dir.$default."'>".$link_text."</a>";
	if ($handle = opendir($dir)) {
		/* This is the correct way to loop over the directory. */
		$files = array();
		while($files[] = readdir($handle));
		closedir($handle);
		sort($files, SORT_NUMERIC);
		foreach ($files as $file)
		{
			if ($file != "" && $file != "." && $file != ".." && $file != $default) {
				echo "<a href='".$dir.$file."'></a>";
			}
		}
	}
	echo "</div>";
}
?>