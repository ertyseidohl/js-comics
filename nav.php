<nav>
<ul>
<?php
	foreach ($comics as $comic) {
		$current = $comic['id'] == $comic_id ? ' current ' : '';
		echo("<li class='$current'><a href='./${comic['id']}'>${comic['id']}: ${comic['name']}</a> (<a href='./${comic['id']}?svg'>svg</a>)</li>");
	}
?>
</ul>
</nav>
