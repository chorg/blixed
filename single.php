<?php get_header(); ?>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=left&amp;uid=15373" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":179};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
<!-- content ................................. -->
<div id="content">

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

	<?php /* This is the navigation for previous/next post. It's disabled by default. ?>
	<p id="entrynavigation">
		<?php previous_post('<span class="previous">%</span>','','yes') ?>
		<?php next_post('<span class="next">%</span>','','yes') ?>
	</p>
	<?php */ ?>

	<div class="entry single">
	<div class="entry nav">
		<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> » <?php the_category(' , '); ?> » <?php the_title(); ?>
	</div>
		<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
		<p class="info"><?php if ($post->comment_status == "open") ?>
		<span class="date"><?php the_author(); ?></span>
   		<span class="author"><?php the_time('Y 年 n 月 j 日') ?><!-- at <?php the_time('h:ia')  ?>--></span>
		<span class="author"><?php comments_popup_link('留言评论', '1 条评论', '% 条评论', 'commentlink', ''); ?></span>
                <?php if(function_exists('the_views')) { the_views(); } ?>
   		<?php edit_post_link('Edit','<span class="editlink">','</span>'); ?>
   		</p>

		<?php the_content();?>
   	<p class="post-tags">
      <?php if (function_exists('the_tags')) the_tags('标签：', ', ', '<br/>'); ?>
    </p>
  </div>

<?php endwhile; ?>

<?php else : ?>

	<h2>Not Found</h2>
	<p>"Sorry, but you are looking for something that isn't here.</p>

<?php endif; ?>

<?php comments_template(); ?>


</div> <!-- /content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>