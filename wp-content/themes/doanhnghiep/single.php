<?php 
get_header(); 
$category = get_the_category();
$id_category = $category[0]->term_id;
?>	
<div id="wrap">
	<div class="g_content <?php if($id_category==9 || $id_category==10 || $id_category==11 || $id_category==12 || $id_category==14){ echo 'location_template'; }?>">
		
		<div class="container">

			<?php
			if($id_category!=9 && $id_category!=10 && $id_category!=11 && $id_category!=12 && $id_category!=14){
				?>
				<div id="breadcrumb" class="breadcrumb">
					<ul>
						<?php  echo the_breadcrumb(); ?>
					</ul>
				</div> 
			<?php }?>
			<div class="row">
				<?php 
				wpb_set_post_views(get_the_ID());
				if(have_posts()) :
					while(have_posts()) : the_post(); ?>
						<div class="col-sm-9  content_left">

							<article class="content_single_post">
								<?php
								if($id_category!=9 && $id_category!=10 && $id_category!=11 && $id_category!=12 && $id_category!=14){
									?>
									<div class="single_post_info">
										<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<p><?php the_time('d/m/Y');?><span>  <?php the_time('g:i a') ?></span> 

											| Luợt xem : <?php echo wpb_get_post_views(get_the_ID()); ?>
										</p>
									</div>
								<?php } ?>
								<div class="text_content">
									<?php  the_content(); ?>
									<?php if(in_category(9) || in_category(10) || in_category(11) || in_category(12) || in_category(14) ){
											echo do_shortcode('[contact-form-7 id="590" title="Form đặt mua"]');
										}?>
								</div>
								
							</article>
							<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) ); ?>
							<?php if($related && $id_category!=9 && $id_category!=10 && $id_category!=11 && $id_category!=12 && $id_category!=14){ ?>
								<div class="related_posts">
									<h2>Tin cùng chuyên mục</h2>
									<ul class="row"> 
										<?php

										if( $related ) foreach( $related as $post ) {
											setup_postdata($post); ?>
											<li class="col-md-4 col-sm-4 col-xs-12">
												<div class="list_item_related pw">
													<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
													<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>">
														<a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail(); ?></a></figure>
														<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
													</div>

												</li>
											<?php }
											wp_reset_postdata(); ?>
										</ul>   
									</div>
								<?php } ?> 
							</div>
							<div class="col-sm-3 sidebar">
								<?php dynamic_sidebar('sidebar1'); ?> 
							</div> 
						<?php endwhile;
					else:
					endif;
					wp_reset_postdata();
					?>
				</div>

			</div>

		</div>
	</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	<?php get_footer(); ?>
