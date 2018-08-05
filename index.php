<?php include('comicsdata.php'); ?>
<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<?php if ($currentcomic): ?>
<section>
	<img src="<?php echo("${currentcomic['url']}$ext"); ?>">
</section>
<article>
	<?php if (isset($currentcomic['note'])) { echo ($currentcomic['note']); } ?>
</article>
<?php endif; ?>

<?php include('footer.php'); ?>
