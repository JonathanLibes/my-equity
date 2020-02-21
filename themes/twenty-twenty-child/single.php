<?php

/**
 * The template for displaying single posts and pages.
 */

$post_id = get_the_ID();
$post_object = get_post($post_id);
$post_author_id = get_post_field('post_author', $post_id);
$categories = get_the_category($post_id);
get_header();
?>

<div class="container-fluid blog-container">
	<div class="row">

		<div class="col-lg-9">
			<div class="single-blog">
				<div class="jumbotron blog-hero" style="background-image: url(<?= get_field("blog_image")["url"]; ?>);">
				</div>
				<div class="row">
					<div class="col-lg-10">

					</div>
					<div class="col-lg-2">

					</div>
				</div>
				<h6><?= $categories[0]->name ?></h6>
				<h2><?= the_title(); ?></h2>
				<p class="author">By: <?php the_author_meta('display_name', $post_author_id); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<span>Published: <?= get_the_date(); ?></span></p>
				<div class="blog-body">
					<?= $post_object->post_content; ?>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="blog-sidebar">
				<h6>Follow Us:</h6>
				<div class="social">
					<ul>
						<li>
							<a target="_blank" href="<?= $instagram ?>">
								<i class="fa fa-instagram"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?= $linkedin ?>">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?= $facebook ?>">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
					</ul>
				</div>

				<div class="ads">
					<img class="advertisements" src="<?= get_field("advertisement", "options"); ?>" alt="Ads">
				</div>

				<?php

				if (is_active_sidebar('blog-side-bar')) : ?>
					<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
						<?php dynamic_sidebar('blog-side-bar'); ?>
					</div>

				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<script>
	jQuery(".es_subscription_form_submit").replaceWith("<button class=\"btn\" type=\"submit\"><i class=\"fa fa-angle-right\"></i></button>");
</script>

<?php get_footer(); ?>