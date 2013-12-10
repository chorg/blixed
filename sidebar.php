<hr class="low" />

<!-- subcontent ................................. -->
<div id="subcontent">
  <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

  <?php /**
       * Pages navigation. Disabled by default because all new pages are added
       * to the main navigation.
       * If enabled: Blix default pages are excluded by default.
       *
  ?>
	<h3><em>Pages</em></h3>
	<ul class="pages">
	<?php
			wp_list_pages('title_li=&sort_column=menu_order');
	?>
	</ul>
  <?php */ ?>

<?php if (is_home()) { ?>
	<h3><em>Categories</em></h3>

	<ul class="categories">
    <?php 
		if (function_exists('wp_list_categories')) 
		{	
			wp_list_categories('title_li='); 
		}
		else 
		{   
			wp_list_cats('optioncount=0&hierarchical=0');  
		}  
		?>
	</ul>

	<h3><em>Links</em></h3>

	<ul class="links">
	<?php get_links('-1', '<li>', '</li>', '', 0, 'name', 0, 0, -1, 0); ?>
	</ul>

	<h3><em>Feeds</em></h3>

	<ul class="feeds">
	<li><a href="<?php bloginfo_rss('rss2_url'); ?> ">Entries (RSS)</a></li>
	<li><a href="<?php bloginfo_rss('comments_rss2_url'); ?> ">Comments (RSS)</a></li>
	</ul>

<?php } ?>
  <?php if (function_exists('wp_tag_cloud')) {	?>
  <h3><em><?php _e('Tags'); ?></em></h3>
  <div class="block">
    <p>
      <?php wp_tag_cloud(); ?>
    </p>
  </div>
  <?php } ?>

<?php if (is_single()) { ?>

	<h3><em>Calendar</em></h3>

	<?php get_calendar() ?>

	<h3><em>Most Recent Posts</em></h3>

	<ul class="posts">
	<?php BX_get_recent_posts($p,10); ?>
	</ul>

<?php } ?>


<?php if (is_page("archives") || is_archive() || is_search()) { ?>

	<h3><em>Calendar</em></h3>

	<?php get_calendar() ?>

	<?php if (!is_page("archives")) { ?>

		<h3><em>Posts by Month</em></h3>

		<ul class="months">
		<?php get_archives('monthly','','','<li>','</li>',''); ?>
		</ul>

	<?php } ?>

	<h3><em>Posts by Category</em></h3>

	<ul class="categories">
	<?php wp_list_cats('sort_column=name&hide_empty=0'); ?> 
	</ul>

<?php } ?>
  <?php endif; ?>


</div> <!-- /subcontent -->