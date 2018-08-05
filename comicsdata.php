<?php

if (isset($_GET['comic_id'])) {
	$comic_id = (int)($_GET['comic_id']);
} else {
	$comic_id = 0;
}

$use_svg = isset($_GET['svg']);

$comics = [
	[
		'id' => 1,
		'name' => 'JavaScript',
		'url' => './img/javascript-1-intro',
	],
	[
		'id' => 2,
		'name' => 'JSON',
		'url' => './img/javascript-2-json'
	],
	[
		'id' => 3,
		'name' => 'AJAX',
		'url' => './img/javascript-3-ajax'
	],
	[
		'id' => 4,
		'name' => 'jQuery',
		'url' => './img/javascript-4-jquery'
	],
	[
		'id' => 5,
		'name' => 'SPAs',
		'url' => './img/javascript-5-spas'
	],
];

$currentcomic = [
	'id' => 0,
	'name' => 'Welcome!',
	'url' => './img/welcome',
	'note' => 'Hello! These are some comics I\'ve made about JavaScript and the JavaScript ecosystem. I draw these on the subway to and from work so the update schedule will be sporadic. You can subscribe to the <a href="./rss.xml">RSS feed</a> if you\'re interested in future comics!<br><br>By default the comics are png, but svgs are also provided if you want larger but more scalable images :)<br><br>
		Inspired by <a href="https://drawings.jvns.ca/">Julia Evans</a>. Drawn using <a href="https://www.squidnotes.com/">Squid</a>.'
];

foreach ($comics as $comic) {
	if ($comic['id'] == $comic_id) {
		$currentcomic = $comic;
		break;
	}
}

$ext = $use_svg ? '.svg' : '.png';
