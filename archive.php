<?php get_header(); ?>

<!-- content ................................. -->
<div id="content" class="archive">

<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>
	<div class="entry nav">
		<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> » <?php single_cat_title(); ?>
	</div>
	

	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
	<h2>Archive for <?php the_time('F jS, Y'); ?></h2>

  <?php /* If this is a tag archive */ } elseif (function_exists('is_tag') && is_tag()) { ?>
	<h2>Posts with the tag '<?php echo single_tag_title(); ?>'</h2>

	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
	<h2>Archive for <?php the_time('F, Y'); ?></h2>

	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2>Archive for <?php the_time('Y'); ?></h2>

	<?php /* If this is a search */ } elseif (is_search()) { ?>
	<h2>Search Results</h2>

	<?php /* If this is an author archive */ } elseif (is_author()) { ?>
	<h2>Author Archive</h2>

	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2>Blog Archives</h2>

<?php } ?>

<?php while (have_posts()) : the_post(); ?>

	<?php $custom_fields = get_post_custom(); ?>

	<?php if (isset($custom_fields["BX_post_type"]) && $custom_fields["BX_post_type"][0] == "mini") { ?>

	<hr class="low" />

	<div class="minientry">

		<p>
		<?php echo BX_remove_p($post->post_content); ?>
		<?php comments_popup_link('(0)', '(1)', '(%)', 'commentlink', ''); ?>
		<?php the_time('Y 年 n 月 j 日') ?><!-- at <?php the_time('h:ia')  ?>
		
   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>
   		</p>

	</div>

	<hr class="low" />

	<?php } else { ?>

	<div class="entry">

		<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

		<?php ($post->post_excerpt != "")? the_excerpt() : BX_shift_down_headlines($post->post_content); ?>
    
		<p class="info"><?php if ($post->post_excerpt != "") { ?><a href="<?php the_permalink() ?>" class="more">阅读全文</a><?php } ?>
   		<?php comments_popup_link('留言评论', '1 条评论', '% 条评论', 'commentlink', ''); ?>
   		<em class="date"><?php the_time('Y 年 n 月 j 日') ?><!-- at <?php the_time('h:ia')  ?>--></em>
		<em class="author"><?php if(function_exists('the_views')) { the_views(); } ?></em>
   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>
   		</p>

	</div>

	<?php } ?>

<?php endwhile; ?>

	<?php
			//Check For the Page Navi Plugin
			if (function_exists('wp_pagenavi')) {
   				wp_pagenavi();
			//Show Default Navigation if Page Navi Is Not Installed
			} else { ?>
   				<p><!-- this is ugly -->
				<span class="next"><?php previous_posts_link('Newer Posts') ?></span>
				<span class="previous"><?php next_posts_link('Older Posts') ?></span>
				</p>
			<? } ?>

<?php endif; ?>

</div> <!-- /content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>