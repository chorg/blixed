<?php
/*
Template Name: sitemap
*/
?>

<?php get_header(); ?>

<!-- content ................................. -->
<div id="content" class="archive">
		<h2>文章分类</h2>
			<ul><?php wp_list_cats('sort_column=name&optioncount=1') ?></ul>
		<h2>所有文章</h2>

		<?php BX_archive(); ?>

</div> <!-- /content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>