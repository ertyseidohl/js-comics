<?php
require_once('./comicsdata.php');

$items = '';

foreach ($comics as $comic) {
  $note = isset($comic['note']) ? $comic['note'] : $comic['name'];
$items .= <<<DOC
<item>
    <title>${comic['name']}</title>
    <link>https://erty.me/comics/js-comics/${comic['id']}</link>
    <description>$note</description>
    <guid>https://erty.me/comics/js-comics/${comic['id']}</guid>
</item>
DOC;
}

echo <<<DOC
<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
  <title>JavaScript Comics</title>
  <link>https://erty.me/comics/js-comics</link>
  <atom:link href="https://erty.me/comics/js-comics/rss.xml" rel="self" type="application/rss+xml" />
  <description>Comics about JavaScript. CC BY NC SA.</description>
  ${items}
</channel>
</rss>
DOC;

?>
