<?php get_header(); ?>

<!-- content ................................. -->
<div id="content">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<?php $custom_fields = get_post_custom(); //custom fields ?>

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

                <?php ($post->post_excerpt != "")? the_excerpt() : the_content(); ?>
		<p class="info"><?php if ($post->post_excerpt != "") { ?><a href="<?php the_permalink() ?>" class="more">阅读全文</a><?php } ?>
   		<?php comments_popup_link('留言评论', '1 条评论', '% 条评论', 'commentlink', ''); ?>
   		<em class="date"><?php the_time('Y 年 n 月 j 日') ?><!-- at <?php the_time('h:ia')  ?>--></em>
		<em class="author"><?php if(function_exists('the_views')) { the_views(); } ?></em>
   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>
   		</p>

	</div>

<!--
<?php trackback_rdf(); ?>
-->

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